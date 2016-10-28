<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lessons in PHP 005</title>
</head>
<body>
	<header>
		<li>
			<strong>Name:	</strong><?= $task['title']; ?>
		</li>

		<li>
			<strong>Due Date:	</strong><?= $task['due']; ?>
		</li>

		<li>
			<strong>Person Responsible:	</strong><?= $task['assigned_to']; ?>
		</li>

		<li>
			<strong>Status:	</strong><?= $task['completed?'] ? 'Completed!' : 'Not done yet'; ?>
		</li>
		
		<li>
			<strong>Paid: </strong>
					<?php if ($task['paid']): ?>
						<span>&#9989;</span>
					<?php else:  ?>
						<span>Not paid</span>
					<?php endif; ?>
		</li>



	</header>
</body>
</html>