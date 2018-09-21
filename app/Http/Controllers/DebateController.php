<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Debate;
use Purifier;
use Session;
use App\Comment;
use App\Tag;

class DebateController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
}


public function index()
{
    $debates = Debate::all();
    // dd($debates );
    return view('debate.list-debate',compact('debates'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('debate.add-debate',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
                //validate data entry
        $this->validate($request, array(
            'title' => 'required|max:1000|unique:debates,title',
            'body'  => 'required',
            'author'  => 'required',
            'sub_title' => 'max:2000',
            'image_link'=>'image|mimes:png,jpg,jpeg|max:10000',
            'coming_soon'=>'image|mimes:png,jpg,jpeg|max:10000'
          //  'published'  => 'required|max:8'
            ));


        //Store into the database
        $debates = new Debate; //create a new object of the Model you created. Also remember to include the class - use App\debates
        $debates -> title = $request -> title; //assign the title
        $debates -> sub_title = $request->input('sub_title');
        $debates -> author = $request -> author; //assign the author
        $debates -> body = Purifier::clean($request -> body); //assign the body
        $debates -> slug = strtolower(preg_replace('/\s+/', '_', $request -> title));
        $debates -> download_pdf = strtolower(preg_replace('/\s+/', '_', $request -> title));
        $debates -> referenced = $request -> referenced; //assign the title
        $debates -> published = $request -> published; //assign the title
        $debates -> active_debate = $request -> active_debate;

        if ($request->hasFile('image_link')) {
            $banner_image=$request->image_link;
            if($banner_image){
              $imageName=$banner_image->getClientOriginalName();
              $banner_image->move('images/debates/',$imageName);
              $debates['image_link']=$imageName;
          }
      }

         if ($request->hasFile('coming_soon')) {
            $banner_image=$request->coming_soon;
            if($banner_image){
              $imageName=$banner_image->getClientOriginalName();
              $banner_image->move('images/debates/',$imageName);
              $debates['coming_soon']=$imageName;
          }
      }

        $debates -> save(); //save to the database

        $debates->tags()->sync($request->tags, false);



        Session::flash('success','New Debates successfully saved'); //import use Session;
        return redirect()->route('debates.show', $debates->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $debates = Debate::find($id);

        return view('debate.show-debate',compact('debates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //retrive debates from DB and save to a variable
        $debates = Debate::find($id);

        $tags = Tag::pluck('name','id');
        //return the view and pass in the variable already created
        return view('debate.edit-debate',compact('debates','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $debates = Debate::find($id);
            //validate data entry
        if ($request->input('title') == $debates->title) {
            $this->validate($request, array(
                'body'  => 'required',
                'author'  => 'required',
                'sub_title' => 'max:2000',
                'image'=>'image|mimes:png,jpg,jpeg|max:10000',
                'coming_soon'=>'image|mimes:png,jpg,jpeg|max:10000'
                ));
        }else{
            $this->validate($request, array(
                'title' => 'required|max:1000|unique:debates,title',
                'body'  => 'required',
                'author'  => 'required',
                'image'=>'image|mimes:png,jpg,jpeg|max:10000'
                ));
        }
        $debates = Debate::find($id);

        $debates -> title = $request->input('title');
        $debates -> sub_title = $request->input('sub_title');
        $debates -> body = Purifier::clean($request->input('body'));
        $debates -> author = $request -> input('author'); //assign the author
        $debates -> slug = strtolower(preg_replace('/\s+/', '_', $request -> title));
        $debates -> download_pdf = strtolower(preg_replace('/\s+/', '_', $request -> title));
        $debates -> referenced = $request -> referenced; //assign the title
        $debates -> published = $request -> published; //assign the title
        $debates -> active_debate = $request -> active_debate;


        $banner_image=$request->image_link;
        if($banner_image){
          $imageName=$banner_image->getClientOriginalName();
          $banner_image->move('images/debates/',$imageName);
          $debates['image_link']=$imageName;
      }


      $banner_image=$request->coming_soon;
        if($banner_image){
          $imageName=$banner_image->getClientOriginalName();
          $banner_image->move('images/debates/',$imageName);
          $debates['coming_soon']=$imageName;
      }

        $debates -> save(); //save to the database

        if (isset($request->tags)) {
            $debates->tags()->sync($request->tags);
        } else {
            $debates->tags()->sync(array());
        }


        Session::flash('success','Debate Topic successfully updated'); //import use Session;

        //redirect to debates.show page
        return redirect()->route('debates.show', $debates->$id);
    }


    public function destroy($id)
    {
     $debates = Debate::find($id);
     $debates->tags()->detach();
     $debates->delete();
     Session::flash('success', 'The debate was successfully deleted.');
     return redirect()->route('debates.index');
 }

 
}
