<?php

session_start();


$name = $_POST['user_name'];
$pass = $_POST['user_password'];


// var_dump($name);
// var_dump($pass);
// exit();


 // $con = mysqli_connect('localhost', 'root', '');


 $link = new mysqli('localhost','root','','registration');

		  		$sql = "SELECT * FROM `user` WHERE user_name= '$name' && user_password = '$pass'";

		  		$result = mysqli_query( $link, $sql );


$num = mysqli_num_rows($result);

		if ($num == 1) {
			$_SESSION['user_name'] = $name;

			header('location:user-home.php');
		}
		else{
			header('location:login.php');
		}



?>
