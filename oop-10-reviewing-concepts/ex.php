<?php

$registration = new Acme\RegisterUser;
$authcontroller = new Acme\AuthController($registration);

$authcontroller->register();