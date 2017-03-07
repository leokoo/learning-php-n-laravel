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
	// If the business needs a staff to exists, we'll need to require $staff in the constructor
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	// by writing 'public function hire(Person $person)', we're using Type Hinting
	public function hire(Person $person)
	{
		/* add $person to staff collection
			$this->staff is a new instance of staff. Meaning == new Staff
		*/
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