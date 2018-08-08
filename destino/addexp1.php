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
  
  				<form action="addexp2.php" method="post">
                 <?php include('dbconnect.php');
                 session_start();
                 $suburb= $_SESSION['suburb'] ;
                 $_SESSION['suburb']= $suburb ;
                      ////post the form in page 2
                     ?>
                
                  <input class="btn btn-default" type="text" id="inputSuburb" value="<?php echo "$suburb" ?>"/>
                    
                       
                

				  <div class="form-group">
					  <label for="expname">Expense Name:</label>
					  <input type="text" class="form-control" name="expname" id="expname" placeholder="Enter expense name" >
				   </div>
	
					<div class="form-group">
					  <label for="expcat">Expense Category:</label>
					  <input type="text" class="form-control" id="expcat" placeholder="Enter category" name="expcat">
                    </div>
                    
                    <div class="form-group">
					  <label for="amount">Expense Amount:</label>
					  <input type="numberdemo" class="form-control" id="amount" placeholder="Enter Amount" name="amount">
					</div>
	
					
					

					<div class="form-group">
                    <label for="expdate">Expense Date:</label>
					<input type="date" name="expdate"></br></br>
					</div>

					
					</br>														
					<div class="form-group">
					<input type="submit" class="btn btn-default" value"Submit" name="submit"/>
					</div>
  				</form>
</div>

</body>
</html>
