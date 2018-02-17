<?php

require "connection.php";
header ('Access-Control-Allow-Origin: *');

$conn = new mysqli($db_host,$db_username,$db_pass,$db_name);
	//checking connection
	
		if ($conn->connect_error){
			die("Connection failed: " .$conn->connect_error);
			
		}
		if(isset($_POST['Uni_identity'])){
			
			$unique_id = $_POST["Uni_identity"];		
			$sql =  "SELECT * FROM houses where Uni_identity = '".$unique_id."'";
			$result = $conn->query($sql);
			$emparray = array();
			
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){				
					$emparray[] = $row;
				}
					echo json_encode($emparray);
			}else {
				echo "0 results";
			}
		}	
		
		$conn->close();
		
		
		  
	
	 
 



?>