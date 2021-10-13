<?php
//print_r($_POST);
$firstName = $_POST['first_name'];
$lastName  = $_POST['last_name'];
$Sscroll  = $_POST['ssc_roll'];
$Hscroll  = $_POST['hsc_roll'];
$Track  = $_POST['track'];
$Laptop  = $_POST['laptop'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud01");
$query = "INSERT INTO `crud01`.`crud` (
`first_name`,`last_name`,`ssc_roll`,`hsc_roll`,`track`,`laptop`)
VALUES ('$firstName', '$lastName','$Sscroll','$Hscroll','$Track','$Laptop')";
mysqli_query($link, $query);
header('location:list.php');