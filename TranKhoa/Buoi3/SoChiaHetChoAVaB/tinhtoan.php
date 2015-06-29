<?php 
	function KiemTraSoHopLe($n,$a,$b)
	{
		if( ( $n < $b || $n < $a ) && ($a == 0 || $b == 0) && !is_numeric($n) && !is_numeric($a) && !is_numeric($b) )
			return false;
		else
			return true;
	}
	function TinhToan($n,$a,$b)
	{
		$kq = "";
		if(KiemTraSoHopLe($n,$a,$b))
		{
			for( $i = min($a,$b) ; $i <= $n ; $i++ )
			{
				if($i % $a == 0 && $i % $b == 0 )
					$kq .= $i." ";
			}
		}
		else $kq = "Nhập liệu sai";
		return $kq;
	}
?>