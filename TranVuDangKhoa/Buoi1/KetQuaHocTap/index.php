<?php
	include('xuly.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tính kết quả học tập</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="424" border="1">
    <tr>
      <td height="48" colspan="2" align="center">KẾT QUẢ HỌC TẬP</td>
    </tr>
    <tr>
      <td>HK I:</td>
      <td><input name="hk1" type="text" required="required" id="hk1" value="<?php echo $hk1; ?>" /></td>
    </tr>
    <tr>
      <td>HK II:</td>
      <td><input name="hk2" type="text" required="required" id="hk2" value="<?php echo $hk2; ?>" /></td>
    </tr>
    <tr>
      <td>Điểm trung bình:</td>
      <td><input name="tb" type="text" id="tb" value="<?php echo $tb; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Kết quả:</td>
      <td><input name="kq" type="text" id="kq" value="<?php echo $kq; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Xếp loại học lực:</td>
      <td><input name="hl" type="text" id="hl" value="<?php echo $hl; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Xem kết quả" /></td>
    </tr>
  </table>
</form>
</body>
</html>