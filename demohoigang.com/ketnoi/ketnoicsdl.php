<?php
	$con = mysqli_connect('localhost','root','','demo-giang');
	mysqli_set_charset($con, 'utf8');
	if(!$con)
	{
		die ("Can not connect database ".mysqli_connect_error());
		exit;
	}
?>