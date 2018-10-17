<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Transportation form</title>
      
	  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <script src="bootstrap/jquery-3.2.1.js"></script>
	   <script src="bootstrap/js/bootstrap.min.js"></script>
	   
</head>
<body style="background-color:transparent">

	<div class="container">
		<form action="#" method="post">
		<div class="row">
			<div class="col-sm-8">
				<label style="color:white">Search By Vehicle Number :</label>
				<input type="text" name="type" class="form-control" placeholder="for eg : jh10ay1811" style="background-color:transparent; border:1px solid white; color:#FFFFFF"/>
			</div>
			
			<div class="col-sm-4">
				<input type="submit" value="Search" name="btn" class="btn btn-danger" style="margin-top:25px">
				<input type="submit" value="Search All Vehicle" name="all" class="btn btn-danger" style="margin-top:25px">
			</div>	
		</div>
		</form>
		
	</div>

</body>
</html>



<?php
	
	$con=mysqli_connect('localhost','root','','traanspotation');
	
	if(isset($_POST['btn']))
	{
		$vac_no=$_POST['type'];
		
		$sql="SELECT * FROM `visits` WHERE `vac_no`='$vac_no'";
		$run=mysqli_query($con,$sql);
		
		$p=mysqli_num_rows($run);
		
		if($p==0)
		{
			?><span class="form-control" style="color:maroon; font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; font-weight:bold; margin-top:20px; width:800px; margin-left:100px">Please Enter Vehical Number First....</span><?php
		}
		else
		{
			?>
				<table class="table-bordered" style="width:800px; margin-top:30px">
					<tr style="background-color:#FFFFFF; color:maroon; padding-left:30px">
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Vehicle Type</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Vehicle Number</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">To</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">From</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Date & Time</td>
					</tr>
					
					<?php
						while($result=mysqli_fetch_array($run))
						{
							?>
								<tr>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['vac_type'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['vac_no'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['to'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['from'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['date'];  ?></td>
								</tr>
							<?php
						}
					?>
					
					
				</table>
			<?php
		}
	}

	if(isset($_POST['all']))
	{
		$sql="SELECT * FROM `visits`";
		$run=mysqli_query($con,$sql);
		
		$p=mysqli_num_rows($run);
		
		if($p==0)
		{
			echo $vac_no.'Not Availabal!!!!!';
		}
		else
		{
			?>
				<table class="table-bordered" style="width:800px; margin-top:30px">
					<tr style="background-color:#FFFFFF; color:maroon; padding-left:30px">
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Vehicle Type</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Vehicle Number</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">To</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">From</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Date & Time</td>
					</tr>
					
					<?php
						while($result=mysqli_fetch_array($run))
						{
							?>
								<tr>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['vac_type'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['vac_no'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['to'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['from'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['date'];  ?></td>
								</tr>
							<?php
						}
					?>
					
					
				</table>
			<?php
		}
	}


?>
