<?php
	try
	{
		$gio = 0;
		$ketqua = "";
		if(isset($_POST['gio'])) 
			$gio = $_POST['gio'];
			if(is_numeric($gio))
			{
				if($gio >= 0 && $gio <= 13)
					$ketqua = "Chào buổi sáng";
				elseif($gio > 13 && $gio <=18)
					$ketqua = "Chào buổi chiều";
					else $ketqua = "Chào buổi tối";
			}
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>