<!DOCTYPE html>
<html>
<body>

<?php


date_default_timezone_set("Asia/Hong_Kong");

// Prints something like: Monday 8th of August 2005 03:12:46 PM
//echo date('l, F j, Y h:i a');
$n1=date('H:i a');
$n2='05:00 pm';

if($n1>$n2){
	echo "$n1";
}
else{
	echo "Naa pa";
}

?>

</body>
</html>