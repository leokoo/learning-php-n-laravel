<?php 
// https://www.w3schools.com/php/php_includes.asp
require 'classes/recipe.php';

$recipe1 = new Recipe();

// echo helps us display the property
$recipe1->setSource('Fiona Ho');
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

// On Instructions
$recipe1->addInstruction('Get some eggs');
$recipe1->addInstruction('fry the veggies');
echo implode("\n", $recipe1->getInstructions());

// On Tags
$recipe1->addTag('Super Malaysian Breakfast');
$recipe1->addTag('Delicious Nasi Lemak');
echo implode(", ", $recipe1->getTags());

// On Yield
$recipe1->setYield('10 servings');
echo $recipe1->getYield();

//On Source
echo $recipe1->getSource();