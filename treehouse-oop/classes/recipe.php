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

    // Getter and Setter methods helps us block off private properties, adjust formatting and even make calculations before returning the value
    public function setTitle($title)
    {
    	/*
    	$this->title gives access to the property
			$title itself is the passed argument
			*/
    	$this->title = ucwords($title);
    }

    public function getTitle()
    {
    	return $this->title;
    }

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

    public function addInstruction($string)
    {
    	$this->instructions[] = $string;
    }

    public function getInstructions()
    {
    	return $this->instructions;
    }

    public function addTag($tag)
    {
    	$this->tags[] = strtolower($tag);
    }

    public function getTags()
    {
    	return $this->tags;
    }

    public function displayRecipe()
    {
    	/* $this->property can only be used in a method to reference a property, just like how we use the instantiated object name ($recipe1) outside of it */
    	return $this->title . " by " . $this->source;
    }
}