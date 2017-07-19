## Classes

links:
---
	http://php.net/manual/en/language.oop5.basic.php
	http://php.net/manual/en/language.oop5.properties.php
	http://php.net/manual/en/language.oop5.decon.php
	http://php.net/manual/en/language.oop5.inheritance.php 
	http://php.net/manual/en/language.oop5.static.php
	http://php.net/manual/en/language.oop5.typehinting.php

- A class is like a blueprint.
- For example, if we're building a task app, we should have a task class

# Variables vs Properties
- A variable inside a class is called a property
- Each instance of a class can consist of different properties
- Isolate reusable code within a class method or a function

## To access and set the value of a property

Within a class, we use
	$this->property = value;
Outside of the class, we use
	$instantiated_class->property = value;
	e.g.
	`
		$task = New Task;
		$task->property = value;
	`

## Accessing Property within class

Non Static
	$this->property
Static
	self::$property

# Class' Methods

- Functions inside of classes are called, methods
- Functions outside of classes are called, functions
- We can use any methods within the class to interact with it
- the instance of a class is an object
	- e.g. `$task = new Task('Go to the store');`

## Constructor

- Is a place for the Class to declare its dependencies or the collaborators needed to do its job
- The constructor is automatically triggered on instantiation
- We can assign arguments to the construct method and then to the $description property
	- e.g. : 
	```
		class Task {
			public $description;

			public function __construct($description) {
				$this->description = $description;
			}
	```
	`new Task('Wash the car')`


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
## Difference between static vs instance method

- A static method != an instance method.
- It doesn't have the $this object