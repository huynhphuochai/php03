<?php
	try
	{
		$chieudai = 0;
		$chieurong = 0;
		if(isset($_POST["chieudai"]))
			$chieudai = $_POST["chieudai"];
		if(isset($_POST["chieurong"]))
			$chieurong = $_POST["chieurong"];
		$dientich = $chieudai*$chieurong;
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>