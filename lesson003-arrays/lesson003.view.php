<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lessons in PHP 001</title>
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>
			<?php foreach ($animals as $animal) : ?>
				<li><?= $animal; ?> </li>
			<?php endforeach ?>
		</h1>
	</header>
</body>
</html>