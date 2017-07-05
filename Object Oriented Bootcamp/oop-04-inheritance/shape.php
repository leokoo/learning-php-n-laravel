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

/* To force each sub-class to define it's own method
It's called the Template Method Design Pattern
*/
	abstract protected function getArea();
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

class Circle extends Shape {
	protected $radius = 5;
//The moment we create the getArea method for the sub-class Circle, the abstract error goes away
	public function getArea()
	{
		return M_PI * pow($this->radius, 2);
	}
}
// when we don't specify the color, the Square will inherit the color from the Shape class. Otherwise, it'll have its own color
echo (new Square())->getColor(); 
echo (new Square('green'))->getColor();
// echo (new Triangle)->getArea();
echo (new Circle)->getArea();