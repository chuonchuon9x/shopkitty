<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset= UTF-8" />
<title>Đơn Hàng Chi Tiết List</title>
<style type="text/css">
	body{background:url(../images/hello-kitty-pink.jpg);color:#FDFDFD;}
</style>
<link rel="stylesheet" type="text/css" href="../css/nutlist.css" />
</head>

<body>
<div align="center">
	<a href="../Home Admin/homeadmin.php">
		<img src="../images/LOGO Hello Kitty.png"/>					
	</a>
</div>
<?php 
include("../Common/open.inc");
$result = mysqli_query($con,"select * from tbldonhangchitiet");
?>
<table cellspacing="0" border="1" align="center" width="60%" >
	<tr>
    	<th>Mã Đơn Hàng</th>
        <th>Mã Phụ Kiện</th>
        <th>Số Lượng</th>
        <th>Giá Phụ Kiện</th>
		<th>Lựa Chọn</th>
		<th>Lựa Chọn</th>
		<th>Xem đơn hàng chi tiết</th>
    </tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
    <tr>
    	<td><?php echo $row["Madonhang"]; ?></td>
        <td><?php echo $row["MaPK"]; ?></td>
		<td><?php echo $row["Soluong"]; ?></td>
		<td><?php echo $row["GiaPK"]; ?></td>
        <td><a href="donhangctsua.php?Madonhang=<?php echo $row["Madonhang"]; ?>" >Sửa</a></td>
        <td><a href="donhangctxoa.php?Madonhang=<?php echo $row["Madonhang"]; ?>" onClick="return confirm('Bạn có muốn xóa')">Xóa</a></td>
		<td><a href="xemdonhangct.php?Madonhang=<?php echo $row["Madonhang"]; ?>">Xem</a></td>
    </tr>
<?php 
}
?>
</table>
<a href="donhangctthem.php">Thêm</a>
<?php 
include("../Common/close.inc");
?>
</body>
</html>
