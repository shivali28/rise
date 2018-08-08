<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
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
<!--===============================================================================================-->
</head>
<body>
		<?php include('dbconnect.php');
		session_start();
		$suburb= $_SESSION['suburb'] ;
		$_SESSION['suburb']= $suburb ;
			 ////post the form in page 2
			?>
	<div class="limiter">
		
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
	
	

	
<!--===============================================================================================-->	
	<script src="vendor4/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor4/bootstrap/js/popper.js"></script>
	<script src="vendor4/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor4/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js4/main.js"></script>

</body>
</html>