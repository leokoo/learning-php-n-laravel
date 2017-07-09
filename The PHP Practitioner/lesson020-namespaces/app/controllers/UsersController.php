<?php

namespace App\Controllers;

use App\Core\App; // because if we don't do this, it'll reference App\Controllers\App

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