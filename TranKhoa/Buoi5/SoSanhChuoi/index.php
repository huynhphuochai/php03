<?php include('xuly.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>So sánh chuỗi</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
	<div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="545" height="203" class="table-condensed well">
            <tr>
              <td colspan="2" align="center"><strong>SO SÁNH HAI CHUỖI</strong></td>
            </tr>
            <tr>
              <td width="117">Chuỗi 1:</td>
              <td width="412"><input name="ch_1" required="required" class="form-control" type="text" id="ch_1" value="<?php echo $ch_1; ?>" /></td>
            </tr>
            <tr>
              <td>Chuỗi 2:</td>
              <td><input name="ch_2" type="text" id="ch_2" class="form-control" required="required" value="<?php echo $ch_2; ?>" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="button" id="button" value="So sánh" /></td>
            </tr>
            <tr>
              <td colspan="2"><input name="ketqua" class="form-control" type="text" readonly="readonly" id="ketqua" value="<?php echo $ketqua; ?>" /></td>
            </tr>
          </table>
        </form>
	</div>
</div>
</body>
</html>