<!DOCTYPE html>
<?php include('dbconnect.php');
session_start();
$email=$_SESSION['email'];
 
 
 $trname=$_SESSION['suburb'];
 

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
 $query1 = "SELECT exp_name,exp_amount FROM expense WHERE trip_id= '$trid' and U_id='$id'";
 $result=mysqli_query($conn, $query1);
 
 

            
?>
<html lang="en" >
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
<link rel="icon" type="image/png" href="images4/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor4/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts4/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts4/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor4/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor4/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor4/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css4/util.css">
	<link rel="stylesheet" type="text/css" href="css4/main.css">

	<meta content="noindex, nofollow" name="robots">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);




      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['exp_name', 'exp_amount'],
          <?php
                 while($row=mysqli_fetch_array($result))
                 {
                        
                    echo "['" .$row['exp_name']."',".$row['exp_amount']."],";


                 }

            ?>

        ]);

        var options = {
          title: 'Category wise Expense'
        };



        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<style>


    .button {
    background-color: #131A2F;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width:240px;
    border-radius:4px;
}

.button1 {
    background-color:#EC5873;
    color: black;
    border: 2px solid #FE861F;
    width:240px; /* Green */
}
#l1 {
	display:none;
}
#l2 {
	display:none;
}
    </style>



</head>


<body>

    
<?php 
          $suburb = $_POST['suburb'];
          $_SESSION['suburb'] = $suburb;
          $email=$_SESSION['email'];
          $_SESSION['email'] = $email;

          

  
 
            $response = array();
            $query = "SELECT U_id FROM trip_user WHERE U_email= '$email'";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_array($result);
            $id = $rows['U_id'];

            $response = array();
            $query = "SELECT trip_id FROM trip WHERE trip_name= '$suburb'";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_array($result);
            $trid = $rows['trip_id'];


          $response = array();
            $query = "SELECT sum(exp_amount)as total FROM expense where trip_id= '$trid' and U_id='$id' ";
            $result = mysqli_query($conn,$query);
            $rows = mysqli_fetch_array($result);
            $total = $rows['total'];
          ?>


<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>destino</div>
								<div>travel agency</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item active"><a href="#">Home</a></li>
								<li class="main_nav_item"><a href="about.html">About us</a></li>
								<li class="main_nav_item"><a href="offers.html">Offers</a></li>
								<li class="main_nav_item"><a href="news.html">News</a></li>
								<li class="main_nav_item"><a href="contact.html">Contact</a></li>
							</ul>
						</nav>

						<!-- Search -->
						

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
    <div class="last">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="last_background parallax-window" data-parallax="scroll" data-image-src="images/last.jpg" data-speed="0.8"></div>
        
		<div class="container" style="margin-top:200px;margin-left:440px;">
			<div class="row">
				<div class="last_logo"><img src="images/last_logo.png" alt=""></div>
				<div class="col-lg-6 last_col">
					<div class="last_item">
						<div class="last_item_content">
                       
                            <button  class="button1"  name="holdname" value="<?php echo " $suburb "?>" ><?php echo " $suburb "?></button>
                            
                   
							
							<div class="last_title">
                            <label for="expname">Your total expense is:<?php echo " $total "?></label>
                            </div>
                        
                          
                            <button class="button" name="subject" type="submit" onclick="toggle_div_fun('l1');">Add Expense</button>
                            
                           
                           
                            
                            <button class="button" name="subject" type="submit"  onclick="toggle_div_fun('l2');">Report</button>
                           
                            
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	
	
	<!-- Home -->

</div>
<div class="limiter" id="l1">
<?php 

		$suburb= $_SESSION['suburb'] ;
		$_SESSION['suburb']= $suburb ;
			 ////post the form in page 2
?>
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
					<form action="addexp2.php" method="post">
					

					<span class="login100-form-title p-t-20 p-b-45">
                       
                        <input class="btn btn-default" type="text" id="inputSuburb" value="<?php echo "$suburb" ?>"/>
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                       
                        <input type="text" class="input100" name="expname" id="expname" placeholder="Enter expense name" >
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        
                        <input type="text" class="input100" id="expcat" placeholder="Enter category" name="expcat">
						<span class="focus-input100"></span>
						
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        
                    
                        <input type="date" name="expdate" class="input100" placeholder="expense date"></br></br>
						<span class="focus-input100"></span>
						
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        
                        
                        <input type="numberdemo" class="input100" id="amount" placeholder="Enter Amount" name="amount">
						<span class="focus-input100"></span>
						
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Add Expense
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>


<!-- graph-->
<div class="limiter" id="l2">
<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">

    <div id="piechart" ></div>
</div>
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>

	
	<script src="vendor4/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor4/bootstrap/js/popper.js"></script>
	<script src="vendor4/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor4/select2/select2.min.js"></script>

    <script src="js4/main.js"></script>
    
    <script type="text/javascript">
    function toggle_div_fun(id) {

       var divelement = document.getElementById(id);

       if(divelement.style.display == 'none')
          divelement.style.display = 'block';
       else
          divelement.style.display = 'none';
    }
</script>
</body>
</html>