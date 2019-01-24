<?php
session_start();
$hostname="localhost";
$user="root";
$password="";
$database="queuing";




$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");


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
	$err="Teller is already online";
}
else{
	$err="Teller Id or Password is Incorrect";
}
}



}
?>



<html>
<head>
	        <link rel="stylesheet" href="style.css" type="text/css"/>

<script>
        window.onload = disableBack();    
</script>

<!--<style type="text/css">
body{
	background-image: url(img/m1.jpg);
	color: white;
	font-size: 22px;
	font-family: 'Century Gothic';
}
.btn{
	font-family: 'Century Gothic';
	font-size: 20px;
}
.pos{
	float: left;
	position: relative;
	left: 35%;
	width: 30%;
	
}
.ta{
	border-top: 0px;
	border-left: 0px;
	border-right: 0px;
	background-color: rgba(0,0,0,0);
	width: 45%;
	border-bottom: 2px solid #00FFFF;
	font-size: 22px;
	color: white;

}
input:focus{
    outline: none;
}

</style>--></head>
<body>
<br><br><br><br><br><br>
<div class="pos">

		<form action="<?php $_SERVER["PHP_SELF"];?>" method="post" >
&nbsp;&nbsp;User ID: <input type="text" class="ta" name="user" ><br><br>
PASSWORD:&nbsp;&nbsp;<input type="password" class="ta" name="pass"> <br><br>

<div style="color:#9D1A0A;font-size:18px;"><?php echo $err;?></div><br><br>

<center><input type="SUBMIT" class="btn" value="Login"></center>
</form>

</div>

</body>
</html>