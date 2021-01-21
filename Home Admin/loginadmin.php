<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/login.css" />
<script language="javascript">
	function loginxl()
	{
		var txtuser = document.getElementById("txtuser");
		var user = document.getElementById("user");
		if(txtuser.value.length=="")
		{
		   txtuser.style.color="#FF0000";
		   user.style.color="#FF0000";
		   user.innerHTML="Vui lòng nhập tài khoản ";
		   txtuser.focus();
		   return false;
		}
		else 
		{
		   txtuser.style.color="";
		   user.innerHTML="";
		}	
		 
		var txtpass = document.getElementById("txtpass");
		var pass = document.getElementById("pass");
		if(txtpass.value.length=="")
		{
		   txtpass.style.color="#FF0000";
		   pass.style.color="#FF0000";
		   pass.innerHTML="Vui lòng nhập mật khẩu ";
		   txtpass.focus();
		   return false;
		}
		else 
		{
		   txtpass.style.color="";
		   pass.innerHTML="";
		}
	return true;
	}
</script>
</head>

<body background="../images/hello-kitty-pink.jpg" >
<?php 
$user = "";
$user = "";
if(isset($_COOKIE["username"]))
{
	$user = $_COOKIE["username"];
	$pass = $_COOKIE["password"];
}
?>
<form action="loginadminxl.php" method="post">
	<div class="loginform" align="center">
		<b>Username</b><br />
		<input type="text" placeholder="Username..." name="user" id="txtuser" value="<?php echo $user?>" /><div id="user"></div><br />
		<b>Password</b><br />
		<input type="password" placeholder="Password..." name="pass" id="txtpass" />
		<div id="pass"></div><br />
		<input type="checkbox" checked="checked" name="chk" id="txtchk" />Remember me<div id="chk"></div>
		<input type="submit" value="Login" onclick="return loginxl()"/>
		<br />
	</div>
</form>
</body>
</html>
