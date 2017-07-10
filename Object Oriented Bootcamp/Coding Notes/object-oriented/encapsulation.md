## Why encapsulate

- If we want to prevent people from accessing certain methods / properties, then we need to make them private/protected
- Encapsulation means creating a black box around our object
- private - means only exclusive to the class. Meaning, if you extend the LightSwitch class, you still won't be able to access these methods
- protected methods and properties are accessible via inheritance

```	class LightSwitch 
{
	public function on()
	{

	}

	public function off()
	{

	}	

	private function connect()
	{

	}
}

$lightswitch = New LightSwitch;
$lightswitch->connect(); // We want to prevent this
```

