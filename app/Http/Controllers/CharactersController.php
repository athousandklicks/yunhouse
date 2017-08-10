<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use Purifier;
use Session;
use Image;
use File;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('character.add-character');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //validate data entry
        $this->validate($request, array(
            'name' => 'required|max:1000',
            'body'  => 'required',
            'img'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));
        
        //Store into the database
        $character = new Character; 
        $character -> name = $request -> name;
        $character -> body = Purifier::clean($request -> body);

        $banner_image=$request->img;
        if($banner_image){
          $imageName=$banner_image->getClientOriginalName();
          $banner_image->move('images/character/',$imageName);
          $character['img']=$imageName;
      }

        $character -> save(); //save to the database

        Session::flash('success','Character saved'); 

        return redirect()->route('characters.show', $character->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::find($id);
        return view('character.show-characters',compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Character::find($id);
        return view('character.edit-characters',compact('character'));
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

        $this->validate($request, array(
            'name' => 'required|max:1000',
            'body'  => 'required',
            'img'=>'image|mimes:png,jpg,jpeg|max:10000'
            ));


        $character = Character::find($id);

        $character -> name = $request->input('name');
        $character -> body = Purifier::clean($request->input('body'));
if ($request->hasFile('img')) {
    $banner_image = $request->file('img');
       // $banner_image=$request->img;
  
          $imageName=$banner_image->getClientOriginalName();
          $banner_image->move('images/character/',$imageName);
          $character['img']=$imageName;
   
}

        $character -> save(); //save to the database

        Session::flash('success', ' Character Successfully Updated'); //import use Session;

        //redirect to post.show page
        return redirect()->route('characters.show', $character->$id);
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
}
