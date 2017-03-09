<?php 
// https://www.w3schools.com/php/php_includes.asp
require 'classes/recipe.php';

$recipe1 = new Recipe();
// echo helps us display the property
$recipe1->source = "Fiona Ho";
$malaysianRecipe = new Recipe();
$recipe1->setTitle('my first recipe');
// echo $recipe1->displayRecipe();
$recipe1->addIngredient('chicken', 2, 'LB');
$recipe1->addIngredient('chinese mushrooms', 5, 'oZ');
// var_dump($recipe1->ingredients);
echo "The Recipe" . "\n";
foreach ($recipe1->getIngredients() as $ingredient) {
	echo $ingredient['amount'] . $ingredient['measure'] . " " . $ingredient['item']  . "\n";
}