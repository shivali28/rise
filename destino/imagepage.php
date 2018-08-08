

<!DOCTYPE html>

<html lang="en">
<head>
<title>Destino</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
.container {
    position: relative;
    width: 100%;
    max-width: 400px;
}
.btn
{
    
}

.container img {
    width: 100%;
    height: auto;

}

.container .btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #555;
    color: white;
    font-size: 16px;
    padding: 6px 12px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container .btn:hover {
    background-color: black;
}

.imageDiv
        {
           
           
        
            border-radius: 2px 2px 2px 2px;
            -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        }
.overlap{
    top: -200px;
position: relative;

}
}
}
</style>
<script> 
 
            var buttons = document.getElementsByClassName('btn');
            for (var i=0 ; i < buttons.length ; i++){
              (function(index){
                buttons[index].onclick = function(){
                  alert("I am button " + index);
                };
              })(i)
            }
        
</script>
</head>
<body>


<?php include('dbconnect.php');
session_start();
 $email=$_SESSION['email'];
  
 
$response = array();
 $query = "SELECT U_id FROM trip_user WHERE U_email= '$email'";
 $result = mysqli_query($conn,$query);
 $rows = mysqli_fetch_array($result);
 $id = $rows['U_id'];

$query="select trip_image,trip_name from trip INNER JOIN trip_traveler on trip.trip_id=trip_traveler.trip_id where trip_traveler.U_id=$id";
$result=mysqli_query($conn,$query);
?>
<?php
while($row=mysqli_fetch_array($result))
{
    


?>
<form action="report.php" method="post">
<div class="container">
 
<img src= "images1/<?php echo $row['trip_image'];?>" class="img-rounded" alt="Cinque Terre" style="width:90%" align="middle" hspace="20" vspace="20">

<button  class="btn" name="suburb" value="<?php echo $row['trip_name'];?>" ><?php echo $row['trip_name'];?></button>
</div>
</form>

<?php
}
?>              <form action="temp1.php" method="post">
                <div class="form-group">
					<input type="submit" class="btn" value"Submit" name="submit"/>
					</div>
  				</form>





				

	
	




</body>
</html>
