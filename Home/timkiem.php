 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

.box{
  width: 300px;
  height: 50px;
  border: 1px solid #FFFFFF;
  float:right;
}

.container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
} 

.container-1 input#search{
  width: 300px;
  height: 50px;
  background: #eaa5c1;
  border: none;
  font-size: 10pt;
  float: left;
  color: #63717f;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}

.container-1 .icon{
	position: absolute;
	top: -11px;
	margin-left: 17px;
	margin-top: 17px;
	z-index: 1;
	color: #4f5b66;
	left: -13px;
}
</style>
</head>

<body>
<div class="box">
  <div class="container-1">
    <span class="icon"><i class="fa fa-search"><img src="../images/icon-search.png" width="39" height="39" /></i></span>
    <input type="search" name="TenPK" id="search" placeholder="Nhap Ten San Pham" value="<?php echo($TenPK);?>" />
  </div>
</div>
</body>
</html>
