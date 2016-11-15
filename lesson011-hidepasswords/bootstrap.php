<?php
// the bootstrap file is like a little factory worker. To build up the query
require 'database/Connection.php';
require 'database/QueryBuilder.php';

// so here we have a new connection and then inject it back to the Querybuilder.php file
return new QueryBuilder(
	Connection::make()
	);
// in-lining the pdo in order to shorten/refactor the code
//removing $query and changing it to a return. And then we call it on index.php