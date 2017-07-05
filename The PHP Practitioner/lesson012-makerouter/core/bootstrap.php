<?php
// the bootstrap file is like a little factory worker. To build up the query
$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

// so here we have a new connection and then inject it back to the Querybuilder.php file via instantiating a new QueryBuilder
$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
	);
// in-lining the pdo in order to shorten/refactor the code
//removing $query and changing it to a return. And then we call it on index.php