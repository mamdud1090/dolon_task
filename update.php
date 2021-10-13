
<?php

 $link = new mysqli('localhost','root','','registration');
 // $sql = "SELECT * from `user`";


    $id = $_GET['id'];

    $sql1 = "SELECT * FROM `user` WHERE id=$id";

     $result1 = mysqli_query( $link, $sql1 );

     $row = mysqli_fetch_assoc($result1);


      $userName = $row['user_name'];
         $email = $row['email'];
          $user_password = $row['user_password'];


  if (isset($_POST['submit'])){

    $userName = $_POST['user_name'];
    $email = $_POST['email'];
    $user_password = $_POST['user_password'];


    $sql = "UPDATE `user` SET id ='$id', user_name = '$userName', email = '$email', user_password = '$user_password' WHERE id= 
    $id";

    $result = mysqli_query( $link, $sql );


    if($result){

      echo "Data Updated Successfully...!!";
      header('location:list.php');
    }
      
      

    else {
      die(mysql_error($link));
    }
  }


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>User Management System</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">

<div class="row">
  <div class="col-md-2"></div>

  <div class="col-md-8">
  <h2>User Registration Form</h2>
  <form class="form-horizontal" method="post" action="#">


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">User Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="user_name" placeholder="Enter User Name" name="user_name" value="<?php echo $userName?>">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email?>">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="user_password" placeholder="Enter password" name="user_password" value="<?php echo $user_password?>">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>

      </div>

      <div class="col-md-2"></div>
    </div>
  </div>
</div>

</body>
</html>



