<?php

	$nim = $_REQUEST['nim'];

	include "koneksi.php";
	$query = mysqli_query($conn, "SELECT * FROM DATA where nim=' " .$nim . " ' ");
	
	$nama = "";
	$ttl = "";
	$alamat = "";

	while ($data = mysqli_fetch_array($query)) {
		$nama = $data['nama'];
		$ttl = $data['ttl'];
		$alamat = $data['alamat'];
	}


?>

<html>
<head>
	<title></title>
</head>
<body>
	<div align="center" style="background-color: lightblue; width: 1000px; padding: 1px;">
			<h1 style="text-align: center;">Form Edit</h1>
			<form name="isi" method="POST" action="">
				<table border="0" width="250">
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td width="900"><input type="text" name="nim" class="text-field" id="nim_id" placeholder="NIM"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td width="900"><input type="text" name="nama" class="text-field" id="nama_id" placeholder="Input Nama"></td>
					</tr>

					<tr>
						<td>TTL</td>
						<td>:</td>
						<td width="800"><input type="text" name="ttl" class="text-field" id="ttl_id" placeholder="mm/dd/yyyy"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>
							<textarea name="alamat" rows="5" cols="40%"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td>
							<button type="submit" name="btnsave" onclick="simpan()">Simpan</button>
							<button type="button" name="btncnc" class="btncnc" id="id_cnc">Cancel</button>
						</td>	
						
					</tr>	
				</table>
			</form>
			
		</div>

		<script type="text/javascript">
			function simpan() {
				$('#edit').attr("action","edit.php?nim=<?php echo $nim; ?>");
				$('edit').submit;
			}
		</script>
</body>
</html>
