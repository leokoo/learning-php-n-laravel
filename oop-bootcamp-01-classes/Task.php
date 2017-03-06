<?php

class Task {
	public $description;
	public $completed = false;

	public function __construct($description) 
	{
		$this->description = $description;
	}

	public function complete() 
	{
		$this->completed = true;
	}
}

$task = new Task('Learn OOP in PHP');

var_dump($task->description);

$task->complete();

var_dump($task->completed);