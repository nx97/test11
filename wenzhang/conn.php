<?php
	$link=@mysqli_connect('localhost:3306','root','') or die('数据库连接失败');
	@mysqli_select_db($link,'blog6') or die('数据库连接失败');
	mysqli_set_charset($link,'utf8');
	
	
	
?>