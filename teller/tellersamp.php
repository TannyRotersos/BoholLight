<?php

$hostname="localhost";
$user="root";
$password="";
$database="queuing";

$a=$b=$c=$d=$e=$f=$g=$h=$in=$j=$k=$l=$m=$n=$o=$p=$q=$r='';




$link=mysqli_connect($hostname,$user,$password) or die ("Error Connection");
mysqli_select_db($link, $database) or die ("Error creating database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {



//===============================================================
$result=mysqli_query($link, "SELECT MIN(quenumber) as 'new' FROM que where taposna=0;");
for($i=0; $i<$num_rows=mysqli_fetch_array($result);$i++){
$a=$num_rows["new"];
}
//===============================================================
mysqli_query($link, "UPDATE que SET taposna=1 where quenumber=$a;");
//===============================================================
$result1=mysqli_query($link, "SELECT * FROM que1 where quenumber like '%$a%' AND taposna=0");
         mysqli_query($link, "UPDATE que1 SET taposna=1 where quenumber like '%$a%';");
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
mysqli_query($link, "INSERT INTO display(quenumber, teller) VALUES ('$b',1)");
//===============================================================


}
?>



<html>
    <meta charset="utf-8"/>
        <meta type="viewport" content="width=device=width, initial-scale=1.0">
            <link rel="stylesheet" href="../style/style1.css" type="text/css"/>
    
<body onload="play(); deleteRow();">
   <center>
       <br><br>
        <hr width="80%" size="5px" align="center" color="orangered">
        <table class="table1" id="tellertab">
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
       
        <hr width="80%" size="5px" align="center" color="orangered">
        
        <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
            <button type="submit" name="get" class="paysub" value="<?php echo "$e";?>" >Get Queue</button>
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
  $('#links').load('waiting.php'); 
}, 1000); 
 
    window.onbeforeunload = function() { return "Please Log out Before Closing Tabs!"; }      
   </script>

<audio id="audio" src="1.mp3" ></audio>


</body>
</html>

