<?php
session_start();
if(!$_SESSION["iD"]){
    //Do not show protected data, redirect to login...
    header("Location: ../user.php");
}

$userid=$_SESSION["iD"];
$_SESSION["id"] = $userid;

$hostname="localhost";
$user="root";
$password="";
$database="queuing";

$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
mysqli_query($link, "UPDATE users set stat=1 where userid='$userid';");

?>

<html>
<head>
    <title></title>
    <meta charset="utf-8"/>
        <meta type="viewport" content="width=device=width, initial-scale=1.0">
     <link rel="stylesheet" href="../style/style.css" type="text/css"/>
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
    
   <center><img src="../img/3.png" class="disp1">
</center>
     <div class="nin">
    
<h1><center>Customer's Records</center></h1>
 
    <a href="senior.php" ><button class="buttonask1">SENIOR CITIZENS</button></a>
    <a href="regular.php" ><button class="buttonask2">ORDINARY CUSTOMERS</button></a><br>
     <a href="edit.php" ><button class="buttonask1">EDIT USER ACCOUNT</button></a>
     <a href="create.php" ><button class="buttonask2">CREATE NEW ACCOUNT</button></a>
<form action="../teller/logout.php" method="POST">
            <button type="submit" name="get" class="paysub">Logout</button>
        </form>
     </div>
    
   
</body>
</html>