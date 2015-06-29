<?php 
	include('tinhtoan.php');
	try
	{
		$dayso = "";
		if(isset($_POST['dayso']))
			$dayso = $_POST['dayso'];
		$tong = TinhTong($dayso);
		$tbc = TinhTBC($dayso);
		$tich = TinhTich($dayso);
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}

?>