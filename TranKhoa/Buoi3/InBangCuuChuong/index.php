<?php
	$input = 1;
	if(isset($_POST['input']))
		$input = $_POST['input'];
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
      <td colspan="3" align="center"><strong>IN BẢNG CỬU CHƯƠNG</strong></td>
    </tr>
    <tr>
      <td>Bảng cửu chương:</td>
      <td><input type="number" class="form-control" required="required" name="input" id="input" /></td>
      <td><input type="submit" name="button" id="button" value="Tính" class="btn-success" /></td>
    </tr>
  </table>
</form>
<div class="ketqua">
	<?php 
		$kq = "";
		if(is_numeric($input))
		{
			for($i = 1 ; $i <= 10 ; $i++)
			{
				$kq ='<p class="text-success">'.$input."x".$i."=".$i*$input."<br></p>";
				echo $kq;	
			}
		}
	 ?>
</div>
</div>
</div>
</body>
</html>