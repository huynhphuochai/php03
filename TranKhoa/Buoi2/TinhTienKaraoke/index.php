<?php
	include('xuly.php');
 	$bd = 0;
	$kt = 0;
	if(isset($_POST['GioBatDau']))
		$bd = $_POST['GioBatDau'];
	if(isset($_POST['GioKetThuc']))
		$kt = $_POST['GioKetThuc'];
	$thanhtien = TinhTienGio($bd,$kt);
	$thanhtien = number_format($thanhtien,0, ',', '.').' VNĐ'; 	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tính tiền karaoke</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
<div class="row" align="center">
<form id="form1" name="form1" method="post" action="" class="form-group">
  <table width="447" border="0" cellpadding="0" cellspacing="5" class="table table-hover well">
    <tr>
      <td height="46" colspan="3"><strong>TÍNH TIỀN KARAOKE</strong></td>
    </tr>
    <tr>
      <td>Giờ bắt đầu:</td>
      <td colspan="2"><input name="GioBatDau" type="number" class="form-control" required="required" id="GioBatDau" max="23" min="10" placeholder="Từ 10 đến 17 giờ" value="" size="40"/></td>
    </tr>
    <tr>
      <td>Giờ kết thúc:</td>
      <td colspan="2"><input name="GioKetThuc" type="number" class="form-control" placeholder="Từ 17 đến 24 giờ" required="required" id="ketthuc" max="24" min="11" value="" size="40" /></td>
    </tr>
    <tr>
      <td>Thanh toán:</td>
      <td colspan="2"><input name="thanhtoan" type="text" id="thanhtoan" class="form-control" value="<?php echo $thanhtien;?>" size="40" readonly="readonly" /></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="right"><input type="submit" name="button2" class="btn-success" id="button2" value="Thanh toán" /></td>
      <td align="left"><input type="submit" name="button" class="btn-info" id="button" value="Nhập lại" /></td>
    </tr>
  </table>
</form>
</div>
</div>
</body>
</html>