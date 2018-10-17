<?php

	
	$con=mysqli_connect('localhost','root','','traanspotation');
	
	$vno=$_POST['vno'];
	$vtype=$_POST['vtype'];
	$assi=$_POST['assi'];
	$dri=$_POST['dri'];
	$mob=$_POST['mob'];
	$wno=$_POST['wno'];
	$email=$_POST['email'];
	
	$sql="INSERT INTO `transportation`(`vname`, `vtype`, `assign_to`, `dname`, `mobile`, `wno`, `email`) VALUES ('$vno','$vtype','$assi','$dri','$mob','$wno','$email')";
	$run=mysqli_query($con,$sql);
	header('location:trans_form.html');
?>