<?php

session_start();

$hostname="localhost";
$user="root";
$password="";
$database="queuing";




$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");

if(isset($_SESSION['user'])){
	$id=$_SESSION['user'];
$result=mysqli_query($link, "SELECT link FROM accountreg where userid='$id';");

for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){
	$link=$num_rows["link"];
	header('Location: '.$link);
}
}


$err=$nlink='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {



$user1=$_POST['user'];
$pass1=$_POST['pass'];
$accountype=$_POST['accountype'];    

$account=mysqli_query($link, "SELECT link FROM accountreg where teller=$accountype and stat='offline';");
for($i=0; $i<$num_rows=mysqli_fetch_array($account);$i++){
	$nlink=$num_rows["link"];
}

$result=mysqli_query($link, "SELECT userid,pass,link,accountype,stat FROM accounts where userid='$user1';");

for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){

	$tellerid=$num_rows["userid"];
	$pass=$num_rows["pass"];
	$link=$num_rows["link"];
	$actype=$num_rows["accountype"];
	$stat=$num_rows["stat"];


if($user1==$tellerid&&password_verify($pass1, $pass)&&$stat=='offline'){
	$_SESSION["username"] = $tellerid;
	if($actype=='admin'&&$accountype==7){
		$_SESSION["username"] = $tellerid;
	header('Location: '.$link);
	}
	
	else if($actype=='teller'&&$accountype==1||$accountype==2||$accountype==3||$accountype==4||$accountype==5||$accountype==6){
		$_SESSION["username"] = $tellerid;
	header('Location: '.$nlink);
	}
	else{
		$err="Account Id or Password is Incorrect";
	}	
			
}
else if($user1==$tellerid&&password_verify($pass1, $pass)&&$stat=='online'){
	$err="Account is already online";
}
else{
	$err="Account Id or Password is Incorrect";
}
}



}
?>



<html>
<head>
			<meta charset="utf-8"/>
	          <meta name="viewport" content="width=device=width,initial-scale=1.0">
			<link rel="stylesheet" href="style/style.css" type="text/css"/>

			<link rel="stylesheet" href="style/w3.css">
			<link rel="stylesheet" href="style/materials.css">
			<link rel="stylesheet" href="style/font-awesome.min.css">
			<link rel="stylesheet" href="style/1font-awesome.min.css">
<script>
        window.onload = disableBack();    
</script>
</head>
<body>
<br><br>
<center>
	<br><br>
<div class="pos">
		<h>LOG IN </h>
		<form action="<?php $_SERVER["PHP_SELF"];?>" method="post" >
		<i class="material-icons" style="font-size:30px;color:orangered;">person</i>			

		<input type="text" name="user" style="width: 30%;font-family: arial;font-size: 30px;border: 2px solid orangered;"><br><br>
		<i class="material-icons" style="font-size:30px;color:orangered;">lock</i>
<input type="password" name="pass" style="width: 30%;font-family: arial;font-size: 30px;border: 2px solid orangered;"><br><br>
User Type:<select name="accountype">
	<option value="1">Teller 1</option>
	<option value="2">Teller 2</option>
	<option value="3">Teller 3</option>
	<option value="4">Teller 4</option>
	<option value="5">Teller 5</option>
	<option value="6">Teller 6</option>
	<option value="7">Admin</option>
</select>


<div style="color:#9D1A0A;font-size:18px;"><br><?php echo $err;?></div>

<input type="SUBMIT" style="width: 30%;background-color: orangered;color: white;font-family: arial;font-size: 30px;border: 0px;margin-top: 3%;border-radius: 3px; margin-left: 3.5%" value="Login"></center>
</form>

</div>

</body>
</html>