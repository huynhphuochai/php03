<?php
	try
	{
		$gio = 0;
		$ketqua = "";
		if(isset($_POST['gio'])) $gio = $_POST['gio'];
		if(is_numeric($gio))
		{
			if($gio >= 0 && $gio <= 13)
				$ketqua = "Buổi sáng";
			elseif($gio > 13 && $gio <= 18)
				$ketqua = "Buổi trưa";
				else
				$ketqua = "Buổi tối";
		}
	}
	catch(Exception $e)
	{
		echo $e->getMessage();
	}
?>