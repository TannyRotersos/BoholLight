<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Queueing Admin</title>

<style type="text/css">
.t1{
	background-color: #F75E29;  
}
td{
	width:220px;
	padding: 5px;
	border-radius: 2px;
	background-color: #FAD1C3;  
}
table{
	font-family:'Century Gothic';
	color: #515355 ;
	font-size: 18px;
	padding: 0px;
	width: 100%;
	border-spacing: 1px;

}
th{
	width:220px;
	 border-radius: 2px;
	 font-size: 20px;
	 color: white;
}
.tds{
	text-align: center;
}

</style>
</head>

<body>
	<center>

		<form action="<?php $_SERVER["PHP_SELF"];?>" method="post" >
			Year<select name="year">
  				<option value="2017">2017</option>
  				<option value="2018">2018</option>
			</select>
			Month<select name="month">
    			<option value='1'>January</option>
			    <option value='2'>February</option>
			    <option value='3'>March</option>
			    <option value='4'>April</option>
			    <option value='5'>May</option>
			    <option value='6'>June</option>
			    <option value='7'>July</option>
			    <option value='8'>August</option>
			    <option value='9'>September</option>
			    <option value='10'>October</option>
			    <option value='11'>November</option>
			    <option value='12'>December</option>
    		</select> 
			<button type="submit">SUBMIT</button>
</form>
<table border="0" >

	<?php

$hostname="localhost";
$user="root";
$password="";
$database="queuing";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$year=$_POST['year'];
$month=$_POST['month'];

$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
$result=mysqli_query($link, "SELECT * FROM que1 where teller=1;");



echo "<tr class='t1'><th colspan='16'>ALL ORDINARY CUSTOMER'S RECORDS</th></tr>" ;
echo "<tr class='t1'><th>Queue Number</th><th>Name</th><th>Account Number</th><th>Amount</th><th>Name</th><th>Account Number</th><th>Amount</th><th>Name</th><th>Account Number</th><th>Amount</th><th>Name</th><th>Account Number</th><th>Amount</th><th>Contact Number</th><th>Date</th><th>Teller</th></tr>" ;

for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){
	
$b=$num_rows["quenumber"];
$d=$num_rows["name"];
$e=$num_rows["accountnum"];
$f=$num_rows["amount"];
$g=$num_rows["name2"];
$h=$num_rows["accountnum2"];
$in=$num_rows["amount2"];
$j=$num_rows["name3"];
$k=$num_rows["accountnum3"];
$l=$num_rows["amount3"];
$m=$num_rows["name4"];
$n=$num_rows["accountnum4"];
$o=$num_rows["amount4"];
$p=$num_rows["contact"];
$q=$num_rows["dtime"];
$r=$num_rows["teller"];
	
	echo "<tr><td class='tds'>" .$b."</td>". "<td class='tds'>" .$d."</td>". "<td class='tds'>" .$e."</td>". "<td class='tds'>" .$f. "</td>". "<td class='tds'>" .$g."</td>"."<td class='tds'>" .$h. "</td>"."<td class='tds'>" .$in. "</td>"."<td class='tds'>" .$j. "</td>"."<td class='tds'>" .$k. "</td>"."<td class='tds'>" .$l. "</td>"."<td class='tds'>" .$m. "</td>"."<td class='tds'>" .$n. "</td>"."<td class='tds'>" .$o. "</td>"."<td class='tds'>" .$p. "</td>"."<td class='tds'>" .$q. "</td>"."<td class='tds'>" .$r. "</td>"."</tr>";


}
}

else{
	$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
$result=mysqli_query($link, "SELECT * FROM que1;");



echo "<tr class='t1'><th colspan='16'>ALL ORDINARY CUSTOMER'S RECORDS</th></tr>" ;
echo "<tr class='t1'><th>Queue Number</th><th>Name</th><th>Account Number</th><th>Amount</th><th>Name</th><th>Account Number</th><th>Amount</th><th>Name</th><th>Account Number</th><th>Amount</th><th>Name</th><th>Account Number</th><th>Amount</th><th>Contact Number</th><th>Date</th><th>Teller</th></tr>" ;

for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){
	
$b=$num_rows["quenumber"];
$d=$num_rows["name"];
$e=$num_rows["accountnum"];
$f=$num_rows["amount"];
$g=$num_rows["name2"];
$h=$num_rows["accountnum2"];
$in=$num_rows["amount2"];
$j=$num_rows["name3"];
$k=$num_rows["accountnum3"];
$l=$num_rows["amount3"];
$m=$num_rows["name4"];
$n=$num_rows["accountnum4"];
$o=$num_rows["amount4"];
$p=$num_rows["contact"];
$q=$num_rows["dtime"];
$r=$num_rows["teller"];
	
	echo "<tr><td class='tds'>" .$b."</td>". "<td class='tds'>" .$d."</td>". "<td class='tds'>" .$e."</td>". "<td class='tds'>" .$f. "</td>". "<td class='tds'>" .$g."</td>"."<td class='tds'>" .$h. "</td>"."<td class='tds'>" .$in. "</td>"."<td class='tds'>" .$j. "</td>"."<td class='tds'>" .$k. "</td>"."<td class='tds'>" .$l. "</td>"."<td class='tds'>" .$m. "</td>"."<td class='tds'>" .$n. "</td>"."<td class='tds'>" .$o. "</td>"."<td class='tds'>" .$p. "</td>"."<td class='tds'>" .$q. "</td>"."<td class='tds'>" .$r. "</td>"."</tr>";


}
}


?>

</table>

	

<br><br><a href="admin.php"><input type="button" value="Back to Menu"></a>
</center>
</body>
	</html>