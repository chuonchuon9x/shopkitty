<?php
require_once('kiemtrakhachhang.php');
if(isset($_GET['button_submit']) && !empty($_GET['mat_khau_cu']) && !empty($_GET['mat_khau_moi']) && !empty($_GET['re_mat_khau_moi'])){
	include("../Common/open.inc");
	$mat_khau_cu = $_GET['mat_khau_cu'];

	$MaKH = $_SESSION['MaKH'];
	$query = "select password from tblkhachhang where MaKH = '$MaKH'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);

	$mat_khau_cu_cu = $row['password'];
	if($mat_khau_cu==$mat_khau_cu_cu){
		$mat_khau_moi    = $_GET['mat_khau_moi'];
		$re_mat_khau_moi = $_GET['re_mat_khau_moi'];
		if($mat_khau_moi==$re_mat_khau_moi){
			$query = "update tblkhachhang set password = '$mat_khau_moi' where MaKH = '$MaKH'";
			mysqli_query($con,$query);
			mysqli_close($con);
			//header thành công 
			echo "Đổi mật khẩu thành công";
			header("Location:thongtinkhachhangCT.php");
		}
		else{
			//header thất bại 
			echo "Mật khẩu mới không khớp";
		}
	}
	else{
		//header thất bại 
		echo "Mật khẩu cũ không khớp";
	}
}
else{
	//header thất bại
	echo "Không được để trống"; 
}
