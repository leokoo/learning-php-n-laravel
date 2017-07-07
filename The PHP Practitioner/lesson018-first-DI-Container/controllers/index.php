<?php

$users = App::get('database')->selectAll('users2');

//require calls the view file
require 'views/index.view.php';