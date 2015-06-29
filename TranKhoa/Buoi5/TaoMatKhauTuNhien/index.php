<?php include ('xuly.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tao mật khẩu ngẫu nhiên</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <form id="form1" name="form1" method="post" action="">
          <table width="420" height="160" border="1">
            <tr>
              <td align="center"><strong>TẠO MẬT KHẨU NGẪU NHIÊN</strong></td>
            </tr>
            <tr>
              <td><input name="n" type="number" class="form-control" required="required" id="n" value="<?php echo $n; ?>" /></td>
            </tr>
            <tr>
              <td align="center"><input type="submit" name="button" id="button" value="Tạo mật khẩu" /></td>
            </tr>
            <tr>
              <td><input name="kq" type="text" id="kq" class="form-control" required="required" value="<?php echo $ketqua; ?>" /></td>
            </tr>
          </table>
        </form>
    </div>
</div>
</body>
</html>