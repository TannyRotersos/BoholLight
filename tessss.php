<?php


        //########################################################################################
        //ITEXMO CUSTOM RECEIVED SMS API VERSION 1.2 #############################################
        //########################################################################################
        //IMPORTANT: Create a database with the folowing exact coloumn name:
        // -> "originator" -> Varchar with 15 characters atleast - > SMS Originator number
        // -> "gateway" -> Varchar with 15 characters atleast - > SMS Server Number
        // -> "message"    -> Varchar with 480 characters atleast -> SMS Content
        // -> "timestamp"  -> Varchar with 50 characters atleast -> SMS SERVER TimeStamp        
        //########################################################################################
        //########################################################################################
        //Insert your database information here...
        //########################################################################################
        $a = "localhost"; //Database address eg. localhost
        $b = "id8463819_bohollight"; //Database username with insert permissions
        $c = "intrudertanny"; //Database password
        $d = "id8463819_bohollight"; //Database Name
        $f = "messages"; //Table Name
        //########################################################################################
        //########################################################################################
        //Do not edit below codes unless you know what you are doing.
        //########################################################################################
        $conn = new mysqli($a, $b, $c);
        if ($conn->connect_error) {die("ERROR");}     
        //Variables from itexmo's server calls
        $originator = ""; if(isset($_POST['originator'])){ $originator = $_POST['originator']; }
        $gateway = ""; if(isset($_POST['gateway'])){ $gateway = $_POST['gateway']; }
        $message = ""; if(isset($_POST['message'])){ $message = $_POST['message']; }
        $timestamp = ""; if(isset($_POST['timestamp'])){ $timestamp = $_POST['timestamp']; }
        //Escapes
        $gateway = mysqli_real_escape_string($conn,$gateway);
        $originator = mysqli_real_escape_string($conn,$originator);
        $message = mysqli_real_escape_string($conn,$message);
        $timestamp = mysqli_real_escape_string($conn,$timestamp);
        //Query
        $sql = "INSERT INTO `$d`.`$f` (`gateway`,`originator`,`message`,`timestamp`) VALUES ('$gateway','$originator','$message','$timestamp')  ";
        if ($conn->query($sql) === TRUE) {echo "";    }else{echo "";}
        $conn->close();

date_default_timezone_set("Asia/Hong_Kong");
$t1=date('H:i');
$t2='17:00';
$t3='08:00';

$myfile1 = fopen("serverfile1.txt", "r") or die("Unable to open file!");
$myfile2 = fopen("serverfile2.txt", "r") or die("Unable to open file!");
$myfile3 = fopen("serverfile3.txt", "r") or die("Unable to open file!");
$myfile4 = fopen("serverfile4.txt", "r") or die("Unable to open file!");

$n1=fread($myfile1,filesize("serverfile1.txt"));
$n2=fread($myfile2,filesize("serverfile2.txt"));
$n3=fread($myfile3,filesize("serverfile3.txt"));
$n4=fread($myfile4,filesize("serverfile4.txt"));

fclose($myfile1);
fclose($myfile2);
fclose($myfile3);
fclose($myfile4);
        //########################################################################################
        //########################################################################################
      $aa=$bb=$cc=$dd=$ee='';
$hostname="localhost";
$user="id8463819_bohollight";
$password="intrudertanny";
$database="id8463819_bohollight";
$code="BLCIQ";

       $link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
        $result=mysqli_query($link, "SELECT * FROM messages where done=0");

        for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){
          $aa=$num_rows["originator"];
          $bb=$num_rows["gateway"];
          $cc=$num_rows["message"];
          $dd=$num_rows["timestamp"];
          $ee=$num_rows["done"];
        }

##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);}
//##########################################################################

if($cc==$code&&$t1<$t2||$t1>$t3){


         $result = itexmo("$aa","Now Serving\n$n1 on Teller 1.\n$n2 on Teller 2.\n$n3 on Teller 3.\n$n4 on Special Lane. \nView Queues online by visiting https://blci.000webhostapp.com\n\nThank You for your inquiry!","DE-TANNY941655_25SU7");

         if ($result == ""){
         echo "";  
         }else if ($result == 0){
         echo "";
         }
        else{ 
        echo "Error Num ". $result . " was encountered!";
         }
          }
else if($cc==$code&&$t1>$t2||$t1<$t3){


         $result = itexmo("$aa","Sorry but the establishment is closed. No transactions are being served. Please try again during office hours (8:00am to 5:00pm).","DE-TANNY941655_25SU7");

         if ($result == ""){
         echo "";  
         }else if ($result == 0){
         echo "";
         }
        else{ 
        echo "Error Num ". $result . " was encounterewd!";
         }
          }  
else if($cc!==$code&&$t1>$t2||$t1<$t3){
        $result = itexmo("$aa","Sorry, you have entered an invalid code. Please try again.","DE-TANNY941655_25SU7");

        if ($result == ""){
        echo "";  
        }else if ($result == 0){
        echo "";
        }
        else{ 
        echo "";
        }
        }        
else{
        $result = itexmo("$aa","Sorry, you have entered an invalid code. Please try again.","DE-TANNY941655_25SU7");

        if ($result == ""){
        echo "";  
        }else if ($result == 0){
        echo "";
        }
        else{ 
        echo "";
        }
        }

?>


<html>
<head>
    <meta charset="utf-8"/>
        <meta type="viewport" content="width=device=width, initial-scale=1.0">
      
<style type="text/css">
body{
  background-color: rgba(195, 246, 250,0.6);
  padding: 0%;
}
.title{
  font-size: 250%;
  font-family: Arial;
  font-weight: bolder;
  text-align: center;
  color: #A12207;
}
.tellernumber1{
font-size: 330%;
  font-family: Arial;
  font-weight: bolder;
  text-align: center;
}
.tellernumber{ 
   font-size: 330%;
  font-family: Arial;
  font-weight: bolder;
  text-align: center;
  line-height: 1.6;
}
.tellernumber3{
   font-size: 330%;
  font-family: Arial;
  font-weight: bolder;
  text-align: center;
}

</style>
</head>
<body>
    
  
<table width="100%" border=0 >
<tr>
    <td colspan="2"><center><h3>Please be reminded that this site may not provide you accurate display for the queues as the connection from offline server to this online site may have problems.</h3></center></td>
</tr>
<tr>
    <td class="title">Queue Number</td>
    <td class="title">Teller</td>
</tr>
<tr></tr>
<tr>
    <td class="tellernumber1" > <div id="links"></div></td>
    <td class="tellernumber">1</td>
</tr>
<tr>
    <td class="tellernumber1"><div id="links2"></div></td>
    <td class="tellernumber">2</td>
</tr>
<tr>
    <td class="tellernumber1"><div id="links3"></div></td>
    <td class="tellernumber">3</td>
</tr>
<tr>
    <td class="tellernumber1"><div id="links4"></div></td>
    <td class="tellernumber3">Special Lane</td>
</tr>


</table>
     
    <script type="text/javascript" src="jj.js"></script> 
 <script type="text/javascript" > 
 
       var audio = document.getElementById("audio");
       
                 
 var auto_refresh = setInterval( function() {
   
  $('#links').load('display1.php'); 
},10000); 
 var auto_refresh2 = setInterval( function() {
  $('#links2').load('display2.php'); 
}, 10000);

var auto_refresh2 = setInterval( function() {
  $('#links3').load('display3.php'); 
}, 10000); 

var auto_refresh2 = setInterval( function() {
  $('#links4').load('display4.php'); 
}, 10000); 
 </script>



</body>
</hmtl>

