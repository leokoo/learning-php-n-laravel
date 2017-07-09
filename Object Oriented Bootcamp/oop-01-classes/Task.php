<?php

class Task {
	// variables inside classes == property
	public $description;
	public $title;
	public $completed = false;

	public function __construct($description, $title) 
	{
		$this->description = $description;
		$this->title = $title;
	}

	public function complete() 
	{
		$this->completed = true;
	}
}

$task = new Task('Learn PHP', 'Learn OOP in PHP the easy way');

var_dump($task->description);
var_dump($task->title);

$task->complete();

var_dump($task->completed);