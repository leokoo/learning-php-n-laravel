<?php require('partials/head.php'); ?>

<!--Creating a form for us to learn more about forms in PHP-->
<h1>Submit Your Name</h1>

<form method="POST" action="/names">
	<input name="name"></input>
	<button type="submit">Submit your name</button>
</form>

<?php require('partials/footer.php'); ?>