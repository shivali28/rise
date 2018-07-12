# rise
login
<?php

include('dbconnect.php');
 //error_reporting(0);
 $email=$_POST['email'];
 
 $password=$_POST['password'];
 
 
 $response = array();
 
 $query = "select * from trip_user where U_email='$email' and U_password='$password';";
 
		$result = mysqli_query($conn, $query);
		print_r($result);
	//	echo $result;
		
		$rows = mysqli_num_rows ($result);
			  
			  if($rows == 1)
			  {
				$response['status']=1;
				$response['message']="login Successful";
				echo json_encode($response);	
			  }
			  else
			  {
				$response['status']=0;
				$response['message']="login not Successful";
				echo json_encode($response);	
			  
				}
				

?>
