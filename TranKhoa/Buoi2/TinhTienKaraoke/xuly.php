<?php
	function TinhTienGio($batdau,$ketthuc)
	{
		try{
			$thanhtien = 0;
			if($batdau < $ketthuc)
			{
				if($ketthuc <= 17)
					$thanhtien = ($ketthuc - $batdau) * 20000;
				else if($ketthuc >= 17)
					$thanhtien = ($ketthuc - $batdau) * 45000;
					else $thanhtien = (17 - $batdau) * 20000 + (24 - $ketthuc) * 45000; 
			}
			return $thanhtien;
		}
		catch(Exception $ex){
			$ex->getMessage();
		}
	}
?>