<?php 
	session_start();
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	include("../Common/open.inc");
	$query = "select * from tbladmin where username='$user' and password='$pass'";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)>0)
	{
		if(isset($_POST["chk"]))
		{
			setCookie("username",$user,time()+30*24*60*60);
			setCookie("password",$user,time()+30*24*60*60);
		}
		$_SESSION["username"] = $user;
		$page = "homeadmin.php";
	}
	else
		$page = "loginadmin.php";
		include("../Common/close.inc");
		header("Location:$page")
?>