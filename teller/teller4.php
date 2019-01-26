<?php
session_start();
if(!$_SESSION["iD"]){
    //Do not show protected data, redirect to login...
    header("Location: ../user.php");
}

date_default_timezone_set("Asia/Hong_Kong");

$hostname="localhost";
$user="root";
$password="";
$database="queuing";
$userid=$_SESSION["iD"];
$_SESSION["user"]=$userid;
$a=$b=$c=$d=$e=$f=$g=$h=$in=$j=$k=$l=$m=$n=$o=$p=$q=$r='';




$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");
mysqli_query($link, "UPDATE users set stat='online' where userid='$userid';");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//===============================================================
$result=mysqli_query($link, "SELECT MIN(quenumber) as 'new' FROM senior where taposna=0;");
for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){
$a=$num_rows["new"];
}
if($a!==null){
//===============================================================
mysqli_query($link, "UPDATE senior SET taposna=1 where quenumber=$a;");
//===============================================================
$result1=mysqli_query($link, "SELECT * FROM senior1 where quenumber like '%$a%' AND taposna=0");
         mysqli_query($link, "UPDATE senior1 SET taposna=1 where quenumber like '%$a%';");
for($i=0; $i<$num_rows=mysqli_fetch_array($result1);$i++){
$b=$num_rows["quenumber"];
$d=$num_rows["name"];
$e=$num_rows["accountnum"];
$f=$num_rows["amount"];
$g=$num_rows["name2"];
$h=$num_rows["accountnum2"];
$in=$num_rows["amount2"];
$j=$num_rows["name3"];
$k=$num_rows["accountnum3"];
$l=$num_rows["amount3"];
$m=$num_rows["name4"];
$n=$num_rows["accountnum4"];
$o=$num_rows["amount4"];
$p=$num_rows["taposna"];
$q=$num_rows["contact"];
}
//===============================================================

mysqli_query($link, "UPDATE display SET quenumber='$b' where teller=4");

//===============================================================
}
else{
  mysqli_query($link, "UPDATE display SET quenumber='' where teller=4");

}

//#############################Here starts the sms notification
$sms=$a+5;
$a1=$a2=$a3=$a4=$a5=$a6=$a7=$a8=$a9=$a10=$a11=$a12=$a13=$a14=$a15=$a16=$in1='';
$cc1='';

$result1=mysqli_query($link, "SELECT * FROM senior where quenumber=$sms");
for($i=0; $i<$num_rows=mysqli_fetch_array($result1);$i++){
$a1=$num_rows["quenumber"];
$a2=$num_rows["name"];
$a3=$num_rows["accountnum"];
$a4=$num_rows["amount"];
$a5=$num_rows["name2"];
$a6=$num_rows["accountnum2"];
$in1=$num_rows["amount2"];
$a7=$num_rows["priority"];
$a8=$num_rows["taposna"];
$cc1=$num_rows["contact"];
$a9=$num_rows["name3"];
$a10=$num_rows["accountnum3"];
$a11=$num_rows["amount3"];
$a12=$num_rows["name4"];
$a13=$num_rows["accountnum4"];
$a14=$num_rows["amount4"];

}

//##########################################################################

//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode){
      $ch = curl_init();
      $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
      curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
      curl_setopt($ch, CURLOPT_POST, 1);
       curl_setopt($ch, CURLOPT_POSTFIELDS, 
                http_build_query($itexmo));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      return curl_exec ($ch);
      curl_close ($ch);
}
//##########################################################################

if($cc1==null||$cc1==''){
  $result = itexmo("09094420621","Bohol Light Company Inc.\nis now serving priority number $b. Please be ready. \n\nYou can inquire the current number served by the teller! Just reply BLCIQ to this message. You can also view it online by visiting https://blci.000webhostapp.com/","DE-TANNY941655_25SU7");
}
else{
 $result = itexmo("$cc1","Bohol Light Company Inc.\nNow serving priority number $b. Please be ready.","DE-TANNY941655_25SU7");
}

if ($result == ""){
echo "";  
}else if ($result == 0){
echo "";
}
else{ 
echo "Error Num ". $result . " was encountered!";
}
//##########################################################################

$n1=date('h:i a');
//##########################################################################
//========================
$myfile = fopen("../tests/teller4.txt", "w") or die("Unable to open file!");
if($b==null||$b==''){
  $txt = "--";
}
else{
  $txt = "$b ($n1)";
}
fwrite($myfile, $txt);
fclose($myfile);
//========================
// connect and login to FTP server
$destination_path = "public_html/"; 
$ftp_server = "files.000webhost.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, "blci", "intrudertanny");

