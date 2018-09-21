<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class palaverController extends Controller
{
    public function getIndex()
	{
		$tales = Tale::all();
		return view('palaverhall.palaver-home');
	}

	public function gallery1884()
	{
		return view('palaverhall.1884-gallery');

	}

	public function debate1884()
	{
		return view('palaverhall.1884-debate');

	}

	public function taleOfTheMonth()
	{
		return view('palaverhall.tale-of-the-month');

	}

	public function excerptOfTheWeek()
	{
		return view('palaverhall.excerpt-of-the-week');

	}

	public function authorsBlog()
	{
		return view('palaverhall.authors-blog');

	}

		public function yunhouseQuotes()
	{
		return view('palaverhall.yunhouse-quotes');

	}
}
