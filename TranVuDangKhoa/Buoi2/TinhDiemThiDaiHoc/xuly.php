<?php
	try{
		$toan = $ly = $hoa = $diemchuan = 0;
		if(isset($_POST['toan']))
			$toan = $_POST['toan'];
		if(isset($_POST['ly']))
			$ly = $_POST['ly'];
		if(isset($_POST['hoa']))
			$hoa = $_POST['hoa'];
		if(isset($_POST['diemchuan']))
			$diemchuan = $_POST['diemchuan'];
		$tongdiem = $toan + $ly + $hoa;
		$ketqua = "";
		if( ($tongdiem > $diemchuan) && ($toan > 0) && ($ly > 0) && ($hoa > 0) )
			$ketqua = "Đậu";
		else $ketqua = "Rớt";
	}
	catch(Exception $ex){
		$ex->getMessage();
	}
?>