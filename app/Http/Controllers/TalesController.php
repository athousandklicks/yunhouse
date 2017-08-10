<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tale;
use Purifier;
use Session;

class TalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               //Store all the pages in a variable
        $tales = Tale::all();

        //return a view with all the variable passed in
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
            'title' => 'required|max:1000',
            'body'  => 'required',
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
            //validate data entry
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body'  => 'required'
            ));

          $tales = Tale::find($id);

        $tales -> title = $request->input('title');
        $tales -> body = Purifier::clean($request->input('body'));

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
        //
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
