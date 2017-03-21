<?php namespace Acme;

class AuthController {
	// How we write a method depends on the scale of the program. It's about choosing the right tool for the job. Scope and context.
	protected $registration;

	public function __construct(RegisterUser $registration) {
		$this->registration = $registration;
	}

	public function register()
	{
		$this->registration->execute();
	}
	//Method Injection
	// public function register(RegisterUser $registration) 
	// {
	// 	$registration->execute();
	// }

}