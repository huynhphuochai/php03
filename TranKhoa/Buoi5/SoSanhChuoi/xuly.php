<?php
try
			{
				$ch_1="";
				$ch_2="";
				$ketqua ="";
				if(isset($_POST["ch_1"]) && isset($_POST["ch_2"]) )
				{
					$ch_1 = $_POST["ch_1"];
					$ch_2 = $_POST["ch_2"];
				}
				$kq = strcmp($ch_1,$ch_2);
				if($kq == 0)
					$ketqua = "Hai chuỗi bằng nhau";
					elseif($kq == 1)
						$ketqua = "Chuỗi 1 lớn hơn chuỗi 2";
						else
							$ketqua = "Chuỗi 1 ngắn hơn chuỗi 2";
			}
			catch(Exception $ex)
			{
				echo $ex->getMessage();
			}
?>