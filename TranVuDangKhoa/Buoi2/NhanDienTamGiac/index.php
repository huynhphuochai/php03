<?php 
	include('xuly.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nhận diện tam giác</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
	<div class="row" align="center">
    <form id="form1" name="form1" method="post" action="">
      <table width="420" border="0" class="table-condensed well">
        <tr>
          <td colspan="3" align="center"><strong>Nhận diện tam giác</strong></td>
        </tr>
        <tr>
          <td width="104">Cạnh 1:</td>
          <td width="223"><input name="canha" type="number" required="required" class="form-control" id="canha" value="<?php echo $canha; ?>" /></td>
          <td width="71">(cm)</td>
        </tr>
        <tr>
          <td>Cạnh 2:</td>
          <td><input name="canhb" required="required" class="form-control" type="number" id="canhb" value="<?php echo $canhb; ?>" /></td>
          <td>(cm)</td>
        </tr>
        <tr>
          <td>Cạnh 3:</td>
          <td><input name="canhc" type="number" required="required" class="form-control" id="canhc" value="<?php echo $canhc; ?>" /></td>
          <td>(cm)</td>
        </tr>
        <tr>
          <td>Loại tam giác:</td>
          <td colspan="2"><input name="tamgiac" readonly="readonly" class="form-control" type="text" id="tamgiac" value="<?php echo $tamgiac; ?>" /></td>
        </tr>
        <tr>
          <td colspan="3" align="center"><input type="submit" name="button" class="btn-success" id="button" value="Nhận dạng" /></td>
        </tr>
      </table>
    </form>
    </div>
</div>
</body>
</html>