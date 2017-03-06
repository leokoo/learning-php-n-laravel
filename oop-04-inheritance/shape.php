<?php

class Shape {

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

echo (new Square)->getArea();
echo (new Triangle)->getArea();