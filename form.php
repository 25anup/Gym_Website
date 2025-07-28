<?php

	$con = mysqli_connect("localhost","root","","awd");
	
	if(!$con)
	{
		echo "Not connected to server";
	}
	if(!mysqli_select_db($con,'awd'))
	{
		echo 'Database Not Selected';
	}
	
	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Phone = $_POST['phone'];
	$Subject = $_POST['subject'];
	
	$sql = "INSERT INTO contact (firstname,lastname,email,phone,subject) VALUES ('$Firstname','$Lastname','$Email','$Phone','$Subject')";
	
	if(!mysqli_query($con,$sql))
	{
		echo "<center><h1 style='color:red;'>Enter the details again</h1></center>";
	}
	else 
	{
		?>
		<center><h1 style="color:green;">Thankyou for contacting us</h1></center><?php
	}
?>