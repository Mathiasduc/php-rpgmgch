<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RPG mgch</title>
</head>
<body>
	<?php 
	include 'User.php';
	$test = new User("test id", "email de test");
	var_dump($test);
	//$test->createdAt = 100;
	echo "\n test \n";
	var_dump($test->getCreatedAt());
	?>
</body>
</html>