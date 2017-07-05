## Classes
- A class is like a blueprint.
- Each instance of a class can consist of different properties
- Isolate reusable code within a class method or a function

# Class' Methods
- Functions inside of classes are called, methods
- Functions outside of classes are called, functions
- constructor functions are automatically triggered on instantiation
	`new Task('Wash the car')`
- the instance of a class is an object
	- e.g. `$task = new Task('Go to the store');`
- We can assign a property to the object by using the $this syntax
	- e.g. : 
	```
		class Task {
			public function __construct($description) {
				$this->description = $description;
			// assign an argument ($description) to variable ($this->description)
			}
	```

- We can use any methods within the class to interact with it

## To set the value of an object

Within a class, we use
	$this->variable = value;
Outside of the class, we use
	$instantiated_class->variable = value;

## Accessing Property within class
Non Static
	$this->property
Static
	self::$property

## Static Method
- Static methods enable us to call it without instantiating an object
- So if we just use a normal function
```
	<?php
	class Foo {
	    public function aNormalMethod() {
	        // ...
	    }
	}
	$foo = new Foo;
	$foo->aNormalMethod();
	?>
```
- If it is a static method
```
	<?php
	class Foo {
	    public static function aStaticMethod() {
	        // ...
	    }
	}

	Foo::aStaticMethod();
	$classname = 'Foo';
	$classname::aStaticMethod(); // As of PHP 5.3.0
	?>
```