## What are interfaces

- A contract. It lays down the terms for implementation. 
- That means classes implement the function stated within the interface

## When to use interface?
- When there are things all classes will share in common

```
interface Animal {
	public function communicate();
}

class Dog implements Animal {
	public function communicate()
	{
		return 'bark';
	}
}
```

- When we type hint a function but don't want to make it concrete.

```
interface Logger {
	public function execute($message);
}

class LogToFile implements Logger {
	public function execute($message)
	{
			var_dump('log message to file : ' . $message);
	}
}

class LogToDatabase implements Logger {
	public function execute($message)
	{
		var_dump('log message to database : ' . $message);
	}
}

class UserController {
	protected $logger;

	function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'Leokoo';
		$this->logger->execute($user);
	}
}
```