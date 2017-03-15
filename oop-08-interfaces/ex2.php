<?php
// polymorphism & a strategy patterm
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
	/* The problem with using LogToFile here is we're hardcoding a specific implementation, which causes problems later on. Here's where using Interface comes in
	Program to an interface, not an implementation
	If there were ever any classes/tasks that we have multiple implementations and or methods of executing it, we need to create an interface
	 */
	function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'Leokoo';
		// The question is how do we log this information
		$this->logger->execute($user);
	}
}

// With interface, when we want to change from LogToFile to LogToDatabase, we don't have to change the UserController class
$controller = new UserController(new LogToDatabase);
$controller->show();