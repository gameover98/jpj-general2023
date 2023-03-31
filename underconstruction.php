<!DOCTYPE html>
<html>
<head>
	<title>Under Construction</title>
	<style>
		body {
			background-color: <?php echo generateRandomPastelColor(); ?>;
		}
	</style>
</head>
<body>
	<h1>Under Construction</h1>
	<p>This QB website is currently under construction. Please check back later.</p>
	<p>Hostname: <?php echo gethostname(); ?></p>
	<p><?php echo getJoke(); ?></p>
</body>
</html>

<?php
function generateRandomPastelColor() {
    $r = mt_rand(100, 255);
    $g = mt_rand(100, 255);
    $b = mt_rand(100, 255);
    return "rgb(" . $r . "," . $g . "," . $b . ", 0.8)";
}

function getJoke() {
    $jokes = array(
        "Why don't scientists trust atoms? Because they make up everything!",
        "What did the grape say when it got stepped on? Nothing, it just let out a little wine.",
        "Why was the math book sad? Because it had too many problems.",
        "What do you call a fish wearing a bowtie? Sofishticated.",
        "I'm reading a book on the history of glue. I just can't seem to put it down."
    );
    return $jokes[array_rand($jokes)];
}
?>
