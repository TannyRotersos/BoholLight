<!DOCTYPE html>
<html>
<head>
	<title>Edit User Account</title>
	<meta charset="utf-8"/>
        <meta type="viewport" content="width=device=width, initial-scale=1.0">
     <link rel="stylesheet" href="../style/style.css" type="text/css"/>

</head>
<body>
	
<br><br><center>
	<v>EDIT ACCOUNT </v>
<br>
<center>
<div class="create1">
	<form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
	<input type="text" name="username" id="user"class="create" placeholder="Username" required><br>
	<input type="password" name="oldpass" id="oldp" class="create" placeholder="Old Password"required><br>
	<input type="password" name="newpass" id="newpass"class="create" placeholder="New Password"required><br>

	<input type="password" name="cnewpass" id="cnewpass"class="create" placeholder="Confirm Password"onkeyup="validation()" required><span id="msg"></span><br><br>

</div>
<div class="create2">
<button id="submit" value="submit" class="paycreate">Submit</button>
</form>
<br>
<a href="index.php"><button class="paycreate">BACK</button></a>
<script type="text/javascript">

	var d1=document.getElementById("user").value;
	var d2=document.getElementById("oldp").value;
if(d1==''&&d2==''){
 document.getElementById("submit").style.visibility = "hidden";
}

function validation(){
	
	var pass1=document.getElementById("cnewpass").value;
	var pass2=document.getElementById("newpass").value;

	if(pass1!==pass2){
		document.getElementById("msg").style.color = "#ff0000";
		document.getElementById("msg").innerHTML="Password Not Matched!";
	}
	else{
		document.getElementById("msg").style.color = "#038F25";
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
$user=$_POST['username'];
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
mysqli_query($link, "UPDATE users set pass='$newpass' where userid='$user' and pass='$oldpass'");

echo '<script language="javascript">';
echo 'alert("Account Successfully Edited!")';
echo '</script>';
}
?>

</body>
</html>