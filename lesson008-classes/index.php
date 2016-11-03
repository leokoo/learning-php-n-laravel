<?php
require 'functions.php';

class Task {
	// A function in a class is called a method
	public $description;
	// protected & public are encapsulation
	public $completed = false;

	public function __construct( $description ) 
	{
	// __construct() is the constructor; automatically triggered on instantiation
		$this->description = $description;
		// We're setting a property to '$this' object
	}

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
//a new Task object
// Any arguments in the instantiation can be accepted in the constructor
// We can have an array of tasks

//$task->complete();
//var_dump($task->isComplete());


//require calls the view file
require 'index.view.php';
?>