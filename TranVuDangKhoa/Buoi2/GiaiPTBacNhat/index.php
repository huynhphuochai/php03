<?php
	include('xuly.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giải phương trình bậc nhất</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
</head>

<body>
<div class="container">
    <form id="form1" name="form1" method="post" action="">
      <table width="746" height="123" border="1" class="table-condensed well">
        <tr>
          <td colspan="5" align="center"><strong>GIẢI PHƯƠNG TRÌNH BẬC NHẤT</strong></td>
        </tr>
        <tr>
          <td width="195" height="23">Phương trình:</td>
          <td width="153"><input name="a" type="number" class="form-control" required="required" id="a" value="<?php echo $a; ?>" size="15" /></td>
          <td width="30"><strong>x </strong>+</td>
          <td width="151"><input name="b" type="number" class="form-control" required="required" id="b" value="<?php echo $b;?>" size="15" /></td>
          <td width="183">= 0</td>
        </tr>
        <tr>
          <td height="23">Nghiệm:</td>
          <td colspan="4"><input name="x" type="text" id="x" class="form-control" value="<?php echo $x; ?>" size="47" readonly="readonly" /></td>
        </tr>
        <tr>
          <td height="23" colspan="5" align="center"><input type="submit" class="btn-success" name="button" id="button" value="Giải phương trình" /></td>
        </tr>
      </table>
    </form>
</div>
</body>
</html>