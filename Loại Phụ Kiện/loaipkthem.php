<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loại Phụ Kiện Insert</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script language="javascript">
	function insertloai()
	{
		var txttenloai=document.getElementById("txttenloai");
		var tenloai=document.getElementById("tenloai");
		if(txttenloai.value.length=="")
		 {
			txttenloai.style.color="#FF0000";
			tenloai.style.color="#FF0000";
			tenloai.innerHTML="Vui lòng nhập tên ";
			txttenloai.focus();
			return false;
		 }
		else 
		 {
			txttenloai.style.color="";
			tenloai.innerHTML="";
		 }
	return true;		
	}		 
</script>
</head>

<body>
<div align="center">
	<a href="../Home Admin/homeadmin.php">
		<img src="../images/LOGO Hello Kitty.png"/>					
	</a>
</div>
<form action="loaipkthemxl.php" method="post">
<table border="1" cellspacing="0">
<tr>
		<th>Mã Loại</th>
		<th><input type="text" name="maloai" style="width:80%" readonly="readonly" /></th>
	</tr>
		<tr>
		<th>Tên Loại</th>
		<th><input type="text" name="tenloai" style="width:80%" id="txttenloai" placeholder="Tên Loại..."/><div id="tenloai"></div></th>
	</tr>
	<tr>
		<th></th>
		<th><input type="submit" value="insert" style="width:50%;" onclick="return insertloai()"/></th>
	</tr>
</table>
</form>
</body>
</html>
