<?php

class Render
{	   
  public static function displayRecipe($recipe)
  {
  	/* $this->property can only be used in a method to reference a property, just like how we use the instantiated object name ($recipe1) outside of it */
  	return $recipe->getTitle() . " by " . $recipe->getSource() . "\n";
  }
}