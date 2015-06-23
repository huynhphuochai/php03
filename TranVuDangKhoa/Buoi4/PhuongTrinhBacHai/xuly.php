<?php
	include("tinhtoan.php");
	$a = 0;
	$b = 0;
	$c = 0;
	$nghiem = "";
	if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]) )
	{
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];
	}
		if(!KiemTraSo($a,$b,$c))
			echo "Nhập liệu sai";
		else
		{
			$nghiem = PhuongTrinhBatHai($a,$b,$c);
		}
?>