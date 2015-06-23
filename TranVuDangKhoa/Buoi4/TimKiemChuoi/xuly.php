<?php 
	try
	{
		$chuoi ="";
		$tu ="";
		$kq ="";
		if(isset($_POST['chuoi']) && isset($_POST['tu']))
		{
			$chuoi = $_POST['chuoi'];
			$tu = $_POST['tu'];
			$kq = strpos($chuoi,$tu);
			if(empty($kq))
				$kq = "Không tìm thấy từ trong chuỗi";
			else
				$kq = "Chuỗi cần tìm ở vị trí ".$kq;
		}
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>