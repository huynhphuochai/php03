<?php include('xuly.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tổng dãy số</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>

<body>
<div class="container">
	<div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="592" height="176" class="table-condensed well">
            <tr>
              <td colspan="2" align="center"><strong>TÍNH TOÁN TRÊN DÃY SỐ</strong></td>
            </tr>
            <tr>
              <td width="142">Dãy số:</td>
              <td width="438"><label for="dayso"></label>
              <input name="dayso" type="text" class="form-control" id="dayso" required="required" value="<?php echo $dayso; ?>" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="button" id="button" value="Tính" /></td>
            </tr>
            <tr>
              <td>Tổng:</td>
              <td><label for="tong"></label>
              <input name="tong" type="text" id="tong" class="form-control" readonly="readonly" value="<?php echo $tong; ?>" /></td>
            </tr>
            <tr>
              <td>Trung bình cộng:</td>
              <td><label for="tbc"></label>
              <input name="tbc" type="text" id="tbc" class="form-control" readonly="readonly" value="<?php echo $tbc; ?>" /></td>
            </tr>
            <tr>
              <td>Tích:</td>
              <td><label for="tich"></label>
              <input name="tich" type="text" id="tich" class="form-control" readonly="readonly" value="<?php echo $tich; ?>" /></td>
            </tr>
          </table>
        </form>
	</div>
</div>
</body>
</html>