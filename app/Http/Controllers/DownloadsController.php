<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use Session;


class DownloadsController extends Controller
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
        $downloads = Download::all();
        return view('download.download-list',compact('downloads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('download.add-download');
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
            'filename' => 'required|max:256'
            ));

        $downloads = new Download; 
        $downloads -> filename = $request -> filename; 

        if ($request->hasFile('control')) {
            $file_id=$request->control;   
            if($file_id){
              $newFileName=$file_id->getClientOriginalName();
              $file_id->move('download/',$newFileName);
              $downloads['control']=$newFileName;
          }
      }

      $downloads -> save(); 

      Session::flash('success','File successfully saved');
      return redirect()->route('downloads.show', $downloads->id);
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $downloads = Download::find($id); 
        return view('download.show-download',compact('downloads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $downloads = Download::find($id); 
     return view('download.edit-download',compact('downloads'));
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
        $downloads = Download::find($id); 

        if ($request->input('filename') == $downloads->filename) {
            $this->validate($request, array(
                ));
        }else{
            $this->validate($request, array(
                'filename' => 'required|max:256'
                ));
        }

        $downloads = Download::find($id);
        $downloads -> filename = $request -> filename; 

        if ($request->hasFile('control')) {
            $file_id=$request->control;   
            if($file_id){
              $newFileName=$file_id->getClientOriginalName();
              $file_id->move('download/',$newFileName);
              $downloads['control']=$newFileName;
          }
      }
        $downloads -> save();
        Session::flash('success','Blog post successfully updated'); 
        return redirect()->route('downloads.show', $downloads->$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $downloads = Download::find($id);
         $downloads->delete();
         return redirect()->route('downloads.index');
    }
}
