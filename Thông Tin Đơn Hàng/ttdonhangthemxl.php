<?php 
$Madonhang=$_POST["dh"];
$MaKH=$_POST["kh"];
$Ngaymuahang=$_POST["txtDate"];
$Diachivanchuyen=$_POST["dcvc"];
$Tinhtrangdonhang=$_POST["ttdh"];
include("../Common/open.inc");
$query="insert into tblthongtindonhang (Madonhang,MaKH,Ngaymuahang,Diachivanchuyen,Tinhtrangdonhang) values ('$Madonhang','$MaKH','$Ngaymuahang','$Diachivanchuyen','$Tinhtrangdonhang');
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:ttdonhanglist.php");
?>
