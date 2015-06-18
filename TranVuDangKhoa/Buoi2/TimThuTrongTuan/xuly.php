<?php
	try
	{
		$ngay = 1;
		$thang = 1;
		$nam = 1900;
		$thu = "";
		if(isset($_POST['ngay']))
			$ngay = $_POST['ngay'];
		if(isset($_POST['thang']))
			$thang = $_POST['thang'];
		if(isset($_POST['nam']))
			$nam = $_POST['nam'];
		$jd = cal_to_jd(CAL_GREGORIAN,$thang,$ngay,$nam);
		$day = jddayofweek($jd,0);//Trả về số =>đọc chữ thành số.
		switch($day)
		{
			case 0:
				$thu = "Chủ nhật";
				break;
			case 1:
				$thu = "Thứ hai";
				break;
			case 2:
				$thu = "Thứ ba";
				break;
			case 3:
				$thu = "Thứ tư";
				break;
			case 4:
				$thu = "Thứ năm";
				break;
			case 5:
				$thu = "Thứ sáu";
				break;
			case 6:
				$thu = "Thứ bảy";
				break;
			default:
				break;
		}
		$ketqua = "Ngày ".$ngay." tháng ".$thang." năm ".$nam." là ".$thu;
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>