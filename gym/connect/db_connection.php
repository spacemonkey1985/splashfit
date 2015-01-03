<?php
	$dbhost = '127.0.0.1';
	$dbuser = 'simon_db_usr';
	$dbpass = '56gdbd8NMKi9fndsfkladsf9';
	$dbname = 'simon_db';
	
	if(!$conn = mysql_connect($dbhost, $dbuser, $dbpass)){
		echo mysql_error;
	}
	
	if(!mysql_select_db($dbname)){
		echo mysql_error;
	}
?> 
