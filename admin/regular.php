<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">

<title>Queueing Admin</title>

<style type="text/css">
.t1{
	background-color: #F75E29;  
}

.createe{
	width: 10%;
	height: 50px;
	font-family: arial;
	font-size: 23px;
	border: 2px solid orangered;
	margin-top: 1%;
}

.paycreate{
	width: 10%;
	height:50px;
	background-color: orangered;
	color: white;
	font-family: arial;
	font-size: 30px;
	margin-top: 1%;
	border-radius: 3px;
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
			<select name="year" class="createe">
			<option value="" disabled selected>Year</option>
  				<option value="2019">2019</option>
  				<option value="2018">2018</option>
			</select>
			<select name="month" class="createe">
			<option value="" disabled selected>Month</option>
    			<option value='01'>January</option>
			    <option value='02'>February</option>
			    <option value='03'>March</option>
			    <option value='04'>April</option>
			    <option value='05'>May</option>
			    <option value='06'>June</option>
			    <option value='07'>July</option>
			    <option value='08'>August</option>
			    <option value='09'>September</option>
			    <option value='10'>October</option>
			    <option value='11'>November</option>
			    <option value='12'>December</option>
    		</select> 
    		<select id="day_start" class="createe"
          name="day_start" /> 
			<option value="" disabled selected>Day</option>
			    <option>1</option>       
			    <option>2</option>       
			    <option>3</option>       
			    <option>4</option>       
			    <option>5</option>       
			    <option>6</option>       
			    <option>7</option>       
			    <option>8</option>       
			    <option>9</option>       
			    <option>10</option>       
			    <option>11</option>       
			    <option>12</option>       
			    <option>13</option>       
			    <option>14</option>       
			    <option>15</option>       
			    <option>16</option>       
			    <option>17</option>       
			    <option>18</option>       
			    <option>19</option>       
			    <option>20</option>       
			    <option>21</option>       
			    <option>22</option>       
			    <option>23</option>       
			    <option>24</option>       
			    <option>25</option>       
			    <option>26</option>       
			    <option>27</option>       
			    <option>28</option>       
			    <option>29</option>       
			    <option>30</option>       
			    <option>31</option>       
			  </select>
			<button type="submit" class="paycreate">SUBMIT</button>
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
$day=$_POST['day_start'];
//where quenumber like '%$a%';
$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
$result=mysqli_query($link, "SELECT * FROM que1 where dtime like '%$year-$month-$day%';");



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

	

<br><br><a href="index.php"><input type="button" class="paycreate" value="Back"></a>
</center>
</body>
	</html>