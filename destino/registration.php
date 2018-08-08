<?php 
include('dbconnect.php');
 $name=$_POST['name'];
 $email=$_POST['email'];
 
 $password=$_POST['password'];
 $mobile=$_POST['mobile'];

 
 $active=1;
 
 $response = array();
 
 $query = "INSERT INTO trip_user(U_name,U_email,U_mobile,U_active,U_password) 
  			  VALUES('$name', '$email', '$mobile', '$active', '$password')";
			  
			 if(mysqli_query($conn, $query))
			  {
				$response['status']=1;
				$response['message']="Registartion Successful";
				echo json_encode($response);	
				header("Location:http://localhost/project/destino/index1.php");
				
			  }
			  else
			  {
				$response['status']=0;
				$response['message']="Registartion not Successful";
				echo json_encode($response);	
			  
				}
				
?>