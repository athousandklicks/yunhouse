<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tale;

class YuntaleController extends Controller
{

    public function getSingle($slug) {
    	// fetch from the DB based on slug
    	$tale = Tale::where('slug', '=', $slug)->first();

    	// return the view and pass in the post object
    	return view('Yuntale.single',compact('tale'));
    }

    	public function getTales()
	{
		$tales = Tale::orderBy('created_at', 'asc')->paginate(5);
		return view('yuntale.list-of-tales',compact('tales'));
	}
   
}
