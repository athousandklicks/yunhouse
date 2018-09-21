<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ArticleImage;
use Session;


class ArticleImagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $article_images = ArticleImage::all();
        return view('articleimages.index', compact('article_images'));
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

        $article_images = new ArticleImage;

        if ($request->hasFile('image_link')) {
            $banner_image=$request->image_link;
            if($banner_image){
              $imageName=$banner_image->getClientOriginalName();
              $banner_image->move('images/articles/',$imageName);
              $article_images['image_link']=$imageName;
          }
      }
      $article_images->save();

      Session::flash('success', 'New Image has been Added');

      return redirect()->route('articleimages.index');
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
        //
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
        //
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
