<?php
	try{
		$nam = 1900;
		$chu = "";
		if(isset($_POST['nam']))
			$nam = $_POST['nam'];
		$mang_can = array("Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
		$mang_chi = array("Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
		$can = ($nam - 3)%10;
		$chi = ($nam - 3)%12;
		$chu = $mang_can[$can] . " " . $mang_chi[$chi];
	}
	catch(Exception $ex){
		$ex->getMessage();
	}
?>