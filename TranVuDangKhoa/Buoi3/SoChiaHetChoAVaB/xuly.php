<?php 
	try
	{
		$n = 1;
		$a = 1;
		$b = 1;
		$kq = "";
		if(isset($_POST['n']))
			$n = $_POST['n'];
		if(isset($_POST['a']))
			$a = $_POST['a'];
		if(isset($_POST['b']))
			$b = $_POST['b'];
		if( ( $n < $b || $n < $a ) && ($a == 0 || $b == 0) && !is_numeric($n) && !is_numeric($a) && !is_numeric($b) )
			echo "Nhập liệu sai";
		else
		{
			for( $i = min($a,$b) ; $i <= $n ; $i++ )
			{
				if($i % $a == 0 && $i % $b == 0 )
					$kq .= $i." ";
			}
		}
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>