<?php 
	try{
		$hk1 = 0;
		$hk2 = 0;
		if(isset($_POST['hk1']))
			$hk1 = $_POST['hk1'];
		if(isset($_POST['hk2']))
			$hk2 = $_POST['hk2'];
		$tb = ($hk1 + $hk2*2)/3;
		$tb = round($tb,2);
		$kq = "";
		$hl = "";
		if($tb >= 5)
			$kq = "Được lên lớp";
		else $kq = "Ở lại lớp";
		if( $tb < 5 )
			$hl = "Yếu";
		else
			if($tb < 6.5)
				$hl = "Trung bình";
			else
				if($tb < 8.5)
					$hl = "Khá";
				else
					$hl = "Giỏi";
	}
	catch(Exception $ex){
		$ex->getMessage();
	}
?>