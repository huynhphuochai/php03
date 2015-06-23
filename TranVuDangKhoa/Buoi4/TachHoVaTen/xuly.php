<?php 
	try
	{
		$hoten = "";
		$ho = "";
		$ten ="";
		$tenlot ="";
		$array_hoten = array();
		if(isset($_POST['hoten']))
			$hoten = $_POST['hoten'];
		$array_hoten = explode(" ",$hoten);
		$ho = $array_hoten[0];
		$ten = $array_hoten[count($array_hoten)-1];
		for($i = 1 ; $i < count($array_hoten) - 1 ; $i++ )
			$tenlot .= $array_hoten[$i]." ";
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>