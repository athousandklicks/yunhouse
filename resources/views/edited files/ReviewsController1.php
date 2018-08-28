<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Review;
use Session;
use Purifier;


class ReviewsController extends Controller
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
        $reviews = Review::all();
        return view('review.list-of-review',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('review.add-reviews');
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
            'name' => 'required|max:256'
            ));

        //dd($request);
        //Store into the database
        $reviews = new Review; 
        $reviews -> name = $request -> name; 
        $reviews -> body = Purifier::clean($request -> body); 

        if ($request->hasFile('media')) {
            $media_file=$request->media;
            if($media_file){
              $imageName=$media_file->getClientOriginalName();
              $media_file->move('audio/',$imageName);
              $reviews['media']=$imageName;
          }
      }


        $reviews -> save(); //save to the database

        Session::flash('success','Review successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added post
        //the show function is given the newly added id as a parameter.
        return redirect()->route('reviews.show', $reviews->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $reviews = Review::find($id);
     return view('review.show-review',compact('reviews'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $reviews = Review::find($id);
     return view('review.edit-review',compact('reviews'));
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
        $reviews = Review::find($id);
            //validate data entry
        if ($request->input('name') == $reviews->name) {
            $this->validate($request, array(
                'name' => ''
                ));
        }else{
            $this->validate($request, array(
                'name' => 'required'
                ));
        }

        $reviews = Review::find($id);

        $reviews -> name = $request->input('name');
        $reviews -> body = Purifier::clean($request->input('body'));


        $media_file=$request->media;
        if($media_file){
          $imageName=$media_file->getClientOriginalName();
          $media_file->move('audio/',$imageName);
          $reviews['media']=$imageName;
      }

        $reviews -> save(); //save to the database

        Session::flash('success','Blog post successfully updated'); //import use Session;

        //redirect to post.show page
        return redirect()->route('reviews.show', $reviews->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $reviews = Review::find($id);
         $reviews->delete();
         return redirect()->route('reviews.index');
    }
}
