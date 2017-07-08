<?php

class UsersController
{

	public function index()
	{
		$users = App::get('database')->selectAll('users2');

		return view('users', compact('users'));
	}

}