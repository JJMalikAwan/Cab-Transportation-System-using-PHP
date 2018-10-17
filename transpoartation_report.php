<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Transportation form</title>
      
	  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <script src="bootstrap/jquery-3.2.1.js"></script>
	   <script src="bootstrap/js/bootstrap.min.js"></script>
	   
	    <style>
	   
		html, body {
			text-align: center;
			
			background: #blue; /* For browsers that do not support gradients */
			background: linear-gradient(to right, blue, white); /* Standard syntax */
			overflow-x: hidden;
			}
			
			#na li a{color:white;}
			#na li a:hover{color:royalblue;}
	   
	   </style>
	
</head>
<body>

		<h1>Report</h1>
		
		<div class="container" style="background-color:transparent" id="na">
			<ul class="nav nav-tabs">
				<li><a href="Availablity.php" target="frm" >Availablity</a></li>
				<li><a href="#">Visits</a></li>
				<li><a href="#">Allotment Details</a></li>
			</ul>
			
		</div>
		
		<div class="container">
			<iframe name="frm" class="form-control" style="margin-top:30px; height:450px;background-color:transparent;"></iframe>
		</div>

</body>
</html>