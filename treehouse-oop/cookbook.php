<?php 
// https://www.w3schools.com/php/php_includes.asp
require 'classes/recipe.php';
require 'classes/render.php';
require 'inc/allrecipes.php';

// On Rendering
echo Render::displayRecipe($belgian_waffles);
