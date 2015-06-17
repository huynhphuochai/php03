<?php
	include("xuly.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tính tiền điện</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="453" border="1">
    <tr>
      <td colspan="2" align="center"><strong>HÓA ĐƠN TIỀN ĐIỆN</strong></td>
    </tr>
    <tr>
      <td>Tên chủ hộ:</td>
      <td><input name="chuho" type="text" id="chuho" value="<?php echo $chuho; ?>" required="required" /></td>
    </tr>
    <tr>
      <td>Chỉ số cũ:</td>
      <td><input name="so_cu" type="number" id="so_cu" value="<?php echo $so_cu; ?>" required="required" min="0"/></td>
    </tr>
    <tr>
      <td>Chỉ số mới:</td>
      <td><input name="so_moi" type="number" id="so_moi" value="<?php echo $so_moi; ?>" required="required" min="1"/></td>
    </tr>
    <tr>
      <td>Đơn giá:</td>
      <td><input name="don_gia" type="text" id="don_gia" value="<?php echo $dongia; ?>" required="required" min="100" /></td>
    </tr>
    <tr>
      <td>Số tiền thanh toán:</td>
      <td><input name="thanh_toan" type="text" id="thanh_toan" value="<?php echo $thanh_tien; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Thanh toán" /></td>
    </tr>
  </table>
</form>
</body>
</html>