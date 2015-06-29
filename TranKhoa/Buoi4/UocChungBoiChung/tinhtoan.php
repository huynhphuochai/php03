<?php 
	function KiemTraSo($a,$b)
	{
		if(is_numeric($a) && is_numeric($b))
			return true;
		else
			return false;
	}
	function UocChungMax($a,$b)
	{
		$uoc = 1;
		if($a == 0 || $b == 0)
			$uoc = $a + $b;
		while($a != $b)
		{
			if($a > $b)
			{
				$a = $a - $b;
				$uoc = $a;
			}
			else
			{
				$b = $b - $a;
				$uoc = $b;
			}
		}
		return $uoc;
	}
	function BoiChungMin($a,$b)
	{
		return ($a * $b)/UocChungMax($a,$b);
	}
?>