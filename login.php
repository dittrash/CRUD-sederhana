<?php
	session_start();
	if(isset($_SESSION['logged']))
	{
		header("location:./index.php");
	}
?>
<html>
<head>
	<title>Daftar Mobil MPV</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div id="header" style="width: 100%;height: 100px">
		<h1 align="center">Masuk</h1>	
	</div>
	<div id="left" style="width: 30%;float: left;">
		&nbsp
	</div>
	<div id="container" style="width: 40%;float: left;" align="center">
		<form action="engine/login.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td><input type="text" name="username" placeholder="Nama Pengguna" /></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Kata Kunci" /></td>
				</tr>
				<tr>
					<td class="text-right"><input type="submit" class="button" name="submit" value="kirim"/></td>
				</tr>
			</table>
		</form>


	</div>
	<div id="right" style="width: 30%;float: right;">
		&nbsp
	</div>
</body>
</html>