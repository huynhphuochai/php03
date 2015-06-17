<?php
	include('xuly.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chào theo giờ</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="row" align="center">
        <form id="form1" name="form1" class="form-horizontal" method="post" action="">
          <table  border="1" class="well table-condensed">
            <tr>
              <td colspan="2" align="center"><strong>CHÀO THEO GIỜ</strong></td>
            </tr>
            <tr>
              <td>Nhập giờ:</td>
              <td><input name="gio" type="number" required="required" class="form-control" id="gio" max="24" min="0" value="<?php echo $gio; ?>" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="button" id="button" class="btn-danger" value="Submit" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="text" name="gio2" id="gio2" readonly="readonly" class="form-control" value="<?php echo $ketqua; ?>" /></td>
            </tr>
          </table>
          <p class="form-horizontal">&nbsp;</p>
        </form>
    </div>
</div>
</body>
</html>