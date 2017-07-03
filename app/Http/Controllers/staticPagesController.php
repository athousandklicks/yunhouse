<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticPagesController extends Controller
{
	public function getIndex()
	{
		//$index = Index::all();
		return view('frontend.index');
	}


	public function getAboutAuthor()
	{
return view('frontend.about_author');
	}


	public function getDreamingYunhouse()
	{
return view('frontend.dreaming_yunhouse');
	}


	public function getYunhouseInBrief()
	{
		return view('frontend.yunhouse_in_brief');

	}
}
