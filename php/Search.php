<?php

require "connection.php";
header ('Access-Control-Allow-Origin: *');
$conn = new mysqli($db_host,$db_username,$db_pass,$db_name);
	//checking connection
	
		if ($conn->connect_error){
			die("Connection failed: " .$conn->connect_error);
			
		} 
		
		
		//SELECT  FROM houses WHERE `Location` LIKE 'agbara' OR `Price` LIKE 'agbara' OR `landlord` LIKE 'agbara';
		if(isset($_POST["searchKey"])){		
						
						$searchword = $_POST["searchKey"];
						$Offsetter  = $_POST["Offset_val"]; 
						$sql =  "SELECT Uni_identity, Location, Water, Light, Price, landlord, mainpic FROM houses WHERE `Location` LIKE '%".$searchword."%' OR `Price` LIKE '%".$searchword."%' OR `landlord` LIKE '%".$searchword."%' LIMIT 10 OFFSET ".$Offsetter; //"SELECT  FROM houses WHERE `Location` LIKE '".%$searchword%."' OR `Price` LIKE '".%$searchword%."' OR `landlord` LIKE ".%$searchword%;								
						$result = $conn->query($sql);
						 $emparray = array();
						if($result->num_rows > 0){
							while($row = $result->fetch_assoc()){				
								$emparray[] = $row;
							}
								
								echo json_encode($emparray);
								
						}else {
							
							
			
					
				}	
			}						
	$conn->close();	
?>