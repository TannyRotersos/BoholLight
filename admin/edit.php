<?php
session_start();
if(!$_SESSION["username"]){
    //Do not show protected data, redirect to login...
    header("Location: ../user.php");
}

$userid=$_SESSION["username"];
$_SESSION["id"] = $userid;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit User Account</title>
	<meta charset="utf-8"/>
        <meta type="viewport" content="width=device=width, initial-scale=1.0">
     <link rel="stylesheet" href="../style/inputstyle.css" type="text/css"/>

</head>
<body>
	
<br><center>
	<v>EDIT ACCOUNT </v>
<table border="0" >
<?php



$hostname="localhost";
$user="root";
$password="";
$database="queuing";



$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
$result=mysqli_query($link, "SELECT * FROM accounts;");

echo "<tr><th colspan='10'>User Accounts</th></tr>" ;
echo "<tr><th>User ID</th><th>Password</th><th>Account Type</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Address</th><th>Contact Number</th><th></th></tr>" ;


//===========================================================================================
for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){


	$id=$num_rows["userid"];
	$pass=$num_rows["pass"];
	$link=$num_rows["link"];
	$actype=$num_rows["accountype"];
	$stat=$num_rows["stat"];
	$fname=$num_rows["fname"];
	$lname=$num_rows["lname"];
	$age=$num_rows["age"];
	$add=$num_rows["address"];
	$contact=$num_rows["contact"];
	
	

	echo "<tr><td>".$id."</td>". "<td>**************</td>". "<td>" .$actype."</td>". "<td >" .$fname."</td>". "<td>" .$lname. "</td>". "<td>" .$age."</td>"."<td >" .$add."</td>"."<td>" .$contact."</td>"."<td><form method='POST' action='update2.php'><button name='id' value='$id'>Update Account</button></form></td>"."</tr>";


//===========================================================================================

//===========================================================================================
//========================================================================================
}
?>

</table>

<a href="index.php"><button class="paycreate">BACK</button></a>
</center>
</body>
</html>