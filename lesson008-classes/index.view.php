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
				<li>
					<?php if ($task->completed) : ?>
						<strike><?= $task->description; ?></strike>
					<?php else : ?>
						<?php echo $task->description; ?>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</header>
</body>
</html>