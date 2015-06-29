<?php 
	function KiemTra($bd,$kt)
	{
		if($bd > $kt)
			return FALSE;
		else
			return TRUE;
	}
	function TinhTong($bd,$kt)
	{
		$tong = 0;
		for( $i = $bd ; $i <= $kt ; $i++ )
		{
			$tong += $i;
		}
		return $tong;
	}
	function TinhTich($bd,$kt)
	{
		$tich = 1;
		for( $i = $bd ; $i <= $kt ; $i++ )
		{
			$tich *= $i;
		}
		return $tich;
	}
	function TinhTongChan($bd,$kt)
	{
		$tongchan = 0;
		for( $i = $bd ; $i <= $kt ; $i++ )
		{
			if($i % 2 == 0)
				$tongchan += $i;
		}
		return $tongchan;
	}
	function TinhTongLe($bd,$kt)
	{
		$tongle = 0;
		for( $i = $bd ; $i < $kt ; $i++ )
		{
			if($i % 2 != 0)
				$tongle += $i;
		}
		return $tongle;
	}
?>