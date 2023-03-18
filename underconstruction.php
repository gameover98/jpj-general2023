<!DOCTYPE html>
<html>
<head>
	<title>Under Construction</title>
</head>
<body>
	<h1>Under Construction</h1>
	<p>Sorry, this website is currently under construction. We're working hard to bring you something awesome!</p>
	<?php 
	// Generate a random construction joke
	$jokes = array(
		"Why did the construction worker quit his job? He didn't get enough concrete evidence.",
		"Why was the math book sad? Because it had too many problems.",
		"Why did the tomato turn red? Because it saw the salad dressing!",
		"What did the grape say when it got stepped on? Nothing, it just let out a little wine.",
		"Why did the bicycle fall over? Because it was two tired."
	);
	$random_joke = $jokes[array_rand($jokes)];
	?>
	<p>Here's a joke to make your wait a little more bearable:</p>
	<blockquote><?php echo $random_joke; ?></blockquote>
</body>
</html>

