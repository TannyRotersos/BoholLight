<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>
</head>
<body>

	<form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
	Name:<input type="text" name="fname" id="fname" required><br><br>
	Lastname:<input type="text" name="lname" id="lname" required><br><br>
	Age:<input type="text" name="age" id="age" required><br><br>
	Address:<input type="text" name="add" id="add" required><br><br>
	Contact Number:<input type="text" name="cnum" id="cnum" required><br><br>
	Username:<input type="text" name="username" id="user" required><br><br>
	Account Type:<select name="actype" id="actype">
		<option value="teller/teller1.php">Regular Teller Account</option>
		<option value="teller/teller4.php">Special Lane Teller Account</option>
		<option value="admin/index.php">Admin Account</option>
		
	</select><br><br>
	Password:<input type="password" name="newpass" id="newpass" required><br><br>
	Confirm New Password:<input type="password" name="cnewpass" id="cnewpass" onkeyup="validation()" required><span id="msg"></span><br><br>
	<button id="submit" value="submit">Submit</button>
</form>
<br><br>
<a href="index.php"><button>BACK</button></a>

<script type="text/javascript">

	
 document.getElementById("submit").style.visibility = "hidden";

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

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$add=$_POST['add'];
$username=$_POST['username'];
$actype=$_POST['actype'];
$cnewpass=$_POST['cnewpass'];
$cnum=$_POST['cnum'];

mysqli_query($link, "INSERT INTO accounts (userid, pass, link, accountype, stat, fname, lname, age,address,contact) VALUES ('$username','$cnewpass', '$actype','',0, '$fname', '$lname', $age, '$add', $cnum);");




echo '<script language="javascript">';
echo 'alert("Account Successfully Created!")';
echo '</script>';

}
?>

</body>
</html>