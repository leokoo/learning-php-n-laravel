<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lessons in PHP-008 : Classes</title>
</head>
<body>
	<header>
		<ul>
			<?php foreach ($tasks as $task) : ?>
				<li><?php echo $task->description; ?></li>
			<?php endforeach; ?>
		</ul>
	</header>
</body>
</html>