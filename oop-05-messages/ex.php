<?php

class Person {
	protected $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
}

// The Business hires a Person. And the Person then joins the Staff
class Business {
	public function hire()
	{
		# code...
	}
}

class Staff {

}