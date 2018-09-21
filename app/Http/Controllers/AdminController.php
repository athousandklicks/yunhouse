<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Admin;
use App\User;
use App\Tale;
use App\Review;
use App\Comment;
use App\Debate;
use App\Tag;

use Session;

class AdminController extends Controller
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
        $admins = Admin::all();
        return view('admin.list-of-admin',compact('admins'));
    }

    public function dashboard()
    {
       
        $admins = Admin::all();
        $users = User::all();
        $tales = Tale::all();
        $reviews = Review::all();
        $comments = Comment::all();
        $debates = Debate::all();
        $tags = Tag::all();

        return view('backend.index', compact('admins','users','tales',
            'reviews', 'comments', 'debates', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-admin');
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
            'name' => 'required|max:256',
            'email'   => 'required|email',
            'password' => 'required|min:6'
            ));

        $admins = new Admin; 
        $admins -> name = $request -> name; 
        $admins -> email = $request -> email; 
        $admins -> password = Hash::make($request -> password); 

        $admins -> save(); 

        Session::flash('success','Review successfully saved');
        return redirect()->route('admins.show', $admins->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admins = Admin::find($id);
        return view('admin.admin-show',compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admin::find($id);
        return view('admin.edit-admin',compact('admins'));
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
            'name' => 'required|max:256',
            'email'   => 'required|email',
            'password' => 'required|min:6'
            ));

        $admins = Admin::find($id);

        $admins -> name = $request->input('name');
        $admins -> email = $request->input('email');
        $admins -> password = Hash::make($request -> password);

         $admins -> save(); 

        Session::flash('success','Admin successfully Updated');
        return redirect()->route('admins.show', $admins->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Admin::find($id);
         $admins->delete();
         return redirect()->route('admins.index');
    }
}
