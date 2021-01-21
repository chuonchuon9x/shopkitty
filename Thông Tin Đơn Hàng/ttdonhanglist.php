<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Đơn Hàng List</title>
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
$query="select * from tblthongtindonhang join tblkhachhang on tblthongtindonhang.MaKH=tblkhachhang.MaKH";
$result = mysqli_query($con,$query);
?>
<table cellspacing="0" border="1" align="center" width="60%" >
	<tr>
    	<th>Mã Đơn Hàng</th>
        <th>Tên Khách Hàng</th>
		<th>Ngày Mua Hàng</th>
		<th>Địa Chỉ Vận Chuyển</th>
		<th>Tình Trạng Đơn Hàng</th>
		<th>Lựa Chọn</th>
		<th>Lựa Chọn</th>
    </tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
    <tr>
    	<td><?php echo $row["Madonhang"]; ?></td>
        <td><?php echo $row["HoTen"]; ?></td>
		<td><?php echo $row["Ngaymuahang"]; ?></td>
		<td><?php echo $row["Diachivanchuyen"]; ?></td>
		<td><?php if($row["Tinhtrangdonhang"]=='1'){
						echo "Đang chờ duyệt";
					}
					else if($row["Tinhtrangdonhang"]=='2'){
						echo "Đã duyệt";
					}
					else if($row["Tinhtrangdonhang"]=='3'){
						echo "Đã huỷ";
					}
					?></td>
		<td>
			<?php 
			if($row["Tinhtrangdonhang"]=='1'){
			?>
			<a href="tdttdonhang.php?Madonhang=<?php echo $row['Madonhang'] ?>&amp;Tinhtrangdonhang=2">✔</a>
			<a href="tdttdonhang.php?Madonhang=<?php echo $row['Madonhang'] ?>&amp;Tinhtrangdonhang=3">✘</a>
			<?php 
			}
			?>
		</td>
		<td><a href="ttdonhangsua.php?Madonhang=<?php echo $row["Madonhang"]; ?>" >Sửa</a></td>
    </tr>
<?php 
}
?>
</table>
<a href="ttdonhangthem.php">Thêm</a>

<?php 
include("../Common/close.inc");
?>
</body>
</html>
