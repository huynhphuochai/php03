<?php
	include("docso.php");
	try
	{
		$input = 0;
		$output = "";
		if(isset($_POST["input"]))
			$input = $_POST["input"];
		if(is_numeric($input))
		{
			$dv = $input % 10;
			$chuc = floor($input /10);
			$chuc = $chuc % 10;
			$tram = floor($input /100);
			$output = DocKetQua($input,$tram,$chuc,$dv);
		}
		else echo "Nhập liệu sai";
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}

?>