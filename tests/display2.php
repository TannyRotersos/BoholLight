<?php

$myfile = fopen("teller2.txt", "r") or die("Unable to open file!");

$nummm=fread($myfile,filesize("teller2.txt"));

if($nummm==null){
	echo "--";
}
else{
echo "$nummm";
}

fclose($myfile);
?>