<?php include('xuly.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm thứ trong tuần</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <div class="row" align="center">
        <form id="form1" name="form1" method="post" action="">
          <table width="866" height="136"  class="table-condensed well table-bordered">
            <tr>
              <td colspan="5" align="center"><strong>TÌM THỨ TRONG TUẦN</strong></td>
            </tr>
            <tr>
              <td width="146">Ngày/tháng/năm:</td>
              <td width="144"><input name="ngay" class="form-control" type="number" required="required" max="31" min="1" id="ngay" value="<?php echo $ngay; ?>" /></td>
              <td width="144"><input name="thang" type="number" class="form-control" required="required" max="12" min="1"  id="thang" value="<?php echo $thang; ?>" /></td>
              <td width="144"><input name="nam" type="number" required="required" class="form-control" min="1900" id="nam" value="<?php echo $nam; ?>" /></td>
              <td width="137" align="center"><input type="submit" class="btn-success" name="button" id="button" value="Tìm thứ trong ngày" /></td>
            </tr>
            <tr>
              <td colspan="5" align="center"><input name="ketqua" class="form-control" type="text" readonly="readonly" id="ketqua" value="<?php echo $ketqua; ?>" /></td>
            </tr>
          </table>
        </form>
    </div>
</div>
</body>
</html>