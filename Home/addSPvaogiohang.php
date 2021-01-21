<?php
session_start();
if(isset($_GET["MaPK"]))
{
	$maSp=$_GET["MaPK"];
	if(isset($_SESSION["gioHang"]))
	{
		//bat dau tu lan thu 2
		if(isset($_SESSION["gioHang"][$maSp]))
		{
			//da ton tai san pham nay tren gio hang
			$_SESSION["gioHang"][$maSp]++;	
		}else
		{
			//san pham nay chua co trong gio hang
			$_SESSION["gioHang"][$maSp]=1;	
		}
	}else
	{
		//lan dau tien them san pham vao gio hang
		//tao gio hang
		$_SESSION["gioHang"]=array();
		//nem san pham vao gio hang
		$_SESSION["gioHang"][$maSp]=1;//lan dau thi so luong la 1
	}
	header("Location:trangchu.php");	
}else
{
	header("Location:trangchu.php");	
}
?>