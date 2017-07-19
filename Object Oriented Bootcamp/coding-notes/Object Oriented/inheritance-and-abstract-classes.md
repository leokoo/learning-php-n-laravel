## When to use inheritance?

- We use inheritance when we want to inherit behaviour from a parent class
- For example, if we want to leverage on Eloquent

```
class Post extends Eloquent
{

}

$post = new Post;
$post->save();

```

## When to put the property or method into the Parent class?
- When you use it most of the time. If you need a different method for the sub-class, overwrite the original method

# First reason
- Will there be any attributes (properties) or behaviour (method) that will be shared across the sub-classes?

# Second reason
- It'll be a sort of contract. We can do this via either
- An abstract class - http://php.net/manual/en/language.oop5.abstract.php
- An interface

```abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}
```

## When else to use Abstract classes?
- We also use abstract on the parent class when we don't want to call it directly.

```
abstract class Shape
{

}

class Square extends Shape
{

}
```

Thus, we cannot have
```
$shape = new Shape;
```
As that would throw an error

## When to use Abstract Method?
- When every sub class needs to define it's own method, then we define the method in the parent class as abstract
```
abstract class Shape
{
	abstract protected function getArea(); // this forces the sub-classes to have this method
}

class Square extends Shape
{
	public function getArea()
	{

	}
}

class Circle extends Shape
{
	public function getArea()
	{

	}
}
```