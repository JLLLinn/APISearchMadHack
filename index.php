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
  	
	<div class="container" style = "height: 100%;">
		<!-- This is the nav bar-->
		<div class = "row">
			<ul class="nav nav-tabs">
			  <li class="active">
				<a href="#api-list">APIs</a>
			  </li>
			  <li><a href="#download">Download</a></li>
			  <li><a href="#">...</a></li>
			</ul>
		</div>
	
		<h1 class="row text-center">Ap-Eye</h1>
		
		<div id="api-list">
			<div class = "row" style = "height: 100%;">
				<div class="col-md-6 text-center well " style="height: 85%; overflow: auto;">
					<ul class="list-group" style="width:50%">
						<?php
							if($res = $conn->query("SELECT count(*) as c, category FROM apicrawldata GROUP BY category")) {
								while ($row = $res->fetch_assoc()) {
									echo "<a  class=\"list-group-item\" href=\"\">" . $row['category'] . "<span class=\"badge\">". $row['c']."</span></a>\n";
								}
							}
						?>
					
				
					</ul>
				</div>
				
				<div class="col-md-6 text-center">
					<a class="btn btn-lg " href="#">
					<i class="fa fa-android fa-2x pull-left"></i> Download our <br> Android App</a>
				</div>
			</div>
    	<div id="api-list">
    	
    	
    	
    	
    	
    	
    	
    	<div id="download">
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
    	
    	
    </div>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>