<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("../Include/Connection.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin</title>
<link href="../Css/Style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFEFD5">
  <?php include("../Include/Top_admin.php"); ?>
  <tr>
    <td width="156"  valign="top" bgcolor="#FFFFFF">
	 <?php include("../Include/Menu_left_admin.php"); ?>
    </td>
    <td width="624" valign="top"><br>
        <form name="frmaddproduct" method="post" action="Process_Add_Item.asp">
          <table width="100%"  border="0" cellpadding="0" cellspacing="0" class="noidung">
            <tr>
              <td colspan="2" align="center" valign="middle" class="td"> Thêm sản phẩm
                  <hr>
              </td>
            </tr>
            <tr>
              <td width="20%" align="right">Tên sản phẩm &nbsp; </td>
              <td width="80%">
			  <input name="txtItem" type="text" id="txtItem" size="50" onkeyup=telexingVietUC(this,event);>
			  </td>
            </tr>
            <tr>
              <td align="right">Dung lượng  &nbsp; </td>
              <td><input name="txtcapacity" type="text" id="txtcapacity" size="10"></td>
            </tr>
			<tr>
              <td align="right">Nồng độ  &nbsp; </td>
              <td><input name="txtLevelofAlcohol" type="text" id="txtLevelofAlcohol" size="10"></td>
            </tr>
            <tr>
              <td align="right">Rượu mới   &nbsp; </td>
              <td>&nbsp;&nbsp;
                <input name="special" type="radio" value="1">
              Yes 
              <input name="special" type="radio" value="0" checked>
              No</td>
            </tr>
            <tr>
              <td align="right">Hot &nbsp; </td>
              <td>&nbsp;&nbsp;

                <input name="Hot" type="radio" value="1">
				Yes
				<input name="Hot" type="radio" value="0" checked>
				No </td>
							</tr>
							<tr>
							  <td align="right">Ưu thích  &nbsp; </td>
							  <td>&nbsp;&nbsp; 
								<input name="Flavor" type="radio" value="1">
				Yes
				<input name="Flavor" type="radio" value="0" checked>
				No </td>
            </tr>
            <tr>
              <td align="right">Miêu tả  &nbsp; </td>
              <td>
			  	<textarea name="mota" cols="50" rows="6">
				Mo ta
				</textarea>
			  </td>
            </tr>
            <tr>
              <td align="right">Giá  &nbsp; </td>
              <td><input name="txtprice" type="text" id="txtprice" size="10">
			  </td>
            </tr>
            <tr>
              <td align="right">Dòng sản phẩm &nbsp; </td>
              <td>
			 	&nbsp;
              </td>
            </tr>
			<tr>
              <td align="right">Ảnh minh hoạ&nbsp;</td>
              <td>
			  	<input name="txtanh" type="text" size="40">
				<input name="cmdUpload" type="button" value="Upload" onClick="mocs();">
			  </td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td><input name="cmdAdd" type="submit" id="cmdAdd" value="   Add    ">
                  <input name="cmdSubmit" type="reset" id="cmdSubmit" value="  Reset  "></td>
            </tr>
          </table>
      </form></td>
  </tr>
  <tr bgcolor="#FF9966">
    <td height="89" colspan="2" align="center" valign="middle" class="bottom">
	<!--Bottom-->
       <?php include("../Include/MenuBottom.php"); ?>
    </td>
  </tr>
</table>
</body>
</html>
<?php include("../Include/CloseConnection.php"); ?>