<?php 

namespace Acme;

class AuthController {
	// How we write a method depends on the scale of the program. It's about choosing the right tool for the job. Scope and context.
	protected $registration;

	// Constructor injection - if you are going to reference this object in multiple instances of the class
	public function __construct(RegisterUser $registration) 
	{
		$this->registration = $registration;
	}

	public function register()
	{
		/* When the register method is triggered, it'll defer to a registration service and tell it to execute. 
			This passes in an array of data and the current object
		*/
		$this->registration->execute([], $this);
	}
	/*Method Injection
		public function register(RegisterUser $registration) 
		{
		$registration->execute();
		}
	*/
	
	/* We need a way to notify the controller if the registration fails. As such, we'll use Messages
		Messages */
	public function userRegisteredSuccessfully() 
	{
		var_dump('User has been registered! Redirect');
	}

		public function userRegisteredFailed() 
	{
		var_dump('User registration failed. Redirect back');
	}
}