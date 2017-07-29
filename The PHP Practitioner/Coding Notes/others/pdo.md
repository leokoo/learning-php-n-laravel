## PDO

links: 	<br>
	http://php.net/manual/en/language.exceptions.php <br>
	http://php.net/manual/en/exception.getmessage.php <br> - getMessage() will return a description of what went wrong (the exception) <br>
	http://php.net/manual/en/pdostatement.fetchobject.php <br> - PDO::FETCH_OBJ stores each row into an object <br>
	http://php.net/manual/en/pdo.prepare.php <br> - Prepares a statement for execution and returns a statement obj <br>
	http://php.net/manual/en/pdostatement.execute.php <br> - Executes a prepared statement <br>
	http://php.net/manual/en/reserved.variables.post.php <br> - An associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request. <br>

## To connect to the database

- Use PDO, not `mysql_connect()`

## Using Exceptions

	* We use exceptions to find out if the PDO connects to the DB
	* example : 
	```
		try {
					return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'homestead', 'secret');
			} catch (PDOException $e) {
					die($e->getMessage()); //getMessage() will return a description of what went wrong
			}
	```
## Using var_dump with fetchAll gets all objects. To remove duplicates, use

```
	$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
```

## To fetch it into a class instead

```
	$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
```

*The aim is to isolate reusable code to a function/method