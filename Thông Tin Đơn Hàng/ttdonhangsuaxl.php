<?php 
$Madonhang=$_POST["madh"];
$MaKH=$_POST["makh"];
$Ngaymuahang=$_POST["txtDate"];
$Diachivanchuyen=$_POST["dcvc"];
$Tinhtrangdonhang=$_POST["ttdh"];
include("../Common/open.inc");
$query="update tblthongtindonhang set MaKH='$MaKH',Ngaymuahang='$Ngaymuahang',Diachivanchuyen='$Diachivanchuyen',Tinhtrangdonhang='$Tinhtrangdonhang' where Madonhang='$Madonhang'";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:ttdonhanglist.php");
?>
