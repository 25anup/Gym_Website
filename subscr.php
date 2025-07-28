<?php

	$con1 = mysqli_connect("localhost", "root","", "awd");
	
	if(!$con1)
	{
		echo "Not connected to server";
	}
	if(!mysqli_select_db($con1,'awd'))
	{
		echo 'Database Not Selected';
	}
	
	$Semail = $_POST['semail'];
	
	$ssql = "INSERT INTO submail (semail) VALUES ('$Semail')";
	if(!mysqli_query($con1,$ssql))
	{
		echo "Enter the details again";
	}else{
		?>
		<center><h1>We will email you shortly...</h1></center><?php
	}	
?>