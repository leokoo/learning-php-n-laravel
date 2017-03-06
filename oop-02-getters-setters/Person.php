<?php

class Person {
	public $age;
	public $name;

	public function __construct($name) 
	{
		$this->name = $name;
	}
}

$john = new Person('John Doe');
$john->age = 30;

var_dump($john);