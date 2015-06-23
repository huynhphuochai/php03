<?php
	$a = 1;
	$b = 1;
	$uoc = 1;
	$boi = 1;
	include("tinhtoan.php");
	try
	{
		if(isset($_POST['a']) && isset($_POST['b']) )
		{
			$a = $_POST['a'];
			$b = $_POST['b'];
		}
		if(!KiemTraSo($a,$b))
			echo "Nhập liệu sai";
		else
		{
			$uoc = UocChungMax($a,$b);
			$boi = BoiChungMin($a,$b);
		}
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>