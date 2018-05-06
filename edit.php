<?php

include "koneksi.php";
if(isset($_POST['btnsubmit'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    

    // buat query update
    $sql = "UPDATE data SET nama='$nama', ttl='$ttl', alamat='$alamat' WHERE nim=$nim";
    $query = mysqli_query($conn, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: view.php');
    } else {
        // kalau gagal tampilkan pesan
        echo $sql;
        die("Gagal menyimpan perubahan...");
        echo $sql;
    }


} else {
    die("Akses dilarang...");
}

?>