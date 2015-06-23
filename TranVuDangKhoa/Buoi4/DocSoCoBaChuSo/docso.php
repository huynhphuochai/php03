<?php 
	function DocSo($a)
	{
		$chu = "";
		switch($a)
		{
			case 0:
				$chu = "Không";
				break;
			case 1:
				$chu = "Một";
				break;		
			case 2:
				$chu = "Hai";
				break;
			case 3:
				$chu = "Ba";
				break;
			case 4:
				$chu = "Bốn";
				break;
			case 5:
				$chu = "Năm";
				break;
			case 6:
				$chu = "Sáu";
				break;
			case 7:
				$chu = "Bảy";
				break;
			case 8:
				$chu = "Tám";
				break;
			case 9:
				$chu = "Chín";
				break;
			default:
				break;
		}
		return $chu;
	}
	function DocDonVi($dv,$chuc,$tram)
	{
		$doc_dv = "";
		if( $dv == 0 && $chuc == 0 && $tram == 0 )
			$doc_dv = "Không";
		else
			if($dv != 0 && $dv != 5)
				$doc_dv = DocSo($dv);
			else
				if($chuc != 0 && $dv == 5)
					$doc_dv = "Lăm";
				else 
					if($chuc == 0 && $dv == 5)
						$doc_dv = "Năm";
					else $doc_dv = "";
		return $doc_dv;
	}
	function DocChuc($chuc)
	{
		$doc_chuc = "";
		if($chuc != 0 && $chuc != 1)
			$doc_chuc = DocSo($chuc)." Mươi";
		else if($chuc == 1)
			$doc_chuc = "Mười";
			else $doc_chuc = "Lẻ";
		return $doc_chuc;
	}
	function DocTram($tram)
	{
		$doc_tram = "";
		if($tram != 0)
				$doc_tram = DocSo($tram)." Trăm";
			else	$doc_tram = "";
		return $doc_tram;
	}
	function DocKetQua($input,$tram,$chuc,$dv)
	{
		$doc_tram = DocTram($tram);
		$doc_chuc = DocChuc($chuc);
		$doc_dv = DocDonVi($dv,$chuc,$tram);
		$output = "";
		if($input % 100 == 0 )
				$output = $doc_tram;
			else
				$output = $doc_tram." ".$doc_chuc." ".$doc_dv;
			if($input < 10)
				$output = DocSo($input);
			if($input > 20 && $dv == 1 && $input < 100)
				$output = $doc_chuc. " Mốt";
			if($input > 100 && $dv == 1 && $chuc > 1 )
				$output = $doc_tram. " ".$doc_chuc." "." Mốt";
		return $output;
	}
?>