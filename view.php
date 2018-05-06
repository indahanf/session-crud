<?php 
	session_start();
	if (empty($_SESSION['idLogin'])) {
		header("location:login.php");
	}
	include "koneksi.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1" align="center">
		<h2 style="text-align: center;">DATA PENDAFTARAN</h2>
		<tr>
			<td>NIM</td>
			<td>Nama</td>
			<td>TTL</td>
			<td>Alamat</td>
			<td>Action</td>
		</tr>
		<?php  

			$query = mysqli_query($conn, "SELECT * FROM DATA");
			while ($data = mysqli_fetch_array($query)) {
				echo "
					<tr>
						<td>".$data['nim']."</td>
						<td>".$data['nama']."</td>
						<td>".$data['ttl']."</td>
						<td>".$data['alamat']."</td>
						<td>
							<a href='form-update.php?nim=".$data['nim']."'>Edit</a> |
							<a href='prosesdelete.php?nim=".$data['nim']."'>Hapus</a>	
						</td>
					</tr>";	
			}

		?>

	</table>
	
	<p align="center"><a href='input.php'>Tambah Data</a>
	<br>
	<br>
	<a href='logout.php'>LOG OUT</a>
</body>
</html>