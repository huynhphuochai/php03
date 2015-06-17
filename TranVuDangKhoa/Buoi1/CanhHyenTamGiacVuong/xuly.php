<?php
	try
	{
		$canha = 0;
		$canhb = 0;
		if(isset($_POST["canha"]))
			$canha = $_POST["canha"];
		if(isset($_POST["canhb"]))
			$canhb = $_POST["canhb"];
		$canhhuyen = sqrt(($canha*$canha) + ($canhb*$canhb) );
		round($canhhuyen,2);
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>