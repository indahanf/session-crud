<?php

include "koneksi.php";

// kalau tidak ada id di query string
if( !isset($_GET['nim']) ){
    header('Location: view.php');
}

//ambil id dari query string
$nim = $_GET['nim'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM DATA WHERE nim=$nim";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="isi" method="POST" action="edit.php">
		<table border="0" width="250">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td width="900"><input type="text" readonly name="nim" class="text-field" id="nim_id" value="<?php echo $data['nim'] ?>"></td>
			</tr>
			<tr>
						<td>Nama</td>
						<td>:</td>
						<td width="900"><input type="text" name="nama" class="text-field" id="nama_id" value="<?php echo $data['nama'] ?>" required></td>
					</tr>

					<tr>
						<td>TTL</td>
						<td>:</td>
						<td width="800"><input type="text" name="ttl" class="text-field" id="ttl_id" value="<?php echo $data['ttl'] ?>" required></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>
							<textarea name="alamat" rows="5" cols="40%" value="<?php echo $data['alamat'] ?>" required></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2"></td>
						<td>
							<input type="submit" name="btnsubmit" class="btnsubmit" id="id_submit" value="Submit"/>
							<button type="button" name="btncnc" class="btncnc" id="id_cnc">Cancel</button>
						</td>	
						
					</tr>	
				</table>
			</form>
			<br /> <br /><a href ='view.php'>Lihat Data</a>
		</div>
</body>
</html>
