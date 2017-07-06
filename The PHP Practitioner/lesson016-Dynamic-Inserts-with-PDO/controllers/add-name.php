<?php

/* 
	links :
		http://php.net/manual/en/reserved.variables.post.php
		http://php.net/manual/en/function.header.php

	because the id auto-increments, we only need to set the name
	Thus, we'll take whatever the user types into the text box
	Because $app[database] = new QueryBuilder, we'll need to make the new method in QueryBuilder.php
*/
$app['database']->insert('users2', [
	'name' => $_POST['name']
]);

header('Location: /');