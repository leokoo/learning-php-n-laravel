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
		$users = App::get('database')->selectAll('users2');

		require 'views/index.view.php';
	}

	public function about()
	{
		require 'views/about.view.php';
	}

	public function contact()
	{
		require 'views/contact.view.php';	
	}
}