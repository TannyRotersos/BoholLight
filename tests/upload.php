<?php 
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
ftp_close($ftp_conn);

//

?>
