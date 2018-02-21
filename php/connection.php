<?php
	
	$db_host = '104.197.104.68:3307';
	$db_username = 'root';
	$db_pass = 'XQDufx3ZSj*xKZ';
	$db_name ='questmartdb';



	$conn = new mysqli($db_host,$db_username,$db_pass,$db_name);
	//checking connection
	
		if ($conn->connect_error){
			die("Connection failed: " .$conn->connect_error);
			
		} else{
			echo("successfull");
		}
		
		
		

?>
  
