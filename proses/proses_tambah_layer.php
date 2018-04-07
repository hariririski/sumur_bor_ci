<?php
session_start();
$nama_layer=$_POST['nama_layer'];
$url=$_POST['url'];
$nama=$_SESSION['nama'];
// echo $_SESSION['id'];
// echo $_SESSION['login'];

		include"../maps/db.php";
		$perintah="INSERT INTO `layer`( `nama_layer`, `url`, `nama_user`) VALUES ('$nama_layer','$url','$nama')";
		$query = mysqli_query($con,$perintah);
		if ($query) {


				echo "<script type='text/javascript'>alert('Selamat Anda Telah menambah Layer Baru');</script>";
				echo '<script>document.location = "../data_layer.php?id=kabupaten"</script>';

			} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal Layer');</script>";
				echo '<script>document.location = "../data_layer.php?id=kabupaten"</script>';
			}


?>
