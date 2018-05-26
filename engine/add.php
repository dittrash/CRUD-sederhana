<?php
	include ('connect.php');
	$id = $_POST['id'];
	$model = $_POST['model'];
	$manufacturer = $_POST['manufacturer'];
	$trans = $_POST['trans'];
	$engine = $_POST['engine'];
	$capacity = $_POST['capacity'];
	$power = $_POST['power'];

	//image uploader
	$dir = '../images/';
	$file = $dir .basename($_FILES['image']['name']);
	$path = 'images/'.basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $file));
  	//recording data
	$sql = mysqli_query($conn,"INSERT INTO mobil VALUES('".$id."','".$model."','".$manufacturer."','".$trans."','".$engine."','".$capacity."','".$power."','".$path."')");
	if(!$sql){
		echo 'failed to insert record'.mysqli_error($conn);
	}
	else{
		header('Location:../index.php');
	}
?>