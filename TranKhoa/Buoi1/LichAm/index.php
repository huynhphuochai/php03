<?php include('xuly.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xem lịch âm</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="555" border="1">
    <tr>
      <td height="43" colspan="3" align="center"><strong>XEM LỊCH ÂM</strong></td>
    </tr>
    <tr>
      <td width="142">Chọn năm:</td>
      <td width="229"><input name="nam" type="number" required="required" id="nam" min="1900" value="<?php echo $nam; ?>" /></td>
      <td width="162"><input type="submit" name="button" id="button" value="Hiển thị" /></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input name="chu" type="text" id="chu" value="<?php echo $chu; ?>" readonly="readonly" /></td>
    </tr>
  </table>
</form>
</body>
</html>