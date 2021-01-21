<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Thông Tin Khách Hàng</title>
</head>
<style type="text/css">
	input[type=text] {
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

<body background="../images/admin.jpg">
<div align="center">
	<?php 
		require_once('kiemtrakhachhang.php');
		include("../Common/open.inc");
		include("banner2.php");
		$MaKH = $_SESSION['MaKH'];
		$query = "select * from tblkhachhang
		where MaKH = '$MaKH'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		mysqli_close($con);
	?>
	<form action="chinhsuathongtinkhachhangCTxl.php">
		Tên khách hàng
		<br />
		<input type="text" name="HoTen" value="<?php echo $row['HoTen'] ?>">
		<br />
		SĐT
		<br />
		<input type="text" name="sdt" value="<?php echo $row['sdt'] ?>">
		<br />
		Địa chỉ
		<br />
		<input type="text" name="DiaChi" value="<?php echo $row['DiaChi'] ?>">
		<br />
		Email
		<br />
		<input type="text" name="email" value="<?php echo $row['email'] ?>">
		<br>
		<input type="submit" name="button_submit" value="Chỉnh sửa">
		<br />
		<a href="doimatkhau.php"><input type="button" name="button_submit" value="Đổi Mật Khẩu" ></a>
	</form>
</div>
</body>
</html>