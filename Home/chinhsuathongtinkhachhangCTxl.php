<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	require_once('kiemtrakhachhang.php');
	if(isset($_GET['button_submit']) && !empty($_GET['HoTen']) && !empty($_GET['sdt']) && !empty($_GET['DiaChi']) && !empty($_GET['email'])){
		$HoTen = $_GET['HoTen'];
		$sdt = $_GET['sdt'];
		$DiaChi = $_GET['DiaChi'];
		$email = $_GET['email'];
	
		include("../Common/open.inc");
		$MaKH = $_SESSION['MaKH'];
		$query = "update tblkhachhang set HoTen = '$HoTen', sdt = '$sdt', DiaChi = '$DiaChi', email = '$email' where MaKH = '$MaKH'";
		mysqli_query($con,$query);
		$error = mysqli_error($con);
		mysqli_close($con);
		if(empty($error)){
			//header thành công 
			echo 'Thay đổi thông tin thành công';
			//header("Location:trangchu.php");
		}
		else{
			//header thất bại
			//header("Location:trangchu.php"); 
		}
	}
	else{
		//header thất bại
		//header("Location:thongtinkhachhangCT.php"); 
	}
	?>
</body>
</html>
