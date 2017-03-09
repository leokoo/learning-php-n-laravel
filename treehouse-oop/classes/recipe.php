<?php
// Treehouse's PHP is lacking compared to Laracasts :(
class Recipe
{
    public $title = "best cookbook";
    public $ingredients = [];
    public $instructions = [];
    public $yield;
    public $tag = [];
    public $source = "Kevin Koo";

    public function displayRecipe()
    {
    	/* $this->property can only be used in a method to reference a property, just like how we use the instantiated object name ($recipe1) outside of it */
    	return $this->title . " by " . $this->source;
    }
}

$recipe1 = new Recipe();
// echo helps us display the property
$recipe1->source = "Fiona Ho";
$malaysianRecipe = new Recipe();
// echo $malaysianRecipe->source = "Leo Koo" . "'s cooking is the best";
// echo "$recipe1->source" . "'s recipe is boring ";
echo $recipe1->displayRecipe();
