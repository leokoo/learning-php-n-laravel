<?php

$jeffrey = New Person('Jeffrey Way');

$staff = New Staff([$jeffrey]);
// Because the business depends upon the $staff to run, we need to create a new instance of Staff before we can create a new instance of Business
$laracasts = New Business($staff);

// $laracasts->hire($jeffrey);
$laracasts->hire(New Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());