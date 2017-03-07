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
		// adding a person (which is from another class), is sending messages
		$this->staff->add($person);
	}
}

class Staff {
	// Staff will serve as a collection
	protected $members = [];

	public function add(Person $person)
	{
		$this->members[] = $person;
	}
}

$jeffrey = New Person('Jeffrey Way');

$staff = New Staff;

$laracasts = New Business($staff);

$laracasts->hire($jeffrey);

var_dump($staff);