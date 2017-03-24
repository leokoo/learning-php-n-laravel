<?php

namespace Acme;

interface RespondsToUserRegistration {

	public function UserRegisteredSuccessfully();
	
	public function UserRegisteredFailed();
}