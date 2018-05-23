<?php
	include('connect.php');
	$result = mysqli_query($conn, "SELECT * FROM mobil");
	$thead = '<thead>
			<tr>
				<th class="text-center">Kode</th>
				<th class="text-center">Gambar</th>
				<th class="text-center">Model</th>
				<th class="text-center">Pabrikan</th>
				<th class="text-center">Transmisi</th>
				<th class="text-center">Mesin</th>
				<th class="text-center">Kapasitas</th>
				<th class="text-center">Tenaga</th>
			</tr>
			</thead>';
	require_once __DIR__ . '/mpdf/vendor/autoload.php';
	$pdf = new \Mpdf\Mpdf();
	$pdf->SetHeader('Daftar Mobil MPV');
	$pdf->AddPage();
	$pdf->WriteHTML('<h1>Dafar Mobil MPV</h1>');
	$pdf->WriteHTML('<table border="1" width="100%">');
	$pdf->WriteHTML($thead);
	while($record = mysqli_fetch_array($result)){				
						 $html = '<tr>
						 <td class="text-center">'.$record[0].'</td>
						 <td><img src="../'.$record[7].'" width="100px"/></td>
						 <td>'.$record[1].'</td>
						 <td>'.$record[2].'</td>
						 <td class="text-center">'.$record[3].'</td>
						 <td>'.$record[4].'</td>
						 <td>'.$record[5].'</td>
						 <td>'.$record[6].'</td>
						 </tr>';
					   	 $pdf->WriteHTML($html);
					}
$pdf->WriteHTML('</table>');
$pdf->setFooter('{PAGENO} / {nb}');
$pdf->shrink_tables_to_fit = 1;
$pdf->output();
?>