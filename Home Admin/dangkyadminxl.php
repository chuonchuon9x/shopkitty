<?php 
$sdt=$_POST["txtsdt"];
$username=$_POST["txtuser"];
$pass=$_POST["txtpass"];
include("../Common/open.inc");
$query="insert into tbladmin (sdt,username,password) values ('$sdt','$username','$pass')";
mysqli_query($con,$query);
include("../Common/close.inc");
header("Location:homeadmin.php");
?>
