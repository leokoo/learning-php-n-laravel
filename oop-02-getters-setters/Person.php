<?php

class Person {
	protected $age;
	protected $name;

	public function __construct($name) 
	{
		$this->name = $name;
	}

// Setter and Getter functions enables us to introduce behaviour however we need to
	public function setAge($age)
	{
		if ($age < 18) {
			throw new Exception('Person is not old enough');
		}
		$this->age = $age;
	}

	public function getAge()
	{
		// In order to return the amount of days John has rotected
		return $this->age * 365;
	}
}

$john = new Person('John Doe');
$john->setAge(30);
$john->age = 3;
/* The lack of encapsulation enables people to directly access the property
e.g: $john->age = 3;
That's why we need to proceed and encapsulate the age property */

var_dump($john->getAge());