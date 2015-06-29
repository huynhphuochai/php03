<?php
	include('tinhtoan.php');
try
			{
				$n = 0;
				$ketqua = "";
				if(isset($_POST['n']))
					$n = $_POST['n'];
				if(!empty($n))
					$ketqua = TaoMatKhau($n);
			}
			catch(Exception $ex)
			{
				echo $ex->getMessage();
			}

?>