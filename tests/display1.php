<?php

$myfile = fopen("teller1.txt", "r") or die("Unable to open file!");

$nummm=fread($myfile,filesize("teller1.txt"));

if($nummm==null||$nummm==''){
	echo "--";
}
else{
echo "$nummm";
}

fclose($myfile);
?>