<?php
	try
	{
		$so_cu = 0;
		$so_moi = 0;
		$chuho = "";
		$dongia = 0;
		$thanh_tien = 0;
		if(isset($_POST["so_cu"]))
			$so_cu = $_POST['so_cu'];
		if(isset($_POST["so_moi"]))
			$so_moi = $_POST['so_moi'];
		if(isset($_POST["chuho"]))
			$chuho = $_POST['chuho'];
		if(isset($_POST["don_gia"]))
			$dongia = $_POST['don_gia'];
		if($so_cu < $so_moi)
			$thanh_tien = ($so_moi - $so_cu) * $dongia;
		else
			echo "Nhập chỉ số mới sai";
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>