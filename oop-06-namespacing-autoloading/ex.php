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

	public function getStaffMembers()
	{
		return $this->staff->members();
	}
}

class Staff {
	// Staff will serve as a collection
	protected $members = [];

	function __construct($members = [])
	{
		$this->members = $members;
	}
	
	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function members()
	{
		return $this->members;
	}
}

$jeffrey = New Person('Jeffrey Way');

$staff = New Staff([$jeffrey]);
// Because the business depends upon the $staff to run, we need to create a new instance of Staff before we can create a new instance of Business
$laracasts = New Business($staff);

// $laracasts->hire($jeffrey);
$laracasts->hire(New Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());