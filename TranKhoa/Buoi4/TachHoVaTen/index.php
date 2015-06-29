<?php include('xuly.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tách họ và tên</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <form id="form1" name="form1" method="post" action="">
          <table width="530" class="table-condensed well" align="center">
            <tr>
              <td colspan="2" align="center"><strong>TÁCH HỌ VÀ TÊN</strong></td>
            </tr>
            <tr>
              <td>Họ và tên đầy đủ:</td>
              <td><input name="hoten" type="text" required="required" class="form-control" id="hoten" value="<?php echo $hoten; ?>" /></td>
            </tr>
            <tr>
              <td>Họ:</td>
              <td><input name="ho" type="text" id="ho" required="required" class="form-control" value="<?php echo $ho; ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td>Tên lót:</td>
              <td><input name="tenlot" type="text" id="tenlot" required="required" class="form-control" value="<?php echo $tenlot; ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td>Tên:</td>
              <td><input name="ten" type="text" id="ten" required="required" class="form-control" value="<?php echo $ten; ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" class="btn btn-primary"  name="button" id="button" value="Tách" /></td>
            </tr>
          </table>
        </form>
    </div>
</div>
</body>
</html>