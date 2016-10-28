<?php

$age = [		'John' => 21, 
						'Leo' => 30, 
						'Andrew' => 18, 
					];

function dd($input) {
	echo '<pre>';
		die(var_dump($input));
	echo '</pre>';
}

//require calls the view file
//require 'index.view.php';

dd('Hello World!');

?>