<?php 
	try{
		$a = 0;
		$b = 0;
		$x = "";
		if(isset($_POST['a']))
			$a = $_POST['a'];
		if(isset($_POST['b']))
			$b = $_POST['b'];
		if( $a == 0 )
			$x = "Phương trình vô nghiệm";
		else
			if( $b == 0 )
				$x = "Phương trình có vô số nghiệm";
			else{
				$temp = -$b/$a;
				$temp = round($temp,2);
				$x = "Nghiệm của phương trình là: " .$temp;
			}
	}
	catch(Exception $ex){
		$ex->getMessage();
	}
?>