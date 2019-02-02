<?php
session_start();
if(!$_SESSION["username"]){
    //Do not show protected data, redirect to login...
    header("Location: ../user.php");
    exit;
}

$userid=$_SESSION["username"];
$_SESSION["id"] = $userid;
$_SESSION["user"] = $userid;

$hostname="localhost";
$user="root";
$password="";
$database="queuing";

$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
mysqli_query($link, "UPDATE accounts set stat='online' where userid='$userid';");
mysqli_query($link, "UPDATE accountreg SET userid='$userid',stat='online' where teller=5;");
?>

<html>
<head>
    <title></title>
    <meta charset="utf-8"/>
        <meta type="viewport" content="width=device=width, initial-scale=1.0">
     <link rel="stylesheet" href="../style/style3.css" type="text/css">
     <style type="text/css">
     	
     .disp1{
    margin: 0%;
    width: 75%;
    height: 19%;
}
.buttonask1{
    width: 35%;
    height:15%;
    font-family: Arial;
    color: white;
    font-size: 30px;
    font-weight: bold;
    float: left;
    margin-left: 10%;
    background-color: orangered;
    border-radius: 3px;
    margin-top: 3%;
    border: 0px;
}
.buttonask2{
    width: 35%;
    font-family: Arial;
    color: white;
    font-size: 30px;
    font-weight: bold;
    height:15%;
    float: right;
    margin-right: 13%;
    background-color: orangered;
    border-radius: 3px;
    margin-top: 3%;
    border: 0px;
}
h1{
font-size: 40px;
}

     </style>
</head>
<body>
    <br><br>
<center><x>Records</x></center>
     <div class="pac">
    

 
    <a href="senior.php" ><button class="buttonadmin1"><d><b>SENIOR CITIZENS</d></button></a>
    <a href="regular.php" ><button class="buttonadmin2"><d><b>ORDINARY CUSTOMERS</d></button></a><br>
     <a href="edit.php" ><button class="buttonadmin1"><d><b>EDIT USER ACCOUNT</d></button></a>
     <a href="create.php" ><button class="buttonadmin2"><d><b>CREATE NEW ACCOUNT</d></button></a>
<form action="../teller/logout5.php" method="POST">
            <button type="submit" name="get" class="paysub">Logout</button>
        </form>
     </div>
    
   
</body>
</html>