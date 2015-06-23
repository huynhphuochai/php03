<?php 
	include("xuly.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm số nguyên tố</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="469" height="56"  align="center" class="table-condensed well">
            <tr>
              <td width="78" height="50">Nhập N=</td>
              <td width="270"><input name="n" type="number" required="required" class="form-control" id="n" value="<?php echo $n; ?>" /></td>
              <td width="99"><input type="submit" name="button" class="btn btn-info" id="button" value="Tìm số nguyên tố &lt; N" /></td>
            </tr>
          </table>
        </form>
        <marquee>
            <div class="text-primary">
                <?php 
                    echo $chuoi;
                ?>
            </div>
        </marquee>
    </div>
</div>
</body>
</html>