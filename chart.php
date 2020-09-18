<?php

  include_once'regista_equipa.php';
  include_once'connection.php';
  session_start();
  
    
	$conn = mysqli_connect($host, $usuario, $senha, $database);

	$sql = "SELECT * FROM requisito";
					
    $result = $conn->query($sql);
   
	
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['tipo', 'prioridade'],
          <?php 
          
          while ($row = $result-> fetch_assoc()) {
            echo "['" . $row['tipo']."',". $row['custo']."],";
        }

          ?>
        ]);

        var options = {
          title: 'My Daily Activities'
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