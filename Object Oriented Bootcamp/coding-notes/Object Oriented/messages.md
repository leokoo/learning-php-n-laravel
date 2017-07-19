## When to use messaging?

In a real-life project, you'll have multiple classes. And these objects will send messages to each other

```
class Person {
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

class Business {
	protected $staff;
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(Person $person)
	{
		$this->staff->add($person); // this is sending messages.
	}
}

class Staff {
	protected $members = [];

	function __construct($members = [])
	{
		$this->members = $members;
	}
	
	public function add(Person $person)
	{
		$this->members[] = $person;
	}
}
```