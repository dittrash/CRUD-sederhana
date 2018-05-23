<?php
	include('connect.php');
	$id = $_REQUEST['id'];
	//fetch image info
	$result = mysqli_query($conn,'SELECT * FROM mobil WHERE kode='.$id);
	$selectRow = mysqli_fetch_array($result);
	$image = '../'.$selectRow[7];
	//delete data
	$sql = mysqli_query($conn,'DELETE FROM mobil WHERE kode='.$id);
	if (!$sql){
		echo 'failed to delete record';
	}
	//delete image
	if (!unlink($image)){
		echo 'failed to delete image';
	}
	else{
		header('Location:../index.php');
	}
?>
