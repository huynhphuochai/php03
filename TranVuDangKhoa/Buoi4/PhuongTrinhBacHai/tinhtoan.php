<?php
	function KiemTraSo($a,$b,$c)
	{
		if(is_numeric($a) && is_numeric($b) && is_numeric($c))
			return true;
		else
			return false;
	}
	function PhuongTrinhBatNhat($a,$b)
	{
		$x = "";
		if( $a == 0 )
			$x = "Phương trình vô nghiệm";
		else
			if( $b == 0 )
				$x = "Phương trình có vô số nghiệm";
			else{
				$temp = -$b/$a;
				$temp = round($temp,2);
				$x = "Nghiệm của phương trình là: " .$temp;
			}
		return $x;
	}
	function PhuongTrinhBatHai($a,$b,$c)
	{
		$nghiem = "";
		if($a == 0)
			$nghiem = PhuongTrinhBatNhat($b,$c);
		else
		{
			$delta = $b*$b - 4*$a*$c;
			if($delta < 0)
				$nghiem = "Phương trình vô nghiệm";
			elseif($delta == 0)
			{
				$nghiem = "phương trình có nghiệm x1 = x2 = ".-$b/(2*$a);
			}
			else $nghiem = "phương trình có nghiệm x1 = ".round((-$b -$delta)/(2*$a),2)." ,x2 = ".round((-$b + $delta)/(2*$a),2);
		}
		return $nghiem;
	}

?>