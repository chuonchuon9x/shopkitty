<?php 
$Madonhang=$_POST["dh"];
$MaPK=$_POST["pk"];
$Soluong=$_POST["soluong"];
$GiaPK=$_POST["txtgiapk"];
include("../Common/open.inc");
$query="update tbldonhangchitiet set MaPK='$MaPK',Soluong='$Soluong',txtgiapk='$GiaPK' where Madonhang='$Madonhang'";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:donhangctlist.php");
?>
