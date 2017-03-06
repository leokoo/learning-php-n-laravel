<?php

// we make our class abstract if we are never going to instantiate it
abstract class Shape {
	protected $color;

	public function __construct($color = 'red')
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}
}

class Square extends Shape {
	protected $length = 4;

	public function getArea() 
	{
		return pow($this->length, 2);
	}
}

class Triangle extends Shape {
	protected $base = 4;
	protected $height = 7;

	public function getArea()
	{
		return .5 * $this->base * $this->height;
	}
}

echo (new Square)->getColor();
// echo (new Triangle)->getArea();