<!DOCTYPE html>
<html>
<head>
	<title>Edit User Account</title>
</head>
<body>

	<form>
	Username:<input type="text" name="username" id="user" required><br><br>
	Old Password:<input type="text" name="oldpass" id="oldp" required><br><br>
	New Password:<input type="password" name="newpass" id="newpass" required><br><br>
	Confirm New Password:<input type="password" name="cnewpass" id="cnewpass" onkeyup="validation()" required><span id="msg"></span><br><br>
	<button id="submit" value="submit">Submit</button>
</form>

<script type="text/javascript">

	var d1=document.getElementById("user").value;
	var d2=document.getElementById("oldp").value;
if(d1==''&&d2==''){
 document.getElementById("submit").style.visibility = "hidden";
}

function validation(){
	
	var pass1=document.getElementById("cnewpass").value;
	var pass2=document.getElementById("newpass").value;

	if(pass1!==pass2){
		document.getElementById("msg").style.color = "#ff0000";
		document.getElementById("msg").innerHTML="Password Not Matched!";
	}
	else{
		document.getElementById("msg").style.color = "#038F25";
		document.getElementById("msg").innerHTML="Password Matched!";
		document.getElementById("submit").style.visibility = "visible";
	}

}
</script>
</body>
</html>