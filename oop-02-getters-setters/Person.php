<?php

class Person {
	public $age;
	public $name;

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
		return $this->age;
	}
}

$john = new Person('John Doe');
$john->setAge(30);
/* The lack of encapsulation enables people to directly access the property
e.g: $john->age = 3;
That's why we need to proceed and encapsulate the age property */

var_dump($john->getAge());