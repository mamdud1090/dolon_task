<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "registration");
$query = "DELETE FROM `registration`.`user` WHERE `user`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');