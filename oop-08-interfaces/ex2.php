<?php
// polymorphism & a strategy patterm
interface Logger {
	//
}

class LogToFile {
	public function execute($message)
	{
			var_dump('log message to file :' . $message);
	}
}

class LogToDatabase {
	public function execute($message)
	{
		var_dump('log message to database :' . $message);
	}
}

class UserController {
	protected $logger;
	// The problem with using LogToFile here is we're hardcoding a specific implementation, which causes problems later on. Here's where using Interface comes in
	function __construct(LogToFile $logger)
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

$controller = new UserController(new LogToFile);
$controller->show();