<?php 
	include('xuly.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm kiếm chuỗi</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
	<div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="454" class="table-condensed well">
            <tr>
              <td colspan="2" align="center"><strong>TÌM TỪ TRONG CHUỖI</strong></td>
            </tr>
            <tr>
              <td>Chuỗi:</td>
              <td><input name="chuoi" type="text" required="required" class="form-control" id="chuoi" value="<?php echo $chuoi; ?>" /></td>
            </tr>
            <tr>
              <td>Từ cần tìm:</td>
              <td><input name="tu" type="text" id="tu" required="required" class="form-control" value="<?php echo $tu; ?>" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="button" class="btn btn-primary" id="button" value="Tìm kiếm" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input name="ketqua" class="form-control" readonly="readonly" type="text" id="ketqua" value="<?php echo $kq; ?>" /></td>
            </tr>
          </table>
        </form>
    </div>
</div>
</body>
</html>