<?php
	$db = mysqli_connect('localhost','root','','tutorial');
	if(mysqli_connect_errno()){
			echo 'database connection failed with following errors: '. mysqli_connect_error();
			die();
		}
		define('BASEURL','/ecomm/');