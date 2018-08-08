<?php 
include('dbconnect.php');
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






<html>
  <head>
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
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>

    
  </body>
</html>