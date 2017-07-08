<?php

/*
	The Controller's job is to
	- receive a request
	- delegate
	- return a response
*/

class PagesController
{
	public function home()
	{
		return view('index');
	}

	public function about()
	{
		return view('about');
	}

	public function contact()
	{
		return view('contact');	
	}
}