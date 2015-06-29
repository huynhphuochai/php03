<?php
	$bd = 0;
	$kt = 1;
	include('tinhtoan.php');
	try
	{
		if(isset($_POST['bd']))
			$bd = $_POST['bd'];
		if(isset($_POST['kt']))
			$kt = $_POST['kt'];
		if( KiemTra($bd,$kt) )
		{
			$tong = TinhTong($bd,$kt);
			$tich = TinhTich($bd,$kt);
			$tongchan = TinhTongChan($bd,$kt);
			$tongle = TinhTongLe($bd,$kt);
		}
		else
			echo 'Nhập liệu sai';
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>