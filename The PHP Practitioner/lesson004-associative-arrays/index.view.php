<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lessons in PHP 003</title>
</head>
<body>
	<header>
			<?php foreach ($tasks as $type => $value) : ?>
				<li><?= $type ?>:  <?= $value; ?> </li>
			<?php endforeach ?>
	</header>
</body>
</html>