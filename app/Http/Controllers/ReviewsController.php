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
            'reviewer' => 'required|max:256',
            'title' => 'required|max:256'
            ));

        //dd($request);
        //Store into the database
        $reviews = new Review; 
        $reviews -> reviewer = $request -> reviewer; 
        $reviews -> title = $request -> title; 
        $reviews -> intro = Purifier::clean($request -> intro); 
        $reviews -> body = Purifier::clean($request -> body); 
        $reviews -> slug = rand().'_'.strtolower(preg_replace('/\s+/', '_', $request -> reviewer));

        if ($request->hasFile('image_link')) {
            $banner_image=$request->image_link;
            if($banner_image){
              $imageName=$banner_image->getClientOriginalName();
              $banner_image->move('images/reviews/',$imageName);
              $reviews['image_link']=$imageName;
          }
      }


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
        if ($request->input('title') == $reviews->title) {
            $this->validate($request, array(
            'title' => '',
            'reviewer' => 'required|max:256'
                ));
        }else{
            $this->validate($request, array(
            'reviewer' => 'required|max:256',
            'title' => 'required|max:256'
                ));
        }

        $reviews = Review::find($id);

        $reviews -> reviewer = $request -> reviewer; 
        $reviews -> title = $request -> title; 
        $reviews -> intro = Purifier::clean($request -> intro); 
        $reviews -> body = Purifier::clean($request -> body); 
        // $reviews -> slug = rand().'_'.strtolower(preg_replace('/\s+/', '_', $request -> reviewer));



        $banner_image=$request->image_link;
        if($banner_image){
          $imageName=$banner_image->getClientOriginalName();
          $banner_image->move('images/reviews/',$imageName);
          $reviews['image_link']=$imageName;
      }

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
