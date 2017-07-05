<?php

$tasks = [	
	'title' => 'Coding in PHP', 
	'due date' => 'tomorrow', 
	'assigned to' => 'Jimmy', 
	'completed?' => 'No' 
];

$tasks['work'] = 'Yes';

//require calls the view file
require 'index.view.php';