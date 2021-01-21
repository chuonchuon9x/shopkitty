<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
	input[type=password] {
	  width: 30%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  box-sizing: border-box;
	}
	
	input[type=submit] {
	  background-color: #FF99FF;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: 1px solid #FF66CC;
	  cursor: pointer;
	  width: 10%;
	  text-align:center;
	}
	
	input[type=button] {
	  width: auto;
	  padding: 10px 18px;
	  background-color: #f44336;
	  text-align:center;
	}
</style>
</head>

<body background="../images/admin.jpg">
<div align="center">
	<?php
		require_once('kiemtrakhachhang.php');
		include("banner2.php");
	?>
	<form action="doimatkhauxl.php">
		Nhập mật khẩu cũ
		<br />
		<input type="password" name="mat_khau_cu">
		<br>
		Nhập mật khẩu mới
		<br />
		<input type="password" name="mat_khau_moi">
		<br>
		Nhập lại mật khẩu mới
		<br />
		<input type="password" name="re_mat_khau_moi">
		<br>
		<input type="submit" name="button_submit" value="Đổi mật khẩu">
	</form>

</body>
</html>
