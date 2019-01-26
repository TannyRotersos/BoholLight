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
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Update User</title>

</head>
<body>


<?php

$idn=$_POST["id"];

$hostname="localhost";
$user="root";
$password="";
$database="queuing";

$userid = $password = $fname = $lname =$age =$address =$contact = '';



$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
$result=mysqli_query($link, "SELECT userid, pass, fname, lname, age, address, contact FROM accounts where userid='$idn';");

for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){

    $userid=$num_rows["userid"];
    $password=$num_rows["pass"];
    $fname=$num_rows["fname"];
    $lname=$num_rows["lname"];
    $age=$num_rows["age"];
    $address=$num_rows["address"];
    $contact=$num_rows["contact"];
}
    
    
?>
    <div class="main1">

        <h2>Update Account</h2>


<form method="POST" action="updatenew.php" >
Username:<input type="text" name="username"  value='<?php echo $userid;?>' required>  <br><br>

Password: <input type="password"  name="pas"  required><br><br>

First Name: <input type="text"  name="fname" value='<?php echo $fname;?>' required><br><br>

Last Name: <input type="text" name="lname" value='<?php echo $lname;?>' required><br><br>

Age: <input type="text"  name="age" value='<?php echo $age;?>' required><br><br>

Address: <input type="text"  name="add" value='<?php echo $address;?>' required><br><br>

Contact Number: <input type="text" pattern="[0-9]{11}" title="PLEASE PUT 11-DIGIT NUMBER" onKeyDown="if(this.value.length==12 && event.keyCode!=8) return false;" name="cnum" id="contactnum" value='<?php echo $contact;?>' required><br><br>

<button type="submit" name="idnew" value='<?php echo $userid;?>'>Update</button><br><br>

</form>

</body>
</html>
