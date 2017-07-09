<?php

use App\Core\App;

App::bind('config', require 'config.php');

// App::bind('Leo', 'Koo');
// die(var_dump(App::get('Leo')));

// the bootstrap file is like a little factory worker. To build up the query
// so here we have a new connection and then inject it back to the Querybuilder.php file via instantiating a new QueryBuilder

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
	));

// in-lining the pdo in order to shorten/refactor the code
//removing $query and changing it to a return. And then we call it on index.php

function view($name, $data=[])
{
	extract($data);
	
	return require "app/views/{$name}.view.php";
}

function redirect($data)
{
	header("Location: /{$data}");
}