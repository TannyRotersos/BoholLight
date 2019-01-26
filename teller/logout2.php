<?php
session_start();


$hostname="localhost";
$user="root";
$password="";
$database="queuing";


$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
mysqli_query($link, "UPDATE accounts set stat='offline' where userid='teller2';");
mysqli_query($link, "UPDATE display set quenumber='' where teller=2;");

session_destroy();
header("Location: ../user.php");




?>