<?php
session_start();
if(!$_SESSION["iD"]){
    //Do not show protected data, redirect to login...
    header("Location: ../user.php");
}

$userid=$_SESSION["iD"];
$_SESSION["id"] = $userid;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>
	<meta charset="utf-8"/>
        <meta type="viewport" content="width=device=width, initial-scale=1.0">
     <link rel="stylesheet" href="../style/style.css" type="text/css"/>

</head>
<body>
	<br><br><center>
	<v>CREATE ACCOUNT </v>
<br>
<center>
	<form method="POST" action="<?php $_SERVER["PHP_SELF"];?>" >
	<br>
	<div class="create1">
	<input type="text" name="fname" id="fname" class="create" placeholder="Name" required><br>
	<input type="text" name="lname" id="lname" class="create" placeholder="Lastname"required><br>
	<input type="text" name="age" id="age" class="create" placeholder="Age" required><br>
	<input type="text" name="add" id="add" class="create"placeholder="Address" required><br>
	<input type="text" name="cnum" id="cnum" class="create" placeholder="Contact Number"required><br>

	<select name="actype" id="actype" class="create" placeholder="Account Type">
		<option value="teller/teller.php">Regular Teller Account</option>
		<option value="teller/teller4.php">Special Lane Teller Account</option>
		<option value="admin/index.php">Admin Account</option>
		</select></div>

		<div class="create2">
	<input type="text" name="username" id="user" class="create"placeholder="Username" required><br>
		
	
<input type="password" name="newpass" id="newpass"class="create" placeholder="Password" required><br>
	<input type="password" name="cnewpass" id="cnewpass" class="create" placeholder="Confirm Password"onkeyup="validation()" require><br>
	<div id="msg" style="color:#9D1A0A;font-size:18px;"></div><br>
	<button id="submit" value="submit" class="paycreate">Submit</button>
</form>

<a href="index.php">Back</a>

<script type="text/javascript">

	
 document.getElementById("submit").style.visibility = "hidden";

function validation(){
	
	var pass1=document.getElementById("cnewpass").value;
	var pass2=document.getElementById("newpass").value;

	if(pass1!==pass2){
		document.getElementById("msg").style.color = "#ff0000";
		document.getElementById("msg").innerHTML="Password Not Matched!";
		document.getElementById("submit").style.visibility = "initial";
	}
	else{
		document.getElementById("msg").style.color = "#9D1A0A";
		document.getElementById("msg").innerHTML="Password Matched!";
		document.getElementById("submit").style.visibility = "visible";
	}

}
</script>
<?php

$hostname="localhost";
$user="root";
$password="";
$database="queuing";



$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$add=$_POST['add'];
$username=$_POST['username'];
$actype=$_POST['actype'];
$cnewpass=$_POST['cnewpass'];
$cnum=$_POST['cnum'];

if($actype=="teller/teller1.php"||$actype=="teller/teller4.php"){
	$cctype="teller";
}
else{
	$cctype="admin";
}
 $password_hash = password_hash($cnewpass, PASSWORD_BCRYPT);

mysqli_query($link, "INSERT INTO accounts (userid, pass, link, accountype, stat, fname, lname, age,address,contact) VALUES ('$username','$password_hash', '$actype','$cctype','offline', '$fname', '$lname', $age, '$add', $cnum);");




echo '<script language="javascript">';
echo 'alert("Account Successfully Created!")';
echo '</script>';

}
?>

</body>
</html>