<?php

require "connection.php";
header ('Access-Control-Allow-Origin: *');
$conn = new mysqli($db_host,$db_username,$db_pass,$db_name);
	//checking connection
	
		if ($conn->connect_error){
			die("Connection failed: " .$conn->connect_error);
			
		} 
		
        
		//SELECT  FROM houses WHERE `Location` LIKE 'agbara' OR `Price` LIKE 'agbara' OR `landlord` LIKE 'agbara';
		if( isset($_POST["phoneNo"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["usertype"]) ){		
						
						$phoneNo = $_POST["phoneNo"];
                        $email  = $_POST["email"]; 
                        $password  = $_POST["password"]; 
                        $usertype  = $_POST["usertype"]; 

                /* create a prepared statement */
                if ($stmt = $conn->prepare('INSERT INTO `usertb`(`user_email`, `user_password`, `user_type`) VALUES (?,?,?)')) {
                    
                    /* bind parameters for markers */
                    $stmt->bind_param("sss", $email, $password, $usertype);

                    /* execute query */
                    $stmt->execute();

                    $query = "CREATE TABLE IF NOT EXISTS `".$email."` (`User_profile_id` int(11) NOT NULL AUTO_INCREMENT,`user_identity` int(11) NOT NULL ,`First_Name` varchar(20) NOT NULL,`Last Name` varchar(20) NOT NULL,`Category` varchar(20) DEFAULT NULL,`suscribed_to` text COMMENT 'the people the user is suscribe to',`user_suscribed` text COMMENT 'other users that are suscribed to this user',`brand_image` varchar(255) DEFAULT NULL,`brand_name` varchar(255) DEFAULT NULL,`phone_no` varchar(20) DEFAULT NULL,PRIMARY KEY (`User_profile_id`),FOREIGN KEY (`user_identity`) REFERENCES `usertb` (`user_identity`) ON DELETE CASCADE ON UPDATE CASCADE,KEY `user_identity` (`user_identity`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $emparray = array();
			
                    
                    
                            $emparray[] = "success";
                    
                            echo json_encode($emparray);
                   
                    /* close statement */
                    $stmt->close();
                }
			}						
	$conn->close();	
?>
