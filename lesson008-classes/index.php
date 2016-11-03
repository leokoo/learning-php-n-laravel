<?php
require 'functions.php';

class Task {
	// A function in a class is called a method
	protected $description;
	// protected & public are encapsulation
	protected $completed = false;

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

$task  = new Task( 'Go to the store' );
// Any arguments in the instantiation can be accepted in the constructor

$task->complete();
var_dump($task->isComplete());

//dd($task);

//require calls the view file
//require 'index.view.php';
?>