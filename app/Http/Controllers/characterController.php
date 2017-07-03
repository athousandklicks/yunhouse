<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class characterController extends Controller
{
	public function getCy()
	{
		//$index = Index::all();
		return view('character.cy');
	}

	public function getAfricaFreedom()
	{
		return view('character.africa_freedom');
	}

	public function getAfricaPicture()
	{
		return view('character.africa_picture');
	}

	public function getAfricanAdventurers()
	{
		return view('character.african_adventurers');
	}

	public function getAfrinc()
	{
		return view('character.afrinc');
	}

	public function getAlphonsus()
	{
		return view('character.alphonsus');
	}


	public function getBerlinerCult()
	{
		return view('character.berliner_cult');
	}

	public function getBerylFairbank()
	{
		return view('character.beryl_fairbanks');
	}

	public function getGafla()
	{
		return view('character.gafla');
	}

	public function getLekwot()
	{
		return view('character.lekwot');
	}

	public function getMnama()
	{
		return view('character.mnama');
	}

	public function getNkungolo()
	{
		return view('character.nkungolo');
	}

	public function getOgesayi()
	{
		return view('character.ogesayi');
	}

	public function getPalavar()
	{
		return view('character.palavar');
	}


}