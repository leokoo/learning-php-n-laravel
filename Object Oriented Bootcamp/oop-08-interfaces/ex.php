<?php

// Think of interface as a contract. Thus methods in the interface isn't for logic, but for the contract
interface Animal {
	public function communicate();
}

// After creating an interface, we must create the implementation
class Dog implements Animal {
	public function communicate()
	{
		return 'bark';
	}
}