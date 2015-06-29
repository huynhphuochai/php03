<?php 
	try
	{
		$chuoi ="";
		$thaythe ="";
		$goc ="";
		$kq = "";
		if(isset($_POST['chuoi']) && isset($_POST['thaythe']) && isset($_POST['goc']) )
		{
			$chuoi = $_POST['chuoi'];
			$thaythe = $_POST['thaythe'];
			$goc = $_POST['goc'];
			$kq = str_replace($goc,$thaythe,$chuoi);
		}
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>