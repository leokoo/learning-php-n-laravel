<?php 
// https://www.w3schools.com/php/php_includes.asp
require 'classes/recipe.php';
require 'classes/render.php';

$recipe1 = new Recipe('My new recipe');

// echo helps us display the property
$recipe1->setSource('Fiona Ho');
$malaysianRecipe = new Recipe();

$recipe1->addIngredient('chicken', 2, 'LB');
$recipe1->addIngredient('chinese mushrooms', 5, 'oZ');

// On Instructions
$recipe1->addInstruction('Get some eggs');
$recipe1->addInstruction('fry the veggies');

// On Tags
$recipe1->addTag('Super Malaysian Breakfast');
$recipe1->addTag('Delicious Nasi Lemak');

// On Yield
$recipe1->setYield('10 servings');

// On Rendering
// echo Render::displayRecipe($recipe1);
echo $recipe1;