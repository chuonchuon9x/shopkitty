<?php 
$Madonhang=$_POST["dh"];
$MaPK=$_POST["pk"];
$Soluong=$_POST["sl"];
$Giapk=$_POST["txtgiapk"];
include("../Common/open.inc");
$query="insert into tbldonhangchitiet (Madonhang,MaPK,Soluong,GiaPK) values ('$Madonhang','$MaPK','$Soluong','$Giapk')";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:donhangctlist.php");
?>
