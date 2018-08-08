
<?php
 include('dbconnect.php');
 
 $trname = $_POST['trname'];
 $email = $_POST['email'];
 $sdate=$_POST['sdate'];
 $edate=$_POST['edate'];
 $trimage=$_POST['trimage'];
 
 $response = array();
 $query = "SELECT U_id FROM trip_user WHERE U_email= '$email'";
 $result = mysqli_query($conn,$query);
 $rows = mysqli_fetch_array($result);
 $id = $rows['U_id'];

 $query1 = "INSERT INTO trip(trip_name,trip_creator,t_start_date,t_end_date,trip_image) 
  			  VALUES('$trname', '$id', '$sdate', '$edate', '$trimage')";
			  
			  
			 if(mysqli_query($conn, $query1))
			  {
				$response['status']=1;
                $response['message']="Registartion Successful";
                echo json_encode($response);

                //$query = "SELECT trip_id FROM trip WHERE trip_name= '$trname'";
                //$result = mysqli_query($conn,$query);
                //$rows = mysqli_fetch_array($result);
                //$id = $rows['trip_id'];
               
                  $last_id = mysqli_insert_id($conn);
                  echo "New record created successfully. Last inserted ID is: " . $last_id;
             
              


                if(isset($_POST["framework"]))
                        {
                                $framework = '';
                                foreach($_POST["framework"] as $row)
                                {
                                $framework = $row;
                                $query = "INSERT INTO trip_traveler(trip_id,U_id) VALUES(' $last_id','$framework')";
                                echo $query;
                                            if(mysqli_query($conn, $query))
                                            {
                                            echo 'Data Inserted';
                                            
                                            }
                      
                                
                                }
                            
                          }
                       
               
			  }
			  else
			  {
				$response['status']=0;
				$response['message']="Registartion not Successful";
				echo json_encode($response);	
			  
        }
        
        $query2 = "INSERT INTO trip_traveler(trip_id,U_id) VALUES(' $last_id','$id')";
        echo $query2;
        if(mysqli_query($conn, $query2))
        {
        echo 'Data Inserted';
        
        }
			
?>