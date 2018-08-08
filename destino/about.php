<?php include('dbconnect.php');
session_start();?>

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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Angling Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tags -->
	<!-- Calendar -->
	<link rel="stylesheet" href="css2/jquery-ui.css" />
	<!-- //Calendar -->
	<!--stylesheets-->
	<link href="css2/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,700" rel="stylesheet">


	
		<style>
		.btn-file {
			position: relative;
			overflow: hidden;
		}
		.btn-file input[type=file] {
			position: absolute;
			top: 0;
			right: 0;
			min-width: 100%;
			min-height: 100%;
			font-size: 100px;
			text-align: right;
			filter: alpha(opacity=0);
			opacity: 0;
			outline: none;
			background: white;
			cursor: inherit;
			display: block;
		}
		
		#img-upload{
			width: 100%;
		}
		button, input, select, textarea {
    	font-family: -webkit-pictograph;
    	font-size: inherit;
    	line-height: inherit;
    	color: white;
}

b.caret{
	display:none !important;
}


element.style {
    width: 502px;
    overflow: hidden;
    text-overflow: ellipsis;
}
#home1 {
	display:none;
}
		
</style>
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
    margin: 27px 600px;
    cursor: pointer;
    width:240px;
    border-radius:4px;
}
</style>
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
						<div class="search">
							<form action="#" class="search_form">
								<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
								<button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.php">Trips</a></li>
					<li class="menu_item menu_mm"><a href="offers.html">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image:url(images/home.jpg)"></div>
		<div class="home_content">
			<div class="home_content_inner">
				<div class="home_text_large">discover</div>
				<div class="home_text_small">Discover new worlds</div>
			</div>
		</div>
	</div>

	

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
	
		<div class="container">
			<div class="row">
					<div class="col">
							<div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">
									<?php
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
								<!-- Popular Item -->
								
								<div class="popular_item">
									<a href="offers.html">
											<img src="images1/<?php echo $row['trip_image'];?>" alt="https://unsplash.com/@sgabriel" style="height:250px;width:450px;float:left;">
										<div class="popular_item_content">
										<form action="report1.php" method="post">
										<button  class="btn" name="suburb" value="<?php echo $row['trip_name'];?>" ><?php echo $row['trip_name'];?></button>
										</form>	
										</div>

									</a>	
								</div>
								<?php
							    }
							    ?>
                                
                               
							</div>
						</div>
			</div>
        </div>
      
                    <div class="form-group">
						
                    <button class="button" onclick="toggle_div_fun('home1');" name="subject" type="submit">ADD TRIP</button>
					</div>
  				
	</div>
	
<div class="home" id="home1">
		<div class="home_background" style="background-image:url(images1/b5.jpg)"></div>
    <h1 class="header-w3ls">
		Add Your Trip</h1>

	<div class="appointment-w3">
		<form action="temp2.php" method="post">

			<div class="main">
				<div class="form-left-w3l">

					<input type="text" class="top-up" name="trname" id="trname" placeholder="Enter trip name" >
				</div>
			</div>
			<div class="main">
				<div class="form-left-w3l">

					<input type="email" class="top-up" name="email" id="trname" placeholder="Enter email" >
				</div>
			</div>
			
			<div class="main">
				<div class="form-add-w3ls">
					</br><label for="trimage" style="color: white;">	Choose  image:</label>
					<input type="file" name="trimage" placeholder="choose image" ></br>
				</div>
			</div>

			<div class="main">
				<div class="form-right-w3ls ">
				</br><!--	<label for="trname" style="color: white;">	Strat Date:</label>
					<input type="date" name="edate" placeholder="start date">-->
					<input id="datepicker1" name="sdate" type="date" placeholder="Strat Date" required="">
					<div class="clearfix"></div>
				</div>

				<div class="form-right-w3ls ">
				</br><!--	<label for="trname" style="color: white;">	End date:</label>
					<input type="date" name="edate" placeholder="end date">-->
					<input id="datepicker2" name="edate" type="date" placeholder="End Date" required="">
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="main">
				<div class="form-left-w3l">
					<label for="members" style="color: white;">choose members:</label>
					
                    <select id="framework" name="framework[]" multiple class="form-control">
			                 <?php 
                                $email = $_SESSION['email'];
                            
                            
                                $query="select U_id,U_email from trip_user where not U_email='$email'";
                                
                                
				                $result=mysqli_query($conn, $query);
			                    ?>
			                <?php
				                while($row=mysqli_fetch_array($result))
			                {
			                ?>
			                    <option value="<?php echo $row['U_id'];?>"><?php echo $row['U_email'];?></option>
			                <?php
			                    }
			                ?>  
                    </select>
				</div>
				
			</div>
		
			
			
			<div class="btnn">
				<input type="submit" value="Submit">
			</div>
			
		</form>
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

<script type="text/javascript">
    function toggle_div_fun(id) {

       var divelement = document.getElementById(id);

       if(divelement.style.display == 'none')
          divelement.style.display = 'block';
       else
          divelement.style.display = 'none';
    }
</script>

<!-- js -->
	<script type='text/javascript' src='js2/jquery-2.2.3.min.js'></script>
	<!-- //js -->
	<!-- Calendar -->
	<script src="js2/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->


<script>

$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Members',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
});
</script>
<script>

$('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"temp2.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
	$('#framework option:selected').each(function(){
	 $(this).prop('selected', false);
	});
	$('#framework').multiselect('refresh');
	alert(data);
   }
  });
 });
 
 
});

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

   </script> 


</body>
</html>