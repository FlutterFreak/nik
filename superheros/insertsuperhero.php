<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 22/03/2016
 * Time: 10:08
 */
include ("db_connect.php");

$firstname = $_post["firstname"];
$lastname = $_post["lastname"];
$superpower = $_post["superpower"];
$sql = "INSERT INTO superheros (firstname, lastname, mainsuperpower) VALUES ('$firstname','$lastname','$superpower')";

if (mysqli_query($db,$sql)){}
else {
     echo "Error:" . $sql . "<br>" . msqli_error($db);
    }
header("location:index.php");
?>
