<?php
		$n = $a = $b = 1;
		include('tinhtoan.php');
	try
	{
		$kq = "";
		if(isset($_POST['n']))
			$n = $_POST['n'];
		if(isset($_POST['a']))
			$a = $_POST['a'];
		if(isset($_POST['b']))
			$b = $_POST['b'];
		$kq = TinhToan($n,$a,$b);
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>