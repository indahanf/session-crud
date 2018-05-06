<?php 


	include "koneksi.php";
	$query = mysqli_query($conn, "INSERT INTO DATA(nim, nama, ttl, alamat) VALUES ('".$_POST["nim"]."',
		'".$_POST["nama"]."',
		'".$_POST["ttl"]."',
		'".$_POST["alamat"]."')");

	if ($query) {
		echo "Data Berhasil diinput";
	} else {
		echo "Data Gagal diinput";
	}
	echo "<br /> <br /><a href ='view.php'>Lihat Data</a>";
	
?>