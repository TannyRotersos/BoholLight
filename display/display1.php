<?php
session_start();
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
	$_SESSION["que1"]=$a;
	echo "$a";

}
/*
// connect and login to FTP server
$destination_path = "public_html/"; 
$ftp_server = "files.000webhost.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, "blci", "intrudertanny");

$file1 = "../tests/teller1.txt";
$destination_file1 = $destination_path."serverfile1.txt";

// upload file
if (ftp_put($ftp_conn, $destination_file1, $file1, FTP_ASCII))
  {
  echo "";
  }
else
  {
  echo "";
  }
//close connection
ftp_close($ftp_conn);*/

?>


