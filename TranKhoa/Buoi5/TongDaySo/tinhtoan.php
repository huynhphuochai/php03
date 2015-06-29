<?php 
	function TinhTong($n)
	{
		$arr = explode(',',$n);
		$count = count($arr);
		$tong = 0;
		for($i = 0 ; $i < $count ; $i++)
		{
			$tong += $arr[$i];
		}
		return $tong;
	}
	function TinhTBC($n)
	{
		$arr = explode(',',$n);
		$count = count($arr);
		$tong = 0;
		for($i = 0 ; $i < $count ; $i++)
		{
			$tong += $arr[$i];
		}
		$tbc = $tong / $count;
		$tbc = round($tbc,2);
		return $tbc;
	}
	function TinhTich($n)
	{
		$arr = explode(',',$n);
		$count = count($arr);
		$tich = 1;
		for($i = 0 ; $i < $count ; $i++)
		{
			$tich *= $arr[$i];
		}
		return $tich;
	}

?>