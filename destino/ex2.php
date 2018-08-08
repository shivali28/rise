<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Appraise Register Form Responsive Widget Template :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Appraise Register Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Custom Theme files -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<!--//fonts-->
</head>

<body>

		<?php
         
         $suburb= $_SESSION['suburb'] ;
         $_SESSION['suburb']= $suburb ;
              ////post the form in page 2
             ?>


	<!-- login -->
	<h1 class="wthree">ADD EXPENSE</h1>
	<div class="login-section-agileits">
		
		<form action="#" method="post">
				<div class="w3ls-icon">
						<button  class="button1"  name="holdname" value="<?php echo " $suburb "?>" ><?php echo " $suburb "?></button>
					</div>
			<div class="w3ls-icon">
				
				<input type="text" class="lock" name="name" placeholder="Expense name" required="" />
			</div>
			<div class="w3ls-icon">
				
				<input type="email" class="user" name="email" placeholder="Expense Category" required="" />
			</div>
			<div class="w3ls-icon">
				
				<input type="text" class="lock" id="password1" name="password" placeholder="Expense Amount" required="" />
			</div>
			<div class="w3ls-icon">
				
				<input type="date" class="lock" id="password2" name="confirm password" placeholder="Expense Date" required="" />
			</div>
			<input type="submit" value="register now">
		</form>
	</div>
	<p class="footer-agile">© 2017 Appraise Register Form. All Rights Reserved | Design by
		<a href="http://w3layouts.com/"> W3layouts</a>
	</p>


	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords do not Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>

</body>

</html>