<?php
	include("xuly.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cạnh huyền tam giác vuông</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="388" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center"><strong>CẠNH HUYỀN TAM GIÁC VUÔNG</strong></td>
    </tr>
    <tr>
      <td>Cạnh a:</td>
      <td><input type="number" name="canha" id="canha" min=1 required="required" value="<?php echo $canha;?>"/></td>
    </tr>
    <tr>
      <td>Cạnh b:</td>
      <td><input type="number" name="canhb" id="canhb" min=1 required="required" value="<?php echo $canhb; ?>"/></td>
    </tr>
    <tr>
      <td>Cạnh huyền:</td>
      <td><input name="canhhuyen" type="text" id="canhhuyen" readonly="readonly" value="<?php echo $canhhuyen; ?>"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Tính" /></td>
    </tr>
  </table>
</form>
</body>
</html>