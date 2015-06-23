<?php 
	include("tinhtoan.php");
	try
	{
		$n = 0;
		$chuoi ="";
		if(isset($_POST['n']))
			$n = $_POST['n'];
		if($n < 2)
		{
			$chuoi = "Không có số nguyên tố";
		}
		else
		{
			for($i = 0 ; $i < $n ; $i++)
			{
				if(KiemSNT($i) == 1)
					$chuoi .= $i." ";
			}
			$chuoi .= $chuoi." "."là số nguyên tố nhỏ hơn ".$n;
		}
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}

?>