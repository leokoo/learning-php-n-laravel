<?php

namespace Acme;
class Staff {
	// Staff will serve as a collection
	protected $members = [];

	function __construct($members = [])
	{
		$this->members = $members;
	}
	
	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function members()
	{
		return $this->members;
	}
}