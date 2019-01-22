<?php

$myfile = fopen("teller4.txt", "r") or die("Unable to open file!");

$nummm=fread($myfile,filesize("teller4.txt"));

if($nummm==null){
	echo "--";
}
else{
echo "$nummm";
}

fclose($myfile);
?>