
<?php


		$nama_kecamatan=$_POST['nama_kecamatan'];
		$nama_desa=$_POST['nama_desa'];
		$id_desa=$_POST['id_desa'];

		include"../maps/db.php";
		$perintah="UPDATE `desa` SET `nama_desa`='$nama_desa',`id_kecamatan`='$nama_kecamatan' WHERE id_desa='$id_desa'";
		$query = mysqli_query($con,$perintah);

		if ($query) {


				echo "<script type='text/javascript'>alert('Data Berhasil Di Diperbaharui');</script>";
				echo '<script>document.location = "../data_alamat.php?id=desa"</script>';
			} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal Mengubah');</script>";
				echo '<script>document.location = "../data_alamat.php?id=desa"</script>';
			}




?>
