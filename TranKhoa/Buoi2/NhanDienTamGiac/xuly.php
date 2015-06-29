<?php
	try
	{
		$canha= 0;
		$canhb = 0;
		$canhc = 0;
		$tamgiac = "";
		if(isset($_POST['canha']))
			$canha = $_POST['canha'];
		if(isset($_POST['canhb']))
			$canhb = $_POST['canhb'];
		if(isset($_POST['canha']))
			$canhc = $_POST['canhc'];
		if( ($canha + $canhb ) <= $canhc || ($canha + $canhc) <= $canhb || ($canhb + $canhc ) <= $canha)
			$tamgiac = "Ba cạnh vừa nhập không tạo nên tam giác";
		else
			if($canha == $canhb && $canha == $canhc )
				$tamgiac = "Là tam giác đều";
			else
				if( ($canha == $canhb || $canha == $canhc || $canhc == $canhb) && ((pow($canha,2)+pow($canhb,2) == pow($canhc,2)) || (pow($canhb,2)+pow($canhc,2) == pow($canha,2)) || (pow($canha,2)+pow($canhc,2) == pow($canhb,2))) )
					$tamgiac = "Là tam giác vuông cân";
				else if($canha == $canhb || $canha == $canhc || $canhc == $canhb)
					$tamgiac = "Là tam giác cân";
					else 
						if( (pow($canha,2)+pow($canhb,2) == pow($canhc,2)) || (pow($canhb,2)+pow($canhc,2) == pow($canha,2)) || (pow($canha,2)+pow($canhc,2) == pow($canhb,2)) )
							$tamgiac = "Là tam giác vuông";
						else
							$tamgiac = "Là tam giác thường";
				
	}
	catch(Exception $ex)
	{
		echo $ex->getMessage();
	}
?>