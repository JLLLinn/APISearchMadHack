<?php
	require_once('connect.php');	
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ap-Eye</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
  </head>
  <body>
  	<div class="container">
  		<!-- This is the nav bar-->
  		<div class = "row">
			<ul class="nav nav-tabs">
			  <li class="active">
				<a href="#">Home</a>
			  </li>
			  <li><a href="#">...</a></li>
			  <li><a href="#">...</a></li>
			</ul>
		</div>
		
    	<h1 class="row text-center">Ap-Eye</h1>
    	
    	
    	<div class = "row">
    		<div class="col-md-6 text-center">
    		<div class="list-group">
				<?php
					if($res = $conn->query("SELECT category FROM apicrawldata GROUP BY category")) {
						while ($row = $res->fetch_assoc()) {
							echo "<a href=\"#\" class=\"list-group-item\">" . $row['category'] . "</a>\n";
						}
					}
				?>
					
				
			</div>
    		</div>
    			
  			<div class="col-md-6 text-center">
  				<a class="btn btn-lg " href="#">
  				<i class="fa fa-android fa-2x pull-left"></i> Download our <br> Android App</a>
  			</div>
    	</div>
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	<div class = "row">
    		<div class="col-md-6 text-center">
    			<a class="btn btn-lg" href="#">
  				<i class="fa fa-apple fa-2x pull-left"></i> Download our <br> iPhone App</a>
    		</div>
    			
  			<div class="col-md-6 text-center">
  				<a class="btn btn-lg " href="#">
  				<i class="fa fa-android fa-2x pull-left"></i> Download our <br> Android App</a>
  			</div>
    	</div>
    	
    	
    </div>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>