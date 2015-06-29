<?php
	try
	{
		$soa = 0;
		$sob = 0;
		if(isset($_POST["soa"]))
			$soa = $_POST["soa"];
		if(isset($_POST["sob"]))
			$sob = $_POST["sob"];
		$max = max($soa,$sob);
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>
