<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location:../Home Admin/loginadmin.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	body{background:url(../images/hello-kitty-pink.jpg);}
</style>
</head>

<body>
<div align="center">
	<a href="../Home Admin/homeadmin.php">
		<img src="../images/LOGO Hello Kitty.png"/>					
	</a>
</div>
<?php
if(isset($_GET["Madonhang"]))
{
	$Madonhang = $_GET["Madonhang"];
	include("../Common/open.inc");
	$query="select * from tbldonhangchitiet join tblphukien on tbldonhangchitiet.MaPK=tblphukien.MaPK where Madonhang=$Madonhang";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
}

?> 
	<div id="bang">
		<table width="60%" align="center" cellspacing="0" border="1">
		<tr>
			<th>Mã đơn</th>
			<th>Tên sản phẩm</th>
			<th>Hình ảnh</th>
			<th>Số lượng</th>
			<th>Giá</th>
		</tr>
		<tr>
			<td><?php echo $row["Madonhang"]; ?></td>
			<td><?php echo $row["TenPK"]; ?></td>
			<td><img src="<?php echo "../images/".$row["HinhAnh"] ?>" width="100px" height="100px" /></td>
			<td><?php echo $row["Soluong"]; ?></td>
			<td><?php echo ($row["GiaPK"]*$row["Soluong"]); ?></td>
		</tr>
		</table>
	<div id="bang">
<?php
include("../Common/close.inc");
?>
</body>
</html>
