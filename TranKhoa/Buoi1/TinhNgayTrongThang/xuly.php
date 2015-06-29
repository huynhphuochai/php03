<?php 
	function KiemTraThang($thang)
	{
		try{
			if(is_numeric($thang))
			{
				if($thang >=1 && $thang <= 12)
					return true;
				else
					return false;
			}
		}
		catch(Exception $ex){
			$ex->getMessage();
		}
	}
	function KiemTraNam($nam)
	{
		try{
			if(is_numeric($nam))
			{
				$namhientai = idate('Y');
				if($nam >=1900 && $nam <= 2015)
					return true;
				else
					return false;
			}
		}
		catch(Exception $ex){
			$ex->getMessage();
		}
	}
	function TinhNgayTrongThang($thang,$nam)
	{
		if(KiemTraThang($thang)&& KiemTraNam($nam))
		{
			if(KiemTraNamNhuan($nam) && $thang == 2)
			{
				return 29;
			}
			else
			{
				return cal_days_in_month(CAL_GREGORIAN, $thang, $nam);
			}
		}
	}
	
	//Kiểm tra năm có phải là năm nhuận
	function KiemTraNamNhuan($nam)
	{
		if(KiemTraNam($nam))
		{
			return ((($nam%4)==0 &&($nam%100)!=0)) || ($nam%400 == 0);
		}
	}

?>