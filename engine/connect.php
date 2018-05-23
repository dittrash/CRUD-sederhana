<?php
	$conn = mysqli_connect('localhost','root','');
	if (!$conn){
		echo 'database connection failed';
	}
	$select = mysqli_select_db($conn,'tugaspbw');
	if (!$select){
		echo 'database selection failed';
	}
?>