<?php
	include('xuly.php');
	$thang = 1;
	$nam = 1900;
	if(isset($_POST['thang']))
		$thang = $_POST['thang'];
	if(isset($_POST['nam']))
		$nam = $_POST['nam'];
	$ngay = TinhNgayTrongThang($thang,$nam);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tính ngày trong tháng</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="716" height="115" border="1">
    <tr>
      <td colspan="4" align="center"><strong>TÍNH SỐ NGÀY TRONG THÁNG</strong></td>
    </tr>
    <tr>
      <td width="165">Chọn tháng và năm:</td>
      <td width="149"><input name="thang" type="number" required="required" id="thang" max="12" min="1" value="<?php echo $thang; ?>" /></td>
      <td width="157"><input name="nam" type="number" required="required" id="nam" max="2015" min="1900" value="<?php echo $nam; ?>" /></td>
      <td width="118"><input type="submit" name="button" id="button" value="Tính" /></td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input name="ngay" type="text" id="ngay" value="<?php echo $ngay; ?>" readonly="readonly" /></td>
    </tr>
  </table>
</form>
</body>
</html>