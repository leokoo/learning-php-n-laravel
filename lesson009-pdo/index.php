<?php
// require 'functions.php';

// Catching exceptions
try {
	$pdo = new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', '');
} catch (PDOException $e) {
	die('Cannot connect lah');
}


//require calls the view file
require 'index.view.php';
?>