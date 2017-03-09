<?php

namespace Acme;
// The Business hires a Person. And the Person then joins the Staff
class Business {
	protected $staff;
	// If the business needs a staff to exists, we'll need to require $staff in the constructor
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	// by writing 'public function hire(Person $person)', we're using Type Hinting
	public function hire(Person $person)
	{
		/* add $person to staff collection
			$this->staff is a new instance of staff. Meaning == new Staff
		*/
		$this->staff->add($person);
	}

	public function getStaffMembers()
	{
		return $this->staff->members();
	}
}