<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 4:33 PM
 */
$id = $_GET['ssc_roll'];
$link = mysqli_connect("localhost",
    "root",
    "",
    "crud01");
$query = "DELETE FROM `crud01`.`crud` WHERE `crud`.`ssc_roll` = $id";
mysqli_query($link, $query);
header('location:list.php');