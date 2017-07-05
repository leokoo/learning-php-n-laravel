<?php
require 'functions.php';

class Task {
	// A function in a class is called a method
	public $description;
	// protected & public are encapsulation
	public $completed = false;

	public function __construct( $description ) 
	{
		$this->description = $description;
	// assign an argument ($description) to the variable ($this->description)
	}

	// We can use any methods within the class to interact with it

	/* 
		To set the value of an object

		Within a class, we use
			$this->variable = value;
		Outside of the class, we use
			$instantiated_class->variable = value;
	*/

	public function complete() 
	{
		$this->completed = true;
	}

	public function isComplete() 
	{
		return $this->completed;
	}

}

$tasks  = [
	new Task('Wash the car'),
	new Task('Take the dog for a walk'),
	new Task('Meet Miss F')
];
// a new Task object
// Any arguments in the instantiation can be accepted in the constructor
// We can have an array of tasks

$tasks[2]->complete();
/*
## To access a method from the object
	$task->complete();
*/

//require calls the view file
require 'index.view.php';
?>