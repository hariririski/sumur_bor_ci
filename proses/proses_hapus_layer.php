
<?php

		$id=$_GET['id'];

		include"../maps/db.php";
		$perintah="DELETE FROM layer WHERE id_layer='$id'";
		$query = mysqli_query($con,$perintah);

		if ($query) {


				echo "<script type='text/javascript'>alert('Selamat Anda Telah Mengahapus Data');</script>";
				echo '<script>document.location = "../data_layer.php"</script>';





			} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal Mengahapus Data');</script>";
				echo '<script>document.location = "../data_layer.php"</script>';
			}




?>
