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
				<div class="col-md-6">
					<ul class="list-group text-center" style=" padding-left:25%; padding-right:25%;">
						<?php
							$page = 1;
							$totalCnt = 0;
							$resPerPage = 20;
							if($res = $conn->query("SELECT count(*) as c, category FROM apicrawldata GROUP BY category")) {
								$page = 1;
								if(isset($_GET["page"])) {
									$page = $_GET["page"];
								}
								$totalCnt = $result->num_rows;
								for ($row_no = ($page-1)*$resPerPage; $row_no < $page*$resPerPage; $row_no++) {
									$res->data_seek($row_no);
									$row = $res->fetch_assoc();
									if(trim($row['category']) != "" ){
										echo "<a  class=\"list-group-item\" href=\"\">" . $row['category'] . "<span class=\"badge\">". $row['c']."</span></a>\n";
									} else {
										echo "<a  class=\"list-group-item\" href=\"\"> <br><span class=\"badge\">". $row['c']."</span></a>\n";
									
									}
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
			
			<nav>
			  <ul class="pagination">
			  	<?php
			  		//prev arrow
			  		if($page > 1) {
						$params = array_merge($_GET, array("page" => ($page-1)));
						$new_query_string = http_build_query($params);
						echo "<li ><a href=\"".$new_query_string."\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>";
			  		} else {
			  			echo "<li class=\"disabled\"><span aria-hidden=\"true\">&laquo;</span></li>";
			  		}
			  		//numbers
			  		echo $totalCnt;
			  		$totalPage = ceil($totalCnt/$ResPerPage);
			  		echo $totalPage;
			  		for($p = 1; $p <= $totalPage; $p++) {
			  			echo $p;
			  			
			  			$params = array_merge($_GET, array("page" => ($p)));
						$new_query_string = http_build_query($params);
						if($p == $totalPage) {
			  				echo "<li class=\"active\"><a href=\"".$params."\">".$p."<span class=\"sr-only\">(current)</span></a></li>";
			  			} else {
			  				echo "<li><a href=\"".$params."\">".$p."<span class=\"sr-only\">(current)</span></a></li>";
			  			}
			  		}
			  		
			  		
			  	?>
			  </ul>
			</nav>
    	</div>
    	
    	
    	
    	
    	
    	
    	
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