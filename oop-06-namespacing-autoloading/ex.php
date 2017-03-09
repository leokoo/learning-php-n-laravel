<?php
require 'vendor/autoload.php';
/*
We can pull the files in using require, but it doesn't follow best practices
e.g.:
require 'src/Person.php';
require 'src/Business.php';
require 'src/Staff.php';
*/

$jeffrey = New Acme\Person('Jeffrey Way');

$staff = New Acme\Staff([$jeffrey]);
// Because the business depends upon the $staff to run, we need to create a new instance of Staff before we can create a new instance of Business
$laracasts = New Acme\Business($staff);

// $laracasts->hire($jeffrey);
$laracasts->hire(New Acme\Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());