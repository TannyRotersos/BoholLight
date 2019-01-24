<?php
date_default_timezone_set("Asia/Hong_Kong");
$t1=date('H:i');
$t2='17:00';

error_reporting(0);
ini_set('display_errors', 0);

if($t1>$t2){
$myfile = fopen("serverfile1.txt", "w") or die("Unable to open file!");
  $txt = "--";
fwrite($myfile, $txt);
fclose($myfile);
}
else{
$myfile = fopen("serverfile1.txt", "r") or die("Unable to open file!");

$nummm=fread($myfile,filesize("serverfile1.txt"));

if($nummm==null){
	echo "--";
}
else{
echo "$nummm";
}
}
fclose($myfile);


?>