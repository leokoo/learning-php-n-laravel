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
	protected $staff;
	// If the business needs a staff to function, we'll need to start with a staff
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(Person $person)
	// by writing 'public function hire(Person $person)', we're using Type Hinting
	{
		$this->staff->add($person);
	}
}

class Staff {
	// Staff will serve as a collection
	protected $members = [];
	public function add(Person $person)
	{

	}
}