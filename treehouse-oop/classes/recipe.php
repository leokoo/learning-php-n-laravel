<?php
class Recipe
{
    private $title = "best cookbook";
    private $ingredients = [];
    private $instructions = [];
    private $yield;
    private $tags = [];
    private $source = "Kevin Koo";

    private $measurements = [
    	'tsp', 'tbsp', 'cup', 'oz', 'lb', 'fl oz', 'pint', 'quart', 'gallon'
    ];

    // Construct
    public function __construct($title = null)
    {
        $this->setTitle($title);
    }

    public function __toString()
    {
        $output = "You are calling a " . __CLASS__ . " object with the title \"";
        $output .= $this->getTitle() . "\"";
        return $output;
    }

    // Title : Getter and Setter methods helps us block off private properties, adjust formatting and even make calculations before returning the value
    public function setTitle($title)
    {
    	/*
    	$this->title gives access to the property
		$title itself is the passed argument
		*/
        if (empty($title)) {
            $this->title = null;
        } else {
            $this->title = ucwords($title);            
        }
    }

    public function getTitle()
    {
    	return $this->title;
    }

    // Ingredients
    // by having a null in the argument, we can bypass the fact that certain ingredients might not have certain properties
    public function addIngredient($item, $amount = null, $measure = null)
    {
    	if ($amount != null && !is_float($amount) && !is_int($amount)) {
    		exit('The amount must be a float: a ' . gettype($amount) . ' $amount given');
    	}

    	if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
    		exit('Please enter the correct measurements: ' . implode(", " , $this->measurements));
    	}

    	$this->ingredients[] = array(
    			"item" => $item, 
    			"amount" => $amount, 
    			"measure" => strtolower($measure)
    		);
    }

    public function getIngredients()
    {
    	return $this->ingredients;
    }

    // Instructions
    public function addInstruction($string)
    {
    	$this->instructions[] = $string;
    }

    public function getInstructions()
    {
    	return $this->instructions;
    }

    // Yield
    public function setYield($yield)
    {
    	$this->yield = $yield;
    }

    public function getYield()
    {
    	return $this->yield;
    }

    // Tags
    public function addTag($tag)
    {
    	$this->tags[] = strtolower($tag);
    }

    public function getTags()
    {
    	return $this->tags;
    }

    // Source
    public function setSource($source)
    {
    	$this->source = ucwords($source);
    }

    public function getSource()
    {
    	return $this->source;
    }
}