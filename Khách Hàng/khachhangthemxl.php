<?php 
$MaKH=$_POST["khachhang"];
$HoTen=$_POST["ten"];
$ngaysinh=$_POST["txtDate"];
$sdt=$_POST["sdt"];
$email=$_POST["email"];
$username=$_POST["tk"];
$pass=$_POST["mk"];
$diachi=$_POST["dc"];
$gt=$_POST["gt"];
include("../Common/open.inc");
$query="insert into tblkhachhang (MaKH,HoTen,ns,sdt,email,username,password,DiaChi,gt) values ('$MaKH','$HoTen','$ngaysinh','$sdt','$email','$username','$pass','$diachi','$gt')";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:khachhanglist.php");
?>
