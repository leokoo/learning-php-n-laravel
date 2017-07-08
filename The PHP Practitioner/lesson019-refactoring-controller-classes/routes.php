<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->post('contact', 'PagesController@contact');

// var_dump($router->routes);