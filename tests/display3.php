<?php

$myfile = fopen("teller3.txt", "r") or die("Unable to open file!");

$nummm=fread($myfile,filesize("teller3.txt"));

if($nummm==null){
	echo "--";
}
else{
echo "$nummm";
}

fclose($myfile);
?>