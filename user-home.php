<?php

	session_start();

	if (!isset($_SESSION['user_name'])) {
		header('location:login.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Home Page</title>
</head>
<body>

	<a href="logout.php">Logout</a>

	<h1>Welcome <?php $_SESSION['user_name'];?></h1>

</body>
</html>