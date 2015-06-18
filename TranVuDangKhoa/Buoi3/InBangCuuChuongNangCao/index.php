<?php
	$bd = 1;
	$kt = 1;
	if(isset($_POST['bd']))
		$bd = $_POST['bd'];
	if(isset($_POST['kt']))
		$kt = $_POST['kt'];
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>In bảng cửu chương</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
</head>

<body>
<div class="container">
<div class="row" align="center">
<form id="form1" name="form1" method="post" action="">
  <table width="539" border="1" class="table-condensed well table-bordered">
    <tr>
      <td colspan="2" align="center"><strong>IN BẢNG CỬU CHƯƠNG</strong></td>
    </tr>
    <tr>
      <td width="103">Bắt đầu từ:</td>
      <td width="420"><input name="bd" type="number" required="required" class="form-control" id="bd" value="<?php echo $bd; ?>" /></td>
    </tr>
    <tr>
      <td>Kết thúc tại:</td>
      <td><input name="kt" type="number" required="required" class="form-control" id="kt" value="<?php echo $kt; ?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" class="btn-success" value="Xuất bảng cửu chương" /></td>
      </tr>
  </table>
</form>
<div class="ketqua">
	<?php 
		$kq = "";
		if(is_numeric($bd) && is_numeric($kt) && $bd <= $kt)
		{
			echo '<table class="table-condensed well table-bordered">';
			echo '<tr>';
			for($i = $bd ; $i <= $kt ; $i++)
			{
				echo '<td>';
				for($j = 1 ; $j <= 10 ; $j++)
				{
					
					echo '<div class="text-info">'.$i."x".$j."=".$j*$i."<br></div>";
					
				}
				echo '</td>';
			}
			echo '</tr>';
			echo '</table>';
		}
		else
			echo '<p class="warning">Nhập liệu không đúng</p>';
	 ?>
</div>
</div>
</div>
</body>
</html>