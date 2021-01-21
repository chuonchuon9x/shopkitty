<?php 
$MaPK=$_POST["mapk"];
$TenPK=$_POST["tenpk"];
$mota=$_POST["FCKeditor1"];
$HinhAnh=$_POST["txthinhminhhoa"];
$SoLuong=$_POST["soluong"];
$GiaPK=$_POST["giapk"];
$MaLoai=$_POST["maloai"];
include("../Common/open.inc");
$query="insert into tblphukien (MaPK,TenPK,MoTa,HinhAnh,SoLuongPK,GiaPK,MaLoai) values ('$MaPK','$TenPK','$mota','$HinhAnh','$SoLuong','$GiaPK','$MaLoai')";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:phukienlist.php");
?>
