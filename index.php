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
			
			#na li a{color:white; font-weight:bold; font-family:Georgia, "Times New Roman", Times, serif; font-size:18px}
			#na li a:hover{color:royalblue;}
	   
	   </style>
	
</head>
<body>

		<h1 style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-size:3em">Transpoartation Report</h1>
		<hr>
		<div class="container" style="background-color:transparent" id="na">
			<ul class="nav nav-tabs">
				<li><a href="Availablity.php" target="frm"  >Availablity</a></li>
				<li><a href="visits.php" target="frm">Visits</a></li>
				<li><a href="allotment.php" target="frm">Allotment Details</a></li>
				<li><a href="trans_form.html" target="frm">Transpoartation Form</a></li>
			</ul>
			
		</div>
		
		<div class="container" id="frame">
			<iframe name="frm" class="form-control" style="margin-top:30px; height:500px; width: 100%; background-color:transparent; border:2px solid white;" src="Availablity.php"></iframe>
		</div>

</body>
</html>
