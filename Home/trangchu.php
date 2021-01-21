<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Chủ</title>
</head>

<body background="../images/admin.jpg">
<?php 
	include ("banner.php");	
	if(isset($_SESSION['username'])){
		include ("menukhThanhvien.php");
	}
	else{
		include ("menukh.php");
	}
	include ("danhsachsp.php");
?>
</body>
</html>
