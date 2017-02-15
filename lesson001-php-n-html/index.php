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
			<?php echo "Hello there! How are you, " . htmlspecialchars($_GET['name']) . "!";?><br>
			<?php echo "I didn't know you work as a, " . htmlspecialchars($_GET['job']); ?>
		</h1>
	</header>
</body>
</html>

<!--Home work -!>
<!-Create a sentence dynamically with the format http://website/?key=value
Solved with "http://localhost:8888/?name=Leo&job=lawyer" -!>