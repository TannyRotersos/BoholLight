<?php
session_start();


$hostname="localhost";
$user="root";
$password="";
$database="queuing";

$userid=$_SESSION["id"];
$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
mysqli_query($link, "UPDATE users set stat=0 where userid='$userid';");

session_destroy();
header("Location: ../user.php");




?>