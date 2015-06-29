<?php
	include('xuly.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Diện tích hình chữ nhật</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="331" height="129" border="1">
    <tr>
      <td colspan="2" align="center"><strong>DIỆN TÍCH HÌNH CHỮ NHẬT</strong></td>
    </tr>
    <tr>
      <td>Chiều dài:</td>
      <td><label for="chieudai"></label>
      <input type="number" name="chieudai" id="chieudai" required="required" min = 0 value="<?php echo $chieudai;?>" /></td>
    </tr>
    <tr>
      <td>Chiều rộng:</td>
      <td><label for="chieurong"></label>
      <input type="number" name="chieurong" id="chieurong" required="required" min = 0 value="<?php echo $chieurong; ?>"/></td>
    </tr>
    <tr>
      <td>Diện tích:</td>
      <td><label for="textfield3"></label>
      <input name="textfield3" type="text" id="textfield3" readonly="readonly" value="<?php echo $dientich;?>"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Diện tích hình chữ nhật" /></td>
    </tr>
  </table>
</form>
</body>
</html>