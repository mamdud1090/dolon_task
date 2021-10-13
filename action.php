<?php

session_start();

	if (isset($_POST['submit'])){

		$userName = $_POST['user_name'];
		$email = $_POST['email'];
		$user_password = $_POST['user_password'];

		$hashed_password =  password_hash($user_password, PASSWORD_DEFAULT);





		$link = new mysqli('localhost','root','','registration');

		if(!$link){

			die(mysql_error($link));
		}


		$query = "insert into `user` (user_name,email,user_password)
		values('$userName','$email','$user_password')";

		$result = mysqli_query( $link, $query );

		if($result){

			header('location:list.php');
			// echo "Data Inserted Successfully...!!";
		}

		else {
			die(mysql_error($link));
		}


	}

?>