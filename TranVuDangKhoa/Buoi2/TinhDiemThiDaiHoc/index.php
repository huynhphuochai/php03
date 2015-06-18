<?php
	include("xuly.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kết quả thi đại học</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <form id="form1" name="form1" method="post" action="">
      <table width="414" height="254"  class="table-condensed well">
        <tr>
          <td height="49" colspan="2" align="center"><strong>KẾT QUẢ THI ĐẠI HỌC</strong></td>
        </tr>
        <tr>
          <td width="109">Toán:</td>
          <td width="289"><input name="toan" class="form-control" type="number" required="required" id="toan" value="<?php echo $toan; ?>" /></td>
        </tr>
        <tr>
          <td>Lý:</td>
          <td><input name="ly" type="number" class="form-control" required="required" id="ly" value="<?php echo $ly; ?>" /></td>
        </tr>
        <tr>
          <td>Hóa:</td>
          <td><input name="hoa" type="number" required="required" class="form-control" id="hoa" value="<?php echo $hoa; ?>" /></td>
        </tr>
        <tr>
          <td>Điểm chuẩn:</td>
          <td><input name="diemchuan" type="number" class="form-control" required="required" id="diemchuan" value="<?php echo $diemchuan; ?>" /></td>
        </tr>
        <tr>
          <td>Tổng điểm:</td>
          <td><input name="tongdiem" type="text" id="tongdiem" class="form-control" value="<?php echo $tongdiem; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td>Kết quả:</td>
          <td><input name="ketqua" type="text" id="ketqua" class="form-control" value="<?php echo $ketqua; ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" class="btn-success" name="button" id="button" value="Xem kết quả" /></td>
        </tr>
      </table>
</form>
</div>
</body>
</html>
