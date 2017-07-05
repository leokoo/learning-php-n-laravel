<?php

$people = [		
	'John',
	'Leo'
];

require 'functions.php';

//require calls the view file
age_checker(19);
dd($people);
//require 'index.view.php';
?>