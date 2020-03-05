<?php
	$dbhost ='localhost';
	$dbuser ='root';
	$dbpass ='';
	$dbname ='ssms';

	$connection = mysqli_connect('localhost', 'root', '', 'ssms');
		
	//checking the connection
	if(mysqli_connect_errno()) {
		die('Database connection failed'. mysqli_connect_error());
	} 

?>