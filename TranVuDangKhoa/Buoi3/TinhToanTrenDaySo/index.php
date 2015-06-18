<?php include('xuly.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tính toán trên dãy số</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>

<body>
<div class="container">
	<div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="677" height="303" border="1" class="table-condensed well table-bordered">
            <tr>
              <td colspan="2" align="center"><strong>TÍNH TOÁN TRÊN DÃY SỐ</strong></td>
            </tr>
            <tr>
              <td align="center">Số bắt đầu:</td>
              <td><input name="bd" type="number" id="bd" value="<?php echo $bd; ?>" class="form-control"/></td>
            </tr>
            <tr>
              <td align="center">Số kết thúc:</td>
              <td><input name="kt" type="number" id="kt" value="<?php echo $kt; ?>" class="form-control"/></td>
            </tr>
            <tr>
              <td align="center">Tính tổng:</td>
              <td><input name="tong" type="text" readonly="readonly" id="tong" value="<?php echo $tong; ?>" class="form-control"/></td>
            </tr>
            <tr>
              <td align="center">Tính tích:</td>
              <td><input name="tich" type="text" id="tich" readonly="readonly" value="<?php echo $tich; ?>" class="form-control"/></td>
            </tr>
            <tr>
              <td align="center">Tính tổng các số chẳn:</td>
              <td><input name="chan" type="text" id="chan" readonly="readonly" value="<?php echo $tongchan; ?>" class="form-control"/></td>
            </tr>
            <tr>
              <td align="center">Tính tổng các số lẻ:</td>
              <td><input name="le" type="text" id="le" readonly="readonly" value="<?php echo $tongle; ?>" class="form-control"/></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" class="btn-success" readonly="readonly" name="button" id="button" value="Tính" /></td>
            </tr>
          </table>
        </form>
    </div>
</div>
</body>
</html>