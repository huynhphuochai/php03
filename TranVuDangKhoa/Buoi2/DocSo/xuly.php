<?php
	try{
		$so = 0;
		$chu = "";
		if(isset($_POST['so']))
			$so = $_POST['so'];
		switch($so)
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
	}
	catch(Exception $ex){
		$ex->getMessage();
	}
?>