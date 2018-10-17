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
				<label style="color:white">Select Vehicle Type :</label>
					<select name="type" class="form-control">
						<option>----Select Vehicle Type----</option>
						<option>Bus</option>
						<option>Car</option>
						<option>Van</option>
					</select>
			</div>
			
			<div class="col-sm-4">
				<input type="submit" value="Search" name="btn" class="btn btn-danger btn-block" style="margin-top:25px">
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
		$type=$_POST['type'];
		
		$sql="SELECT * FROM `availablity` WHERE `vac_type`='$type'";
		$run=mysqli_query($con,$sql);
		
		$p=mysqli_num_rows($run);
		
		if($p==0)
		{
			echo $type.'Not Availabal!!!!!';
		}
		else
		{
			?>
				<table class="table-bordered" style="width:800px; margin-top:30px">
					<tr style="background-color:#FFFFFF; color:maroon; padding-left:30px">
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Vehicle Type</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Vehicle Number</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Total Seats</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Booked Seats</td>
						<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold">Avalibale Seats</td>
					</tr>
					
					<?php
						while($result=mysqli_fetch_array($run))
						{
							?>
								<tr>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['vac_type'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['vac_no'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['total_seat'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['book_seat'];  ?></td>
									<td style="padding:10px; text-align:center; font-family:'Times New Roman', Times, serif; font-weight:bold; color:#FFFFFF"><?php echo $result['total_seat']-$result['book_seat'];  ?></td>
								</tr>
							<?php
						}
					?>
					
					
				</table>
			<?php
		}
	}

?>