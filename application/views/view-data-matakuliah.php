<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tampil Data Matakuliah</title>
</head>

<body>
	<center>
		<table>
			<tr>
				<th colspan="3">Tampil Data Mata Kuliah</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr />
				</td>
			</tr>
			<tr>
				<td>Kode MTK</td>
				<th>:</th>
				<td>
					<?= $kode; ?>
				</td>
			</tr>
			<tr>
				<td>Nama MTK</td>
				<td>:</td>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<td>SKS</td>
				<td>:</td>
				<td>
					<?= $sks; ?>
				</td>
			</tr>
			<tr>
				<td>Status MTK</td>
				<td>:</td>
				<td>
					<?= $status; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('Matakuliah');?>">Kembali</a>
				</td>
			</tr>
		</table>
	</center>
</body>

</html>
