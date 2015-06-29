<?php
	function TaoMatKhau($n)
	{
		$kytu = "~!@#$%^&*()-_==+[]{};:.,<>?";
		$count = strlen($kytu);
		$index = mt_rand(0,$count-1);
		$password = substr($kytu,$index,1);
		$password .= chr(mt_rand(48,57));
		$password .= chr(mt_rand(65,90));
		while(strlen($password) < $n ){
			$password .= chr(mt_rand(97,122));
		}
		$password = str_shuffle($password);
		return $password;
	}
	
?>