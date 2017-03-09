<?php

/*
We can pull the files in using require, but it doesn't follow best practices
e.g.:
require 'src/Person.php';
require 'src/Business.php';
require 'src/Staff.php';
*/

Use Acme\Person;
Use Acme\Business;
Use Acme\Staff;

$jeffrey = New Person('Jeffrey Way');

$staff = New Staff([$jeffrey]);
// Because the business depends upon the $staff to run, we need to create a new instance of Staff before we can create a new instance of Business
$laracasts = New Business($staff);

// $laracasts->hire($jeffrey);
$laracasts->hire(New Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());