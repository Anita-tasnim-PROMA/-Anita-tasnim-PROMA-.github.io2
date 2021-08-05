<?php
	$conn = new mysqli("localhost","root","","proma_portfolio");
	
	if($conn->connect_error) 
    	die("Connection failed: " . $conn->connect_error);
	
	if(!session_start())
	{
		session_start();
		$_SESSION['login'] = 0;
	}	
?>