<?php
error_reporting(0);
ini_set('display_errors', 0);
$hostname="localhost";
$user="root";
$password="";
$database="queuing";


$a="";


$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
$result=mysqli_query($link, "SELECT * FROM display where teller=1");

for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){
$a=$num_rows["quenumber"];}

if($a==null){
	echo "--";
}
else{
	echo "$a";

}


?>


