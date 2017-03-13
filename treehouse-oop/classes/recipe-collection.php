<?php

class RecipeCollection
{
	private $title;
	private $recipe = [];

    //  We pull in the same constructor methods from recipe.php in order to give recipe's a title when we instantiate
    public function __construct($title = null)
    {
        $this->setTitle($title);
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
}