<?php
require_once('kiemtrakhachhang.php');
if(isset($_GET['button_submit']) && !empty($_GET['HoTen']) && !empty($_GET['sdt']) && !empty($_GET['DiaChi'])){
	require_once('../Common/open.inc');

	//lấy mã hóa đơn lớn nhất + 1 (tức là không trùng với hóa đơn nào)
	$query      = "select max(Madonhang) from tblthongtindonhang";
	$result     = mysqli_query($con,$query);
	$row        = mysqli_fetch_array($result);

	//nếu tồn tại mã hóa đơn thì tăng lên 1, không thì mã hóa đơn là 1
		if(isset($row['max(Madonhang)'])){
			$ma_hoa_don = $row['max(Madonhang)']+1;
		}
		else{
			$ma_hoa_don = 1;
		}

	//lấy thông tin người nhận
	$HoTen     = $_GET['HoTen'];
	$sdt     = $_GET['sdt'];
	$DiaChi = $_GET['DiaChi'];

	//lấy mã khách hàng đang đăng nhập
	$MaKH = $_SESSION['MaKH'];

		$query = "insert into tblthongtindonhang(`Madonhang`, `MaKH`, `Diachivanchuyen`, `Tinhtrangdonhang`, `HoTen`, `sdt`)
		values ('$ma_hoa_don','$MaKH','$DiaChi','1','$HoTen','$sdt')";
		mysqli_query($con,$query);
		foreach($_SESSION['gioHang'] as $MaPK => $Soluong){
			$query      = "select GiaPK from tblphukien where MaPK = '$MaPK'"; 
			$result     = mysqli_query($con,$query);
			$row        = mysqli_fetch_array($result);
			$GiaPK = $row['GiaPK'];
			$query    = "insert into tbldonhangchitiet(`Madonhang`, `MaPK`, `Soluong`, `GiaPK`)
			values ('$ma_hoa_don','$MaPK','$Soluong','$GiaPK')";
			mysqli_query($con,$query);
		}
			unset($_SESSION['gioHang']);
			mysqli_close($con);
			//header thành công
			//echo "Đặt hàng thành công";
			header("Location:trangchu.php");
		}
		else{
			//header thất bại
			//echo "Đặt hàng thất bại";
			header("Location:xemGioHang.php");
		}
?>