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
  font-size: 50px;
  font-family: Arial;
  font-weight: bolder;
  text-align: center;
  color: #A12207;
}
.tellernumber1{
font-size: 66px;
  font-family: Arial;
  font-weight: bolder;
  text-align: center;
}
.tellernumber{ 
   font-size: 66px;
  font-family: Arial;
  font-weight: bolder;
  text-align: center;
  line-height: 1.6;
}
.tellernumber3{
   font-size: 50px;
  font-family: Arial;
  font-weight: bolder;
  text-align: center;
}

</style>
</head>
<body>
    
  
<table width="100%" border=0 > 
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
<tr>
    <td class="tellernumber1"><div id="links5"></div></td>
    <td class="tellernumber3"></td>
</tr>
</table>
     
    <script type="text/javascript" src="jj.js"></script> 
 <script type="text/javascript" > 
 
       var audio = document.getElementById("audio");
       
                 
 var auto_refresh = setInterval( function() {
  $('#links').load('display1.php'); 
}, 1000); 
 var auto_refresh2 = setInterval( function() {
  $('#links2').load('display2.php'); 
}, 1000);

var auto_refresh2 = setInterval( function() {
  $('#links3').load('display3.php'); 
}, 1000); 

var auto_refresh2 = setInterval( function() {
  $('#links4').load('display4.php'); 
}, 1000); 
/*var auto_refresh2 = setInterval( function() {
  $('#links5').load('online.php'); 
}, 1000); 
*/
 </script>



</body>
</hmtl>

