<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tale;
use Purifier;
use Session;
use App\Comment;

class TalesController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tales = Tale::all();
        return view('backend.tales-list',compact('tales'));
    }



    public function index2() //Lists all tales
    {
               //Store all the pages in a variable
        $tales = Tale::all();

        //return a view with all the variable passed in
        return view('backend.tales-list',compact('tales'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.add-tales');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                     //validate data entry
        $this->validate($request, array(
            'title' => 'required|max:1000|unique:tales,title',
            'body'  => 'required',
            'featured_tale'=>'image|mimes:png,jpg,jpeg|max:10000'
          //  'published'  => 'required|max:8'
            ));

       // print_r($request);

        //dd($request);

        //Store into the database
        $tales = new Tale; //create a new object of the Model you created. Also remember to include the class - use App\tales
        $tales -> title = $request -> title; //assign the title
        $tales -> body = Purifier::clean($request -> body); //assign the body
        $tales -> slug = strtolower(preg_replace('/\s+/', '_', $request -> title));
        
        $tales -> published = $request -> published; //assign the title

if ($request->hasFile('featured_tale')) {
        $banner_image=$request->featured_tale;
        if($banner_image){
          $imageName=$banner_image->getClientOriginalName();
          $banner_image->move('images/tales/',$imageName);
          $tales['featured_tale']=$imageName;
      }
}


        $tales -> save(); //save to the database

        Session::flash('success','New Tale successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added post
        //the show function is given the newly added id as a parameter.
        return redirect()->route('tales.show', $tales->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tales = Tale::find($id);
        return view('backend.show-tale',compact('tales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //retrive post from DB and save to a variable
        $tales = Tale::find($id);
        //return the view and pass in the variable already created
        return view('backend.edit-tales',compact('tales'));
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
       $tales = Tale::find($id);
            //validate data entry
       if ($request->input('title') == $tales->title) {
        $this->validate($request, array(
            'body'  => 'required',
            'featured_tale'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));
    }else{
        $this->validate($request, array(
            'title' => 'required|max:1000|unique:tales,title',
            'body'  => 'required',
            'featured_tale'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));
    }
    $tales = Tale::find($id);

    $tales -> title = $request->input('title');
    $tales -> body = Purifier::clean($request->input('body'));

    $tales -> slug = strtolower(preg_replace('/\s+/', '_', $request -> title));

        $tales -> published = $request -> published; //assign the title

        $banner_image=$request->featured_tale;
        if($banner_image){
          $imageName=$banner_image->getClientOriginalName();
          $banner_image->move('images/tales/',$imageName);
          $tales['featured_tale']=$imageName;
      }

        $tales -> save(); //save to the database

        Session::flash('success','Blog post successfully updated'); //import use Session;

        //redirect to post.show page
        return redirect()->route('tales.show', $tales->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tales = Tale::find($id);
         $tales->delete();
         return redirect()->route('tales.index');
    }


    public function totm($id)
    {
    //    $featured_tales = Tale::where('featured_tales', '=', 1)->first();
    //    $featured_tales -> featured_tales = 0;

        //retrive post from DB and save to a variable
        $tales = Tale::find($id);
        //return the view and pass in the variable already created
        return view('backend.totm-index',compact('tales'));
    }

    public function updateTotm(Request $request, $id)
    {
        //retrive post from DB and save to a variable
        $tales = Tale::find($id);
        $tales -> title = $request->input(1);
        //return the view and pass in the variable already created
        return view('backend.tales-list',compact('tales'));
    }
}
