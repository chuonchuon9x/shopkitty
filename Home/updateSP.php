<?php
session_start();
if(isset($_POST["arrSl"]))
{
	$arrSl=array();
	$arrSl=	$_POST["arrSl"];
	$gioHang=array();
	$gioHang=$_SESSION["gioHang"];
	$dem=0;
	foreach($gioHang as $MaPK=>$SoLuong)
	{
		$_SESSION["gioHang"][$MaPK]=$arrSl[$dem];
		$dem++;	
		
	}
}
header("Location:xemGioHang.php");
?>