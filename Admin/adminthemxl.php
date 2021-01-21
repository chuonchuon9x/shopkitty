<?php 
$maadmin=$_POST["txtmaadmin"];
$HoTenAdmin=$_POST["txtten"];
$ngaysinh=$_POST["txtDate"];
$sdt=$_POST["txtsdt"];
$email=$_POST["txtemail"];
$username=$_POST["txtuser"];
$pass=$_POST["txtpass"];
$gt=$_POST["txtgt"];
$diachi=$_POST["txtdiachi"];
include("../common/open.inc");
$query="insert into tbladmin (MaAdmin,HoTenAdmin,ns,sdt,email, username,password,gt,DiaChi) values ('$maadmin','$HoTenAdmin','$ngaysinh','$sdt','$email','$username','$pass','$gt','$diachi')";
mysqli_query($con,$query);
include("../common/close.inc");
header("Location:adminlist.php");
?>
