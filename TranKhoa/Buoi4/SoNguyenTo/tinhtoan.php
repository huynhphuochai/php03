<?php 
	function KiemSNT($n)
	{
		$kq = 1;//là so nguyen to
		if($n < 2)
			$kq = 0;
		for($i = 2; $i <= sqrt($n); $i++)
		{
			if($n % $i == 0)
			{
				$kq = 0;
				break;
			}
		}
		return $kq;
	}

?>