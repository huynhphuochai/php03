<?php include("xuly.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đọc số có ba chữ số</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="450" height="123" border="0" class="table-condensed well table-bordered">
            <tr>
              <td colspan="3" align="center"><strong>ĐỌC SỐ CÓ BA CHỮ SỐ</strong></td>
            </tr>
            <tr>
              <td width="138">Nhập số (0-&gt;999):</td>
              <td width="192"><input name="input" type="number" class="form-control" required="required" max="999" id="input" value="<?php echo $input; ?>" /></td>
              <td width="98" align="center"><input type="submit"  name="button" class="btn btn-primary" id="button" value="Đọc số" /></td>
            </tr>
            <tr>
              <td colspan="3"><input name="output" id="output" type="text" readonly="readonly" value="<?php echo $output;?>" class="form-control" /></td>
            </tr>
          </table>
        </form>
    </div>
    </div>
</body>
</html>