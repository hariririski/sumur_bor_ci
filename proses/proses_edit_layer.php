<?php
session_start();
$nama_layer=$_POST['nama_layer'];
$url=$_POST['url'];
$nama=$_SESSION['nama'];
$id=$_GET['id'];
// echo $_SESSION['id'];
// echo $_SESSION['login'];

		include"../maps/db.php";
		$perintah="UPDATE `layer` SET `nama_layer`='$nama_layer',`url`='$url',`nama_user`='$nama' WHERE id_layer='$id'";
		$query = mysqli_query($con,$perintah);
		if ($query) {


				echo "<script type='text/javascript'>alert('Selamat Anda Telah memperbaharui Layer Baru');</script>";
				echo '<script>document.location = "../data_layer.php"</script>';

			} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal memperbaharui Layer');</script>";
				echo '<script>document.location = "../data_layer.php"</script>';
			}


?>
