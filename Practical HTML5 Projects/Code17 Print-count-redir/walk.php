<!doctype html>
<html lang=en>
<head>
<title>Walk page with counter</title>
<meta charset= utf-8>
<meta details go here>
<link to style sheet goes here�>
</head>
<body>
<ul>
	<li><a href="camp.php">Camping</a></li>
	<li><a href="walk.php">Walking</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="index.php">Home</a></li>
</ul>
This is the walking page.<br>
The content goes here
<p>
<?php
include("countwalk.php");
?>
</p>
</body>
</html>
