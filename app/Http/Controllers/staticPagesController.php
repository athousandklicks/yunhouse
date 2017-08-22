<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tale;
use App\Character;

class staticPagesController extends Controller
{
	public function getIndex()
	{
		$tales = Tale::all();
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

    public function getYunhouseWelcome(){

    }

}
