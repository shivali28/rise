

<?php
 include('dbconnect.php');
 session_start();
 $email=$_SESSION['email'];
 $trname=$_SESSION['suburb'];
 
 
 


 
 $expname = $_POST['expname'];
 $expcat = $_POST['expcat'];
 $amount=$_POST['amount'];
 $expdate=$_POST['expdate'];
 

 $response = array();
 $query = "SELECT trip_id FROM trip WHERE trip_name= '$trname'";
 $result = mysqli_query($conn,$query);
 $rows = mysqli_fetch_array($result);
 $trid = $rows['trip_id'];


 

 
 $response = array();
 $query = "SELECT U_id FROM trip_user WHERE U_email= '$email'";
 $result = mysqli_query($conn,$query);
 $rows = mysqli_fetch_array($result);
 $id = $rows['U_id'];

 $response = array();
 $query = "SELECT cat_id FROM category WHERE cat_name= '$expcat'";
 $result = mysqli_query($conn,$query);
 $rows = mysqli_fetch_array($result);
 $catid = $rows['cat_id'];

 $query1 = "INSERT INTO expense(trip_id,U_id,exp_name,exp_date,exp_amount,cat_id) 
  			  VALUES('$trid', '$id', '$expname', '$expdate', '$amount', '$catid')";
			  
			  
			 if(mysqli_query($conn, $query1))
			  {
				$response['status']=1;
                $response['message']="Registartion Successful";
                echo json_encode($response);

               
               
			  }
			  else
			  {
				$response['status']=0;
				$response['message']="Registartion not Successful";
				echo json_encode($response);	
			  
        }
        
   
			
?>
