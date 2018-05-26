<?php
	include ('connect.php');
	$id = $_POST['id'];
	$model = $_POST['model'];
	$manufacturer = $_POST['manufacturer'];
	$trans = $_POST['trans'];
	$engine = $_POST['engine'];
	$capacity = $_POST['capacity'];
	//fetch image info
	$power = $_POST['power'];
	$result = mysqli_query($conn,'SELECT * FROM mobil WHERE kode='.$id);
	$selectRow = mysqli_fetch_array($result);
	$image = '../'.$selectRow[7];
	//image changer
	if($_FILES['image']['name']==''){
		$path = $selectRow[7];
	}
	else{
		//delete previous image
		unlink($image);
		//upload new image
		$dir = '../images/';
		$file = $dir .basename($_FILES['image']['name']);
		$path = 'images/'.basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], $file);
	}
	//data updater
	$sql = mysqli_query($conn,"UPDATE mobil SET kode='".$id."',
												model='".$model."',
												pabrikan='".$manufacturer."',
												transmisi='".$trans."',
												mesin='".$engine."',
												kapasitas='".$capacity."',
												tenaga='".$power."',
												gambar='".$path."'
			WHERE kode='".$id."'");
	if(!$sql){
		echo 'failed to update record'.mysqli_error($conn);
	}
	else{
		header('Location:../index.php');
	}
?>