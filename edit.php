<?php
	include('engine/session.php');
	include('engine/connect.php');
	$id = $_REQUEST['id'];
	$result = mysqli_query($conn, 'SELECT * FROM mobil WHERE kode='.$id);
	$record = mysqli_fetch_array($result);
?>
<html>
<head>
	<title>Daftar Mobil MPV</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div id="header" style="width: 100%;height: 100px">
		<h1 align="center">Ubah Data</h1>	
	</div>
	<div id="left" style="width: 30%;float: left;">
		&nbsp
	</div>
	<div id="container" style="width: 40%;float: left;">
		<a href="index.php"><button class="button"><< Kembali</button></a><br/>
		<form action="engine/update.php" method="POST" enctype="multipart/form-data">
			<table width="500px" class="table-fill">
				<?php
					echo '<tr>';
					echo '<td class="text-right">Kode</td><td><input type="text" name="id" value="'.$record[0].'" readonly="readonly"/></td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td class="text-right">Model</td><td><input type="text" name="model" value="'.$record[1].'"/></td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td class="text-right">Pabrikan</td><td><input type="text" name="manufacturer" value="'.$record[2].'"/></td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td class="text-right">Transmisi</td><td><select name="trans">
							<option>'.$record[3].'</option>
							<option>AT</option>
							<option>MT</option>
							<option>AT/MT</option></td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td class="text-right">Mesin</td><td><input type="text" name="engine" value="'.$record[4].'"/></td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td class="text-right">Kapasitas Mesin</td><td><input type="number" name="capacity" value="'.$record[5].'" size="2"/> CC</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td class="text-right">Tenaga<td><input type="number" name="power" value="'.$record[6].'" size="2"/> hp</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td class="text-right">Gambar</td><td><img src="'.$record[7].'" width="200px"/>
						  <br/><br/><input type="file" name="image"/></td>';
					echo '</tr>';
				?>
				<tr>
					<td colspan="2" class="text-right"><input type="submit" onClick="return confirm('Apakah data yang diisi sudah benar?')" class="button" name="submit" value="kirim"/></td>
				</tr>
			</table>
		</form>


	</div>
	<div id="right" style="width: 30%;float: right;">
		&nbsp
	</div>
</body>
</html>