<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Debate;

class FrontDebateController extends Controller
{
	public function index()
	{
		$debates = Debate::all();

		// $debates = Debate::orderBy('created_at', 'desc')->limit(4)->get();

		$debates = Debate::where('active_debate', '=', true)->limit(1)->get();

		return view('debatefront.index',compact('debates'));
	}

	public function getSingle($slug) {
        // fetch from the DB based on slug
		$debates = Debate::where('slug', '=', $slug)->first();

        // return the view and pass in the post object
		return view('debatefront.single',compact('debates'));
	}

	public function getDebates()
	{
		$debates = Debate::orderBy('created_at', 'asc')->where('published', '=', true)->where('referenced', '=', false)->paginate(6);
        //dd($debates);
		return view('debatefront.list-of-debates',compact('debates'));
	}
}
