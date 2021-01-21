<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/login.css" />
<script language="javascript">
	function loginxl()
	{
		var txtuser = document.getElementById("txtuser");
		var usser = document.getElementById("usser");
		if(txtuser.value.length=="")
		{
		   txtuser.style.color="#FF0000";
		   usser.style.color="#FF0000";
		   usser.innerHTML="Vui lòng nhập tài khoản ";
		   txtuser.focus();
		   return false;
		}
		else 
		{
		   txtuser.style.color="";
		   usser.innerHTML="";
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

<body background="../images/admin.jpg">
<div align="center">
<?php 
	include("banner2.php")
?>
<?php 
$user = "";
$user = "";
if(isset($_COOKIE["username"]))
{
	$user = $_COOKIE["username"];
	$pass = $_COOKIE["password"];
}
?>

<form action="dangnhapxl.php" method="post">
	<div class="loginform" >
		<b>Username</b><br />
		<input type="text" placeholder="Username..." name="user" id="txtuser" value="<?php echo $user?>" /><div id="usser"></div><br />
		<b>Password</b><br />
		<input type="password" placeholder="Password..." name="pass" id="txtpass" />
		<div id="pass"></div><br />
		<input type="submit" value="Login" onclick="return loginxl()"/>
		<br />
		<input type="checkbox" checked="checked" name="chk" id="txtchk" />Remember me<div id="chk"></div>
		<a href="dangky.php"><input type="button" value="Tạo tài khoản" /></a>
	</div>
</form>
<div>
</body>
</html>
