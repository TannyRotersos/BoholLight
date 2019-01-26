<?php
session_start();

$userid=$_SESSION["iD"];

$hostname="localhost";
$user="root";
$password="";
$database="queuing";


$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
mysqli_query($link, "UPDATE accounts set stat='offline' where userid='$userid' and accountype='admin';");

session_destroy();
header("Location: ../user.php");




?>