<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Users List</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


	<div class="container add-user">
		<a href="index.php"><button class="btn btn-primary">Add User</button></a>
	</div>


	<table class="table table-light">
  		<thead>
		    <tr>
		      <th scope="col">Serial no:</th>
		      <th scope="col">User Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Password</th>
		    </tr>
  		</thead>
		  	<tbody>

		  	<?php


		  	$link = new mysqli('localhost','root','','registration');

		  		$sql = "SELECT * from `user`";

		  		$result = mysqli_query( $link, $sql );

		  		

		  		// if ($result) {

		  		// 	while($row = mysqli_fetch_assoc($result)){

		  		// 		$id = $row['id'];
		  		// 		$userName = $row['user_name'];
		  		// 		$password = $row['email'];
		  		// 		$user_password = $row['password'];


	foreach($result as $row){
        ?>

        <tr>

            <td><?php echo $row['id']?></td>
            <td><?php echo $row['user_name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['user_password']?></td>
            

            <td> <a href="update.php?id=<?php echo $row['id']?>"><button class="btn btn-primary">Update</button></a>  <a href="delete.php?id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a></td>
        </tr>

        <?php
    }

		?>

		  </tbody>
	</table>




</body>
</html>