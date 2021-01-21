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

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8 " />
<title>Admin List</title>
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
$result = mysqli_query($con,"select * from tbladmin");
?>
<table cellspacing="0" border="1" align="center" width="60%" >
	<tr>
    	<th>Mã Admin</th>
        <th>Họ Tên Admin</th>
        <th>Ngày Sinh</th>
        <th>SĐT</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>	
		<th>Giới Tính</th>
		<th>Địa Chỉ</th>
		<th>Lựa Chọn</th>
		<th>Lựa Chọn</th>
    </tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
    <tr>
    	<td><?php echo $row["MaAdmin"]; ?></td>
        <td><?php echo $row["HoTenAdmin"]; ?></td>
		<td><?php echo $row["ns"]; ?></td>
		<td><?php echo $row["sdt"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["username"]; ?></td>
		<td><?php echo $row["password"]; ?></td>
		<td><?php if($row["gt"]=='0'){
						echo "Nam";
					}
					else if($row["gt"]=='1'){
						echo "Nữ";
					}
					?></td>
		<td><?php echo $row["DiaChi"]; ?></td>
        <td><a href="adminsua.php?MaAdmin=<?php echo $row["MaAdmin"]; ?>" >Sửa</a></td>
        <td><a href="adminxoa.php?MaAdmin=<?php echo $row["MaAdmin"]; ?>" onClick="return confirm('Bạn có muốn xóa')">Xóa</a></td>
    </tr>
<?php 
}
?>
</table>
<a href="adminthem.php">Thêm</a>
<?php 
include("../Common/close.inc");
?>
</body>
</html>
