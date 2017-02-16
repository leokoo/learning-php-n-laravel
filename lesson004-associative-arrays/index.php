<?php

$tasks = [	'title' => 'Coding in PHP', 
						'due date' => 'tomorrow', 
						'assigned to' => 'Jimmy', 
						'completed?' => 'No' 
					];

//require calls the view file
?>

<pre>
	<?php die(var_dump($tasks)); ?>
</pre>

<?php
require 'index.view.php';