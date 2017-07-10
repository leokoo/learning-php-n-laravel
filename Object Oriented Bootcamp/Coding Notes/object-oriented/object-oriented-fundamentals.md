## Getters and Setters

- We use Getters and Setters to give ourselves protection & security
- For example via the setter method & encapsulation (changing the property from public to private), we can stop a person less than 18 from signing up

	```public function setAge($age)
		{
			if ($age < 18) {
				throw new Exception('Person is not old enough');
			}
			$this->age = $age;
		}```

- We also can use setters to modify the results and return us the values that we want
		```public function getAge()
		{
			// In order to return the amount of days John has lived
			return $this->age * 365;
		}```
