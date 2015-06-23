<?php include("xuly.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thây thế từ trong chuỗi</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
	<div class="row" align="center">
        <form id="form1" name="form1"  method="post" action="">
          <table width="562" class="table-condensed well">
            <tr>
              <td colspan="2" align="center"><strong>THÂY THẾ TỪ TRONG CHUỖI</strong></td>
            </tr>
            <tr>
              <td width="99">Chuỗi:</td>
              <td width="451"><input name="chuoi" type="text" required="required" class="form-control" id="chuoi" value="<?php echo $chuoi; ?>" /></td>
            </tr>
            <tr>
              <td>Từ gốc:</td>
              <td><input name="goc" type="text" id="goc" required="required" class="form-control" value="<?php echo $goc; ?>" /></td>
            </tr>
            <tr>
              <td>Từ thây thế:</td>
              <td><input name="thaythe" type="text" id="thaythe" required="required" class="form-control" value="<?php echo $thaythe; ?>" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="button" class="btn btn-primary" id="button" value="Thây thế" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input name="kq" type="text" class="form-control" readonly="readonly" id="kq" value="<?php echo $kq; ?>" /></td>
            </tr>
          </table>
        </form>
    </div>
 </div>
</body>
</html>