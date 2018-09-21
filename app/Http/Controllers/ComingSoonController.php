<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ComingSoon;
use Session;

class ComingSoonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $coming_soons = ComingSoon::all();
        return view('comingsoon.index', compact('coming_soons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'image_link' => 'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $coming_soons = new ComingSoon;

        $coming_soons -> status = $request -> status;

        if ($request->hasFile('image_link')) {
            $banner_image=$request->image_link;
            if($banner_image){
              $imageName=$banner_image->getClientOriginalName();
              $banner_image->move('images/comingsoon/',$imageName);
              $coming_soons['image_link']=$imageName;
          }
      }
      $coming_soons->save();

      Session::flash('success', 'New Image has been Added');

      return redirect()->route('comingsoon.index');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $coming_soons = ComingSoon::find($id);
      return view('comingsoon.edit',compact('coming_soons'));
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
        $coming_soons = ComingSoon::find($id);

        $this->validate($request, array(
            'image_link' => 'image|mimes:png,jpg,jpeg|max:10000'
            ));

        $coming_soons = ComingSoon::find($id);

        $coming_soons -> status = $request -> status;

        $banner_image=$request->image_link;
        if($banner_image){
          $imageName=$banner_image->getClientOriginalName();
          $banner_image->move('images/comingsoon/',$imageName);
          $coming_soons['image_link']=$imageName;
      }


      $coming_soons->save();

      Session::flash('success', 'Image has been Update');

      return redirect()->route('comingsoon.index');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coming_soons = ComingSoon::find($id);
        $coming_soons->delete();
        return redirect()->route('comingsoon.index');
    }
}
