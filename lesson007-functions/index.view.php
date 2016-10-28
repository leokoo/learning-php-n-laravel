<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lessons in PHP-007 : Functions</title>
</head>
<body>
	<header>
			<?php foreach ($people as $man) : ?>
				<li><?= $man; ?> </li>
			<?php endforeach ?>

	</header>
</body>
</html>