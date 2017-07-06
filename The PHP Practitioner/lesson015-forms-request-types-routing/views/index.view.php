<?php require('partials/head.php'); ?>

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

<!--Creating a form for us to learn more about forms in PHP-->
<h1>Submit Your Name</h1>

<form method="POST" action="/names">
	<input name="name"></input>
	<button type="submit">Submit your name</button>
</form>

<?php require('partials/footer.php'); ?>