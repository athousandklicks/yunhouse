<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tale;
use App\ArticleImage;
use App\Character;
use App\Download;
use App\ComingSoon;

class staticPagesController extends Controller
{
	public function getIndex()
	{
		$tales = Tale::all();
		$comingsoon = ComingSoon::where('status', '=', true)->get();
		return view('frontend.index', compact('comingsoon'));
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


	public function getYunhouseCharacters()
	{
		 $characters = Character::all();
		return view('character.yunhouse_character',compact('characters'));
	}

	    public function getSingle($id) {
    	// fetch from the DB based on slug
    	$characters = Character::where('id', '=', $id)->first();
    	return view('character.single',compact('characters'));
    }

    public function getDownloadList(){

    	$downloads = Download::all();
		return view('frontend.list-of-download',compact('downloads'));
    }

    public function getDownloadFile($file_name) {
    $file_path = public_path('download/'.$file_name);
    return response()->download($file_path);
  }

}
