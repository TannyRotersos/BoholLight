<?php
session_start();
$hostname="localhost";
$user="root";
$password="";
$database="queuing";




$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");

if(isset($_SESSION['iD'])){
	$id=$_SESSION['iD'];
$result=mysqli_query($link, "SELECT * FROM users where userid='$id';");

for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){

	$tellerid=$num_rows["userid"];
	$pass=$num_rows["pass"];
	$link=$num_rows["link"];
	$stat=$num_rows["stat"];
	header('Location: '.$link);
}
}


$err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {



$user1=$_POST['user'];
$pass1=$_POST['pass'];
    

$result=mysqli_query($link, "SELECT * FROM users where userid='$user1';");

for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){

	$tellerid=$num_rows["userid"];
	$pass=$num_rows["pass"];
	$link=$num_rows["link"];
	$stat=$num_rows["stat"];

if($user1==$tellerid&&$pass1==$pass&&$stat==0){
	$_SESSION["iD"] = $user1;
	header('Location: '.$link);
	
}
else if($user1==$tellerid&&$pass1==$pass&&$stat==1){
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

			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<input type="password" name="pass" style="width: 30%;font-family: arial;font-size: 30px;border: 2px solid orangered;"> 

<div style="color:#9D1A0A;font-size:18px;"><br><?php echo $err;?></div>

<input type="SUBMIT" style="width: 30%;background-color: orangered;color: white;font-family: arial;font-size: 30px;border: 0px;margin-top: 3%;border-radius: 3px; margin-left: 3.5%" value="Login"></center>
</form>

</div>

</body>
</html>