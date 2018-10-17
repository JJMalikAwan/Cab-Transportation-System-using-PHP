<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

	 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <script src="bootstrap/jquery-3.2.1.js"></script>
	   <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background-color:transparent">


	<div class="container">
	
		<form action="#" method="post">
		<div class="row">
			<div class="col-sm-8">
				<label style="color:#FFFFFF; font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold">Enter Vehical Number : </label>
				<input type="text" name="did" class="form-control" style="background-color:transparent; border:1px solid white; color:#FFFFFF" />
			</div>
			<div class="col-sm-4">
				<input type="submit" name="btn" value="Search Driver Detail" class="btn btn-danger pull-right" style="padding-left:40px; padding-right:40px; margin-top:20px" />
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
		$id=$_POST['did'];
		
		$sql="SELECT * FROM `alloat` WHERE `vac_no`='$id'";
		$run=mysqli_query($con,$sql);
		
		$p=mysqli_num_rows($run);
		
		if($p==0)
		{
			?><span class="form-control" style="color:maroon; font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; font-weight:bold; margin-top:20px; width:800px; margin-left:100px">Vehical Does Not Exist....</span><?php
		}
		else
		{
			$result=mysqli_fetch_array($run);
			?>
				<div class="container" style="margin-top:20px; box-shadow:0px 8px 16px 0px rgba(0,0,0,.5); padding:10px; background:rgba(0,0,0,.3); border:1px solid white; border-radius:20px">
					<div class="row">
						<div class="col-sm-12" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-size:18px; text-align:center"><?php echo $result['dri_name'];  ?><hr /></div>
						
					</div>
					<div class="row">
						<div class="col-sm-6" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-weight:bold">
						Guest Mobile Number :
							<input type="text" value="<?php echo $result['guest_mob'];  ?>" readonly="true" class="form-control" />
						</div>
						<div class="col-sm-6" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-weight:bold">
						Guest ID :
							<input type="text" value="<?php echo $result['g_id'];  ?>" readonly="true" class="form-control" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-weight:bold">
						From :
							<input type="text" value="<?php echo $result['from'];  ?>" readonly="true" class="form-control" />
						</div>
						<div class="col-sm-6" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-weight:bold">
						To :
							<input type="text" value="<?php echo $result['to'];  ?>" readonly="true" class="form-control" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-weight:bold">
						Guest Name :
							<input type="text" value="<?php echo $result['guest_name'];  ?>" readonly="true" class="form-control" />
						</div>
						<div class="col-sm-6" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-weight:bold">
						Driver Mobile Number :
							<input type="text" value="<?php echo $result['dri_mob'];  ?>" readonly="true" class="form-control" />
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-weight:bold">
						Vehical Type :
							<input type="text" value="<?php echo $result['vac_type'];  ?>" readonly="true" class="form-control" />
						</div>
						<div class="col-sm-6" style="color:#FFFFFF; font-family:'Times New Roman', Times, serif; font-weight:bold">
						Vehical Number :
							<input type="text" value="<?php echo $result['vac_no'];  ?>" readonly="true" class="form-control" />
						</div>
					</div>
				</div>
			<?php
		}
	}
?>
