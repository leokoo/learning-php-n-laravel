<?php

class Math {
	public static function add(...$nums)
	{
		return array_sum($nums);
	}
}

/* By adding a static to the add method, the way we call the method changes drastically
	The add method now becomes like a global function
	However, if the method begins to make calls to other classes, things can get messy quickly
*/
echo Math::add(1, 2, 3, 4);
// $math = new Math;
// var_dump($math->add(1, 2, 3, 4));

class Person {
	public $age = 1;
// changed from public static $age = 1;
	public function haveBirthday()
	{
		$this->age += 1;
	}

	public function age()
	{
		return $this->age;
	}
}

$joe = New Person;
$joe->haveBirthday();
$joe->haveBirthday();
echo $joe->age();
// If $joe has two birthdays, the result would be 3. However, if we have another person who has a birthday, $age will then be 4, not two. This is because static properties are shared
$angela = New Person;
$angela->haveBirthday();
// echo Person::$age;
echo $angela->age();