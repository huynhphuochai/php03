<?php
	include("xuly.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm số lớn hơn</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="353" border="1">
    <tr>
      <td colspan="2" align="center"><strong>TÌM SỐ LỚN HƠN</strong></td>
    </tr>
    <tr>
      <td width="92">Số a:</td>
      <td width="245"><input type="number" name="soa" id="soa" required="required" min="1" value="<?php echo $soa; ?>" /></td>
    </tr>
    <tr>
      <td>Số b:</td>
      <td><input type="number" name="sob" id="sob" required="required" min="1" value="<?php echo $sob; ?>" /></td>
    </tr>
    <tr>
      <td>Max:</td>
      <td><input name="max" type="text" id="max" readonly="readonly"  value="<?php echo $max; ?>"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Tìm" /></td>
    </tr>
  </table>
</form>
</body>
</html>