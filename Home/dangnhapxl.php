<?php 
	session_start();
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	include("../Common/open.inc");
	$query = "select * from tblkhachhang where username='$user' and password='$pass'";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)>0)
	{
		if(isset($_POST["chk"]))
		{
			setCookie("username",$user,time()+30*24*60*60);
			setCookie("password",$user,time()+30*24*60*60);
		}
		$_SESSION["username"] = $user;
		$row = mysqli_fetch_array($result);
		$_SESSION["HoTen"] = $row['HoTen'];
		$_SESSION["username"] = $row['username'];
		$_SESSION["MaKH"] = $row['MaKH'];
		$page = "trangchu.php";
	}
	else
		$page = "dangnhap.php";
		include("../Common/close.inc");
		header("Location:$page")
?>