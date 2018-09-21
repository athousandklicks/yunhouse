<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tag;
use Session;

class TagController extends Controller
{
   public function __construct() {
    $this->middleware('auth:admin');
}

public function index()
{
    $tags = Tag::all();
    return view('tags.index',compact('tags'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array('name' => 'required|max:255'));

      $tags = new Tag;
      $tags->name = $request->name;
      $tags->save();

      Session::flash('success', 'New Tag was successfully created!');

      return redirect()->route('tags.index');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tags = Tag::find($id);
        return view('tags.show', compact('tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::find($id);
        return view('tags.edit', compact('tags'));
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
        $tags = Tag::find($id);

        $this->validate($request, ['name' => 'required|max:255']);

        $tags->name = $request->name;
        $tags->save();

        Session::flash('success', 'Successfully saved your new tag!');

        return redirect()->route('tags.show', $tags->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags = Tag::find($id);
        $tags->debates()->detach();

        $tags->delete();

        Session::flash('success', 'Tag was deleted successfully');

        return redirect()->route('tags.index');
    }
}
