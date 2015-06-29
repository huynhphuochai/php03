<?php include("xuly.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>USC lớn nhất BSC nhỏ nhất</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
	<div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="618" height="179" class="table-condensed well">
            <tr>
              <td colspan="2" align="center"><strong>ƯỚC SỐ CHUNG LỚN NHẤT và BỘI SỐ CHUNG NHỎ NHẤT</strong></td>
            </tr>
            <tr>
              <td width="129">Số A:</td>
              <td width="473"><input name="a" type="number" required="required" class="form-control" min="1" id="a" value="<?php echo $a; ?>" /></td>
            </tr>
            <tr>
              <td>Số B:</td>
              <td><input name="b" type="number" id="b" required="required" class="form-control" min="1" value="<?php echo $b; ?>" /></td>
            </tr>
            <tr>
              <td>USC lớn nhất:</td>
              <td><input name="uoc" type="text" id="uoc" class="form-control" value="<?php echo $uoc; ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td>BSC nhỏ nhất:</td>
              <td><input name="boi" type="text" id="boi" class="form-control" value="<?php echo $boi; ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="button" id="button" value="Tìm" /></td>
            </tr>
          </table>
        </form>
	</div>
</div>
</body>
</html>