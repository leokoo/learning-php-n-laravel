<?php

var_dump('You typed the name ' . $_POST['name']); ?>
<br>

<?php echo "here's the database"; ?>
<br>

<?php
var_dump($app['database']);
//We are trying to save the information to the form and insert it into the database