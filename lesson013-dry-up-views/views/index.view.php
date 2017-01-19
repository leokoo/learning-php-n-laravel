<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lessons in PHP-012 : Make A Router</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/about/culture">Culture</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
	</nav>
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