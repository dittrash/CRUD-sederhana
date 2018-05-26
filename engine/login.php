<?php
	require('connect.php');
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['logged'] = $username;
		header('Location:../index.php');
	}
	else{
		header('Location:../login.php');
	}
?>