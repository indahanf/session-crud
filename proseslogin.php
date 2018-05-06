<?php
	session_start(); 
	include "koneksi.php";
	$uname = $_POST["nim"];
	$psw = $_POST["nama"];
	$user_check = $_SESSION['login_user'];
	$sql = "SELECT * from DATA where nim='$uname' and nama='$psw'";
	$query = mysqli_query($conn, $sql);
	$cek = mysqli_num_rows($query);
	$data = mysqli_fetch_array($query);

	if($cek>=1){
		$_SESSION['idLogin']=$uname;
		echo "<script>alert('Login Berhasil')</script>";
		echo "<script>location.href='view.php'</script>";
   } else {
		echo "<script>alert('Login GAGAL')</script>";
		echo "<script>location.href='login.php'</script>";
   }

 ?>