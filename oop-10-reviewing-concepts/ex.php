<?php

// require 'src/AuthController.php';
// require 'src/RegisterUser.php';
require 'vendor/autoload.php';

$registration = new Acme\RegisterUser;
$authcontroller = new Acme\AuthController($registration);

$authcontroller->register();