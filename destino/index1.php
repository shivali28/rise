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

	<meta content="noindex, nofollow" name="robots">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>

$(document).ready(function() {
// On Click SignIn Button Checks For Valid E-mail And All Field Should Be Filled
$("#login").click(function() {
var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i);
if ($("#loginemail").val() == '' || $("#loginpassword").val() == '') {
alert("Please fill all fields...!!!!!!");
} else if (!($("#loginemail").val()).match(email)) {
alert("Please enter valid Email...!!!!!!");
} else {
alert("You have successfully Logged in...!!!!!!");
$("form")[0].reset();
}
});
$("#register").click(function() {
var email = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i);
if ($("#name").val() == '' || $("#registeremail").val() == '' || $("#registerpassword").val() == '' || $("#contact").val() == '') {
alert("Please fill all fields...!!!!!!");
} else if (!($("#registeremail").val()).match(email)) {
alert("Please enter valid Email...!!!!!!");
} else {
alert("You have successfully Sign Up, Now you can login...!!!!!!");
$("#form")[0].reset();
$("#second").slideUp("slow", function() {
$("#first").slideDown("slow");
});
}
});
// On Click SignUp It Will Hide Login Form and Display Registration Form
$("#signup").click(function() {
$("#first").slideUp("slow", function() {
$("#second").slideDown("slow");
});
});
// On Click SignIn It Will Hide Registration Form and Display Login Form
$("#signin").click(function() {
$("#second").slideUp("slow", function() {
$("#first").slideDown("slow");
});
});
});

</script>


 <style type="text/css">
html {
overflow:hidden;
}
</style>


<style>
   

body{
background-color:#eeeff3;
text-align:center
}
#main{
position:relative;
margin-top:15px
}
img#logo{
margin-top:50px
}
#first{
width:308px;
margin-top:-443px;
padding:28px 25px;
background-color:#fff;
border:1px solid #000;
border-radius:5;
position:absolute;
left:50%;
margin-left:-180px;
top:0
}
#second{
width:308px;
margin-top:-514px;
padding:28px 25px;
background-color:#fff;
display:none;
border:1px solid #000;
border-radius:5;
position:absolute;
left:50%;
margin-left:-180px;
top:0
}
h3{
margin-top:0
}
input[type=text],[type=password]{
padding:7px;
width:100%;
height:40px;
margin-top:15px;
font-size:18px
}
input[type=button]{
background:linear-gradient(to bottom,#22abe9 5%,#36caf0 100%);
box-shadow:inset 0 1px 0 0 #7bdcf4;
border:1px solid #0F799E;
color:#fff;
width:255px;
height:40px;
margin-top:15px;
font-size:18px;
font-weight:700;
cursor:pointer;
text-shadow:0 1px 0 #13506D
}
input[type=button]:hover{
background:linear-gradient(to bottom,#36caf0 5%,#22abe9 100%)
}
a{
text-decoration:none;
color:#6495ed
}
p#two{
margin-bottom:0
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    margin: 20px;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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
						

						<!-- Search -->
						

						<!-- Hamburger -->
						

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
	<div class="home">
		<img id="logo" src="images/logo.png">
                                            <div id="main">
                                            <!-- Create Div First For Login Form -->
                                            <div id="first">
                                            <form action="login.php" method="post">
                                            
                                            <input id="loginemail" name="email" placeholder="Email" type="text">
                                            <input id="loginpassword" name="password" placeholder="Password" type="password">
                                            <button type="submit" class="btn">Login</button> </br>
                                            <p id="two">Don't have account? <a class="signup" href="#" id="signup">Sign up here</a></p>
                                            </form>
                                            </div>
                                            <!-- Create Div Second For Signup Form-->
                                            <div id="second">
                                            <form action="registration.php" id="form" method="post" name="form">
                                            
                                            <input id="name" name="name"placeholder="Full Name" type="text">
                                            <input id="registeremail" name="email" placeholder="Email" type="text">
                                            <input id="registerpassword" name="password" placeholder="Password" type="password">
                                            <input id="contact" name="mobile" placeholder="Contact Number" type="text">
                                            <input type="submit" form="form" value="Submit" class="btn"/></br>
                                            <p id="two">Already have an account? <a class="signin" href="#" id="signin">Sign in</a></p>

                            </form>
		
		</div>


	</div>

	<!-- Find Form -->

	

	<!-- Top Destinations -->

	
			

				
</body>
</html>

			