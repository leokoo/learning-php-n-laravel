<?php

function dd($input) {
	echo '<pre>';
		die(var_dump($input));
	echo '</pre>';
}

function age_checker($age) {
	if ($age >= 21) {
		echo 'You can enter';
	}
	else {
		echo 'You are too young!';
	}
}

?>