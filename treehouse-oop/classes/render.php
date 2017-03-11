<?php

class Render
{	
	public static function listIngredients($ingredients)
	{
		$output = '';
	  	foreach ($ingredients as $ingredient) {
 			$output .= $ingredient['amount'] . $ingredient['measure'] . " " . $ingredient['item']  . "\n";
 			}
		return $output;
	}

  public function __toString()
  {
      $output = "\n The following methods are available for " .  __CLASS__ ." objects \n ";
      $output .= implode("\n ", get_class_methods(__CLASS__));
      return $output;
  }

  public static function displayRecipe($recipe)
  {
  	/* $this->property can only be used in a method to reference a property, just like how we use the instantiated object name ($recipe1) outside of it */
  	$output = "";
  	$output .= $recipe->getTitle() . " by " . $recipe->getSource() . "\n";
  	$output .= implode(", ", $recipe->getTags()) . "\n\n";
 		$output .= self::listIngredients($recipe->getIngredients());
		$output .= implode("\n", $recipe->getInstructions()) . "\n";
		$output .= $recipe->getYield() . "\n";
  	return $output;
  }
}