<?php

require "connection.php";

$conn = new mysqli($db_host,$db_username,$db_pass,$db_name);
	//checking connection
	
		if ($conn->connect_error){
			die("Connection failed: " .$conn->connect_error);
			
		} 
		$sql = "SELECT Location FROM houses ";
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
	$conn->close();
	
	 
 


?>