<?php
error_reporting(0);
ini_set('display_errors', 0);
$hostname="localhost";
$user="root";
$password="";
$database="queuing";

$c='';





$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
$result2=mysqli_query($link, "SELECT * FROM display where teller=3");

for($i=0; $i<$num_rows=mysqli_fetch_array($result2);$i++){
$c=$num_rows["quenumber"];

}
if($c==null){
	echo "--";
}
else{
	echo "$c";

}


?>


