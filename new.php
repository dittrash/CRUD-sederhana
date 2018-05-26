<?php
	include('engine/session.php');
?>
<html>
<!--
	TUGAS PEMROGRAMAN BERBASIS WEB 
	DITO ALDI SOEKARNO PUTRA
	115150004
-->
<head>
	<title>Daftar Mobil MPV</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div id="header" style="width: 100%;height: 100px">
		<h1 align="center">Tambah Data Baru</h1>	
	</div>
	<div id="left" style="width: 30%;float: left;">
		&nbsp
	</div>
	<div id="container" style="width: 40%;float: left;">
		<a href="index.php"><button class="button"><< Kembali</button></a><br/>
		<form action="engine/add.php" method="POST" enctype="multipart/form-data">
			<table width="500px" class="table-fill">
				<tr>
					<td class="text-right">Kode</td><td><input type="text" name="id"/></td>
				</tr>
				<tr>
					<td class="text-right">Model</td><td><input type="text" name="model"/></td>
				</tr>
				<tr>
					<td class="text-right">Pabrikan</td><td><input type="text" name="manufacturer"/></td>
				</tr>
				<tr>
					<td class="text-right">Transmisi</td><td><select name="trans">
							<option>AT</option>
							<option>MT</option>
							<option>AT/MT</option>
						</select></td>
				</tr>
				<tr>
					<td class="text-right">Mesin</td><td><input type="text" name="engine"/></td>
				</tr>
				<tr>
					<td class="text-right">Kapasitas Mesin</td><td><input type="number" name="capacity" size="4" /> CC</td>
				</tr>
				<tr>
					<td class="text-right">Tenaga</td><td><input type="number" name="power" size="4"/> hp</td>
				</tr>
				<tr>
					<td class="text-right">Gambar</td><td><input type="file" name="image" id="image"/></td>
				</tr>
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