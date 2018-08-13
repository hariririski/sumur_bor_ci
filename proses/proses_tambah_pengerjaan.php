<?php
session_start();
$nama_kegiatan=$_POST['nama_kegiatan'];
$id=$_GET['id'];
$status=$_POST['status'];
$nama=$_SESSION['nama'];
		include"../maps/db.php";
		$perintah="INSERT INTO `proses_pengerjaan`(`nama_proses_pengerjaan`, `status`, `id_sumur_bor`, `nama_user`)
							 VALUES ('$nama_kegiatan','$status','$id','$nama')";
		$query = mysqli_query($con,$perintah);
		if ($query) {


				echo "<script type='text/javascript'>alert('Selamat Anda Telah Menambah Proses Pekerjaan Baru');</script>";
				echo '<script>document.location = "../data_lokasi_sumur_bor.php"</script>';

			} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal Menambahkan Proses Pekerjaan Baru');</script>";
				echo '<script>document.location = "../data_lokasi_sumur_bor.php"</script>';
			}


?>
