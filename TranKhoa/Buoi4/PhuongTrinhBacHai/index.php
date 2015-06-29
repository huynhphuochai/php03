<?php include("xuly.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giải phương trình bậc hai</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
	<div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="811" height="145" border="0" class="table-condensed table-bordered well">
            <tr>
              <td height="38" colspan="7" align="center"><strong>GIẢI PHƯƠNG TRÌNH BẬT HAI</strong></td>
            </tr>
            <tr>
              <td width="111">Phương trình:</td>
              <td width="170"><input name="a" type="number" class="form-control" required="required" id="a" value="<?php echo $a; ?>" /></td>
              <td width="40">x<sup>2</sup> +</td>
              <td width="171"><input name="b" type="number" class="form-control" required="required" id="b" value="<?php echo $b; ?>" /></td>
              <td width="34">+ x</td>
              <td width="169"><input name="c" type="number" class="form-control" required="required" id="c" value="<?php echo $c; ?>" /></td>
              <td width="70">= 0</td>
            </tr>
            <tr>
              <td>Nghiệm:</td>
              <td colspan="6"><input name="nghiem" type="text" class="form-control" id="nghiem" value="<?php echo $nghiem;?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td colspan="7" align="center"><input type="submit" class="btn btn-primary" name="button" id="button" value="Tính nghiệm" /></td>
            </tr>
          </table>
        </form>
	</div>
</div> 
</body>
</html>