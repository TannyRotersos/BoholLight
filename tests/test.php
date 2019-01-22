<?php
$num = 90;
$num_padded = sprintf("%02d", $num);
echo $num_padded; // returns 04



$myfile = fopen("index.php", "r") or die("Unable to open file!");

$nummm=fread($myfile,filesize("index.php"));

echo "$nummm";

fclose($myfile);



$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Tanny\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);


?>