$file1 = "../tests/teller4.txt";
$destination_file1 = $destination_path."serverfile4.txt";

// upload file
if (ftp_put($ftp_conn, $destination_file1, $file1, FTP_ASCII))
  {
  echo "";
  }
else
  {
  echo "";
  }
// close connection
ftp_close($ftp_conn);
}


?>

<html>
<head>
    <meta charset="utf-8"/>
        <meta type="viewport" content="width=device=width, initial-scale=1.0">
            <link rel="stylesheet" href="../style/style1.css" type="text/css"/>
<style type="text/css">
      
     .disp1{
    margin: 0%;
    width: 75%;
    height: 19%;
}
     </style>
</head>    
<body onload="play(); deleteRow();">
</center>
   <center>
       <br><br>
        <table class="table1" id="tellertab" >
        <tr>
          <td colspan="3"><center><o>QUEUE NUMBER &nbsp;&nbsp;</o><n><b><?php echo "$b";?></b></n></center></td>
        </tr>  
        <tr>
          <td>Name</td>
          <td>Account Number<br></td>
          <td>Amount</td>
        </tr>
        <tr>
          <td colspan="3" style="text-align: left;"><b>Electric Bill Payment</b></td>
        </tr>  
        <tr id="row3">
          <td><?php echo "$d";?></td>
          <td><?php echo "$e";?></td>
          <td><?php echo "$f";?></td>
        </tr>  
        <tr id="row4">
          <td><?php echo "$j";?></td>
          <td><?php echo "$k";?></td>
          <td><?php echo "$l";?></td>
        </tr> 
        <tr>
          <td colspan="3" style="text-align: left;"><b>Water Bill Payment</b></td>
        </tr> 
        <tr id="row5">
          <td><?php echo "$g";?></td>
          <td><?php echo "$h";?></td>
          <td><?php echo "$in";?></td>
        </tr>
         <tr id="row6">
          <td><?php echo "$m";?></td>
          <td><?php echo "$n";?></td>
          <td><?php echo "$o";?></td>
        </tr> 




        </table>
              
 
        <div id="links"></div>
       
        
        <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
            <button type="submit" name="get" style="width: 20%; height: 50px;background-color: orangered;color: white;font-family: arial;font-size: 30px;border: 0px;margin-top: 3%;border-radius: 3px; margin-left: 3.5%" value="<?php echo "$e";?>" >Get Queue</button>
        </form>
    
 <form action="logout4.php" method="POST">
            <button type="submit" name="get" style="width: 20%; height: 50px; background-color: orangered;color: white;font-family: arial;font-size: 30px;border: 0px;margin-top: 3%;border-radius: 3px; margin-left: 3.5%">Logout</button>
        </form>
    </center>
    
 <script type="text/javascript" src="jj.js"></script> 
<script>
 //==============================================================
 function deleteRow()  
{   

  var data1="<?php echo $d; ?>";
  var data2="<?php echo $e; ?>";
  var data3="<?php echo $f; ?>";
  var data4="<?php echo $j; ?>";
  var data5="<?php echo $k; ?>";
  var data6="<?php echo $l; ?>";
  var data7="<?php echo $g; ?>";
  var data8="<?php echo $h; ?>";
  var data9="<?php echo $in; ?>";
  var data10="<?php echo $m; ?>";
  var data11="<?php echo $n; ?>";
  var data12="<?php echo $o; ?>";
  
if(data1==''&&data2==''&&data3==''){
  var row = document.getElementById('row3');
    row.parentNode.removeChild(row);
}
if(data4==''&&data5==''&&data6==''){
   var row = document.getElementById('row4');
    row.parentNode.removeChild(row);
}
if(data7==''&&data8==''&&data9==''){
   var row = document.getElementById('row5');
    row.parentNode.removeChild(row);
}
if(data10==''&&data11==''&&data12==''){
   var row = document.getElementById('row6');
    row.parentNode.removeChild(row);
}
}



 //==============================================================
  function play(){
       var audio = document.getElementById("audio");
       audio.play();
                 }
var auto_refresh = setInterval( function() {
  $('#links').load('waiting2.php'); 
}, 1000); 
 
   </script>

<audio id="audio" src="1.mp3" ></audio>


</body>
</html>

