<?php

class Render
{	   
  public static function displayRecipe($recipe)
  {
  	/* $this->property can only be used in a method to reference a property, just like how we use the instantiated object name ($recipe1) outside of it */
  	$output = "";
  	$output .= $recipe->getTitle() . " by " . $recipe->getSource() . "\n";
  	$output .= implode(", ", $recipe->getTags()) . "\n\n";
  	foreach ($recipe->getIngredients() as $ingredient) {
 			$output .= $ingredient['amount'] . $ingredient['measure'] . " " . $ingredient['item']  . "\n";
 			}
 		$output .= "\n";
		$output .= implode("\n", $recipe->getInstructions()) . "\n";
		$output .= $recipe->getYield() . "\n";
  	return $output;
  }
}