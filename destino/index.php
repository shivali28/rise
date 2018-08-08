<!DOCTYPE html>

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

	<meta content="noindex, nofollow" name="robots">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>





</head>


<body>


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
								<li class="main_nav_item"><a href="about.php">Trips</a></li>
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

	
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image:url(images/home.jpg)"></div>
		<div class="home_content">
			<div class="home_content_inner">
				
			</div>
		</div>
	</div>

			

	<!-- Special -->

	<div class="special">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Your Trips</h2>
						<div>take a look at these Trips</div>
					</div>
				</div>
			</div>
		</div>

		
	<form action="report1.php" method="post">
		<div class="special_content">
			<div class="special_slider_container">
				<div class="owl-carousel owl-theme special_slider">
					
					<!-- Special Offers Item -->
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
					
			

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images1/<?php echo $row['trip_image'];?>" alt="https://unsplash.com/@varshesh" style="height:550px;"></div>
							<div class="special_item_content text-center">
							<button  class="btn" name="suburb" value="<?php echo $row['trip_name'];?>" ><?php echo $row['trip_name'];?></button>
							</div>

							
						</div>
					</div>
					<?php
					}
					?>

					<!-- Special Offers Item -->
					

					<!-- Special Offers Item -->
					

					<!-- Special Offers Item -->
					
				</div>

				<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
					<img src="images/special_slider.png" alt="">
				</div>
			</div>
		</div>
				</form>
	</div>

	<!-- Newsletter -->

	
	<!-- Footer -->

	
				<!-- Footer Column -->
				

			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>