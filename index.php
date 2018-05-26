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
		<h1 align="center">Daftar Mobil MPV</h1>	
	</div>
	<div id="left" style="width: 9%;float: left;">
		&nbsp
	</div>
	<div id="container" style="width: 82%;float: left;">
		<div id="button" style="width:50%;float: left">
			<a href="new.php"><button class="button">+ Tambah Data Baru</button></a>&nbsp;
			<a href="engine/exportpdf.php"><button class="button">Ekspor ke .PDF</button></a>&nbsp;
			<a href="engine/logout.php"><button class="button">Keluar</button></a>
		</div>
		<div id="search" style="width:50%;float: right;" align="right">
			<form action="index.php">
				<input type="text" name="search" placeholder="Kode, model, pabrikan, transmisi" />
				<input type="submit" name="submit" class="button" value="Cari.."/>
			</form>
		</div>
		<table class="table-fill">
			<thead>
			<tr>
				<th class="text-center">Kode</th>
				<th class="text-center">Gambar</th>
				<th class="text-center">Model</th>
				<th class="text-center">Pabrikan</th>
				<th class="text-center">Transmisi</th>
				<th class="text-center">Mesin</th>
				<th class="text-center">Kapasitas</th>
				<th class="text-center">Tenaga</th>
				<th colspan="2"  class="text-center">Opsi</th>
			</tr>
			</thead>
			<tbody class="table-hover">	
				<?php
					//database connection file
					include('engine/connect.php');
					//data filtering
					include('engine/search.php');
					//select datarow
					$result = mysqli_query($conn, "SELECT * FROM mobil WHERE kode LIKE '%$keyword%' OR model LIKE '%$keyword%' OR pabrikan LIKE '%$keyword%' OR transmisi LIKE '%$keyword%'");
					//fetch and show row data
					while($record = mysqli_fetch_array($result)){				
						$delPrompt = "'Apakah anda ingin menghapus data ".$record[2].' '.$record[1]."?'";
						echo '<tr>';
						echo '<td class="text-center">'.$record[0].'</td>';
						echo '<td><img src="'.$record[7].'" width="170px"/></td>';
						echo '<td>'.$record[1].'</td>';
						echo '<td>'.$record[2].'</td>';
						echo '<td class="text-center">'.$record[3].'</td>';
						echo '<td>'.$record[4].'</td>';
						echo '<td>'.$record[5].'CC</td>';
						echo '<td>'.$record[6].'hp</td>';
						echo '<td><a href="edit.php?id='.$record[0].'">Ubah</a>';
						echo '<td><a onClick="return confirm('.$delPrompt.')" href="engine/delete.php?id='.$record[0].'">Hapus</a>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
		<br/><br/>
	</div>
	<div id="right" style="width: 9%;float: right;">
		&nbsp
	</div>
</body>
</html>