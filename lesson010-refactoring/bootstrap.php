<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
	Connection::make()
	);
// in-lining the pdo in order to shorten/refactor the code
//removing $query and changing it to a return. And then we call it on index.php