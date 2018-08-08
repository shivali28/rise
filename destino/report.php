<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  
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



   </script> 

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

</style>
</head>
<body>

<div class="container">
  
  				
                

<?php include('dbconnect.php');
            session_start();
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
               
                <div class="form-group">      
                <button  class="btn" name="holdname" value="<?php echo " $suburb "?>" ><?php echo " $suburb "?></button>
                  

                  </div>  
                  
                  <div class="form-group">
					  <label for="expname">Your total expense is:<?php echo " $total "?></label>
					  
                   </div>
                   <form action="addexp1.php" method="post">
                <div class="form-group">
                <button name="subject" type="submit" value="HTML " class="btn">Add Expense</button>
					</div>
                  </form>
                  
                  <form action="graph.php" method="post">
                <div class="form-group">
                <button name="subject" type="submit" value="HTML " class="btn">Report</button>
					</div>
  				</form>
</div>