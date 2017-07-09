<?php

namespace App\Controllers;

class UsersController
{

	public function index()
	{
		$users = App::get('database')->selectAll('users2');

		return view('users', compact('users'));
	}

	public function store()
	{
		App::get('database')->insert('users2', [
			'name' => $_POST['name']
		]);

		return redirect('users');
	}

}