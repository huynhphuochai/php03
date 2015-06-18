<?php include('xuly.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đọc số</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>

<body>
<div class="container">
    <form id="form1" class="form-group" name="form1" method="post" action="">
      <table width="434" class="table table-hover well" height="142" border="0">
        <tr>
          <td colspan="3" align="center"><strong>ĐỌC SỐ</strong></td>
        </tr>
        <tr>
          <td align="center">Nhập số(0-&gt;9)</td>
          <td align="center">&nbsp;</td>
          <td width="177" align="center">Bằng chữ</td>
        </tr>
        <tr>
          <td width="159" align="center"><input name="so" class="form-control" type="number" required="required" id="so" max="9" min="0" value="<?php echo $so;?>" /></td>
          <td width="47" align="center"><input name="button" type="submit" class="btn-success" id="button" value="=&gt;" /></td>
          <td align="center"><input name="chu" type="text" class="form-control" id="chu" value="<?php echo $chu;?>" readonly="readonly" /></td>
        </tr>
      </table>
  </form>
</div>
</body>
</html>