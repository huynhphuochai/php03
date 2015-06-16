<?php
	include('xuly.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../../../libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
<div class="row" align="center">
  <form id="form1" name="form1" method="post" action="" class="form-group">
    <table class="table-condensed well">
      <tr>
        <td colspan="2">TÍNH GIỜ</td>
      </tr>
      <tr>
        <td>Giờ</td>
        <td><input type="number" name="gio" value="<?php echo $gio;?>" class="form-control" min="0" max="24" required="required" /></td>
      </tr>
      <tr>
        <td colspan="2"><input name="button" type="submit" class="btn-primary" id="button" value="Tính" /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="text" name="ketqua" value = "<?php echo $ketqua;  ?>" class="form-control" /></td>
      </tr>
    </table>
    <p class="form-horizontal">&nbsp;</p>
  </form>
	</div>
</div>
</body>
</html>