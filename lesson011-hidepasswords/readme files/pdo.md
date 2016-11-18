##To connect to the database
* Use PDO, not `mysql_connect()`

##Using Exceptions
* http://php.net/manual/en/language.exceptions.php
	* We use exceptions to find out if the PDO connects to the DB
	* example : 
	```
		try {
					return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'homestead', 'secret');
			} catch (PDOException $e) {
					die($e->getMessage()); //getMessage() will return a description of what went wrong
			}
	```
##Using var_dump with fetchAll gets all objects. To remove duplicates, use
```
	$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
```
##To fetch it into a class instead
```
	$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
```
*The aim is to isolate reusable code to a function/method