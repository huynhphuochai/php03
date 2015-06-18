<?php 
	include('xuly.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Số chia hết cho A và B</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
<div class="row" align="center">
<form id="form1" name="form1" method="post" action="">
  <table class="table-condensed well table-bordered">
    <tr>
      <td colspan="2" align="center"><strong>SỐ CHIA HẾT CHO A VÀ B</strong></td>
    </tr>
    <tr>
      <td width="224">Nhập N:</td>
      <td width="368"><input name="n" type="number" class="form-control" required="required" id="n" value="<?php echo $n; ?>" /></td>
    </tr>
    <tr>
      <td>Nhập A:</td>
      <td><input name="a" type="number" class="form-control" id="a" value="<?php echo $a; ?>" /></td>
    </tr>
    <tr>
      <td>Nhập B:</td>
      <td><input name="b" type="number" id="b" class="form-control" value="<?php echo $b; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" class="btn-success" id="button" value="Các số &lt;= N chia hết cho A và B" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="kq" type="text" id="kq" class="form-control" value="<?php echo $kq; ?>"  readonly="readonly"/></td>
    </tr>
  </table>
</form>
</div>
</div>
</body>
</html>