<?php

class Math {
	public static function add(...$nums)
	{
		return array_sum($nums);
	}
}

/* By adding a static to the add method, the way we call the method changes drastically
	The add method now becomes like a global function
*/
echo Math::add(1, 2, 3, 4);
// $math = new Math;
// var_dump($math->add(1, 2, 3, 4));