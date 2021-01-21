<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng ký</title>
<link rel="stylesheet" type="text/css" href="../css/Admin/login.css" />
<script language="javascript">
	function dangkyxl()
	{
		var txtsdt = document.getElementById("txtsdt");
		var sdt = document.getElementById("sdt");
		if(txtsdt.value.length=="")
		{
		   txtsdt.style.color="#FF0000";
		   sdt.style.color="#FF0000";
		   sdt.innerHTML="Vui lòng nhập số điện thoại";
		   txtsdt.focus();
		   return false;
		}
		else 
		{
		   txtsdt.style.color="";
		   sdt.innerHTML="";
		}		

		var txtuser = document.getElementById("txtuser");
		var user = document.getElementById("user");
		if(txtuser.value.length=="")
		{
		   txtuser.style.color="#FF0000";
		   user.style.color="#FF0000";
		   user.innerHTML="Vui lòng nhập tài khoản";
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
		   pass.innerHTML="Vui lòng nhập mật khẩu";
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
<?php 
	include("banner2.php")
?>
<form method="post" action="dangkyxl.php">
	<div align="center">
	<b>Số điện thoại</b>
	<br />
	<input type="text" name="txtsdt" id="txtsdt" placeholder="Số điện thoại"/>
	<div id="sdt"></div>
	<br />
	<b>Tên đăng nhập</b>
	<br />
	<input type="text" name="txtuser" id="txtuser" placeholder="Tên đăng nhập" />
	<div id="user"></div>
	<br />
	<b>Mật khẩu</b>
	<br />
	<input type="password" name="txtpass" id="txtpass" placeholder="Mật khẩu" />
	<div id="pass"></div>
	<br />
	<input type="submit" value="Đăng ký" onclick="return dangkyxl()"/>
	</div>
</form>
</body>
</html>
