<?php
 session_start();
$nama_lokasi=$_POST['nama_lokasi'];
$lintang=$_POST['lintang'];//5.
$bujur=$_POST['bujur']; // 95.
$kedalaman_akuifer=$_POST['kedalaman_akuifer'];
$ketebalan_akuifer=$_POST['ketebalan_akuifer'];

$jari_jari_sumur_bor=$_POST['jari_jari_sumur_bor'];
$ph=$_POST['ph'];
$nama_kabupaten=$_POST['kabupaten'];
$nama_kecamatan=$_POST['kecamatan'];
$nama_desa=$_POST['desa'];
$nama=$_SESSION['nama'];
	list($status, $name_file1)=upload();
	list($status, $name_file2)=upload2();

		include"../maps/db.php";
	  $perintah="INSERT INTO `data_sumur_bor`(`lokasi`, `desa`, `kecamatan`, `kabupaten`, `lon`, `lat`, `kedalaman_akuifer`, `foto`, `jari_jari_sumur_bor`, `dokumen`, `nama_user`, `ph`, `ketebalan_akuifer`)
						 	VALUES ('$nama_lokasi','$nama_desa','$nama_kecamatan','$nama_kabupaten','$bujur','$lintang','$kedalaman_akuifer','$name_file1','$jari_jari_sumur_bor','$name_file2','$nama','$ph','$ketebalan_akuifer')";
		$query = mysqli_query($con,$perintah);
		if ($query) {
				echo "<script type='text/javascript'>alert('Selamat Anda Telah menambah LokasiBaru');</script>";
				echo '<script>document.location = "../data_lokasi_sumur_bor.php"</script>';
		} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal menambah Lokasi');</script>";
			echo '<script>document.location = "../data_lokasi_sumur_bor.php"</script>';
		}


?>

<?php

				function upload(){
						 $target_dir = "../img/";
						 $target_file = $target_dir . basename($_FILES["foto_sumur_bor"]["name"]);
						 $uploadOk = 1;
						 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						 // Check if image file is a actual image or fake image
						 if(isset($_POST["submit"])) {
								 $check = getimagesize($_FILES["foto_sumur_bor"]["tmp_name"]);
								 if($check !== false) {
										 $uploadOk = 1;
								 } else {
										 $uploadOk = 0;
								 }
					 }

					 if ($uploadOk == 0) {
						 return False;
					 } else {

							 $temp = explode(".", $_FILES["foto_sumur_bor"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 $nama_baru=random_name(30);
							 $nama_baru=$nama_baru. '.' . end($temp);
							 $temp = explode(".", $_FILES["foto_sumur_bor"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 if (move_uploaded_file($_FILES["foto_sumur_bor"]["tmp_name"], $target_dir."/" . $nama_baru)) {
									 return array(true,$nama_baru);
							 } else {
										return array(False,false);
							 }
					 }
				 }

				 function upload2(){
							$target_dir = "../img/";
							$target_file = $target_dir . basename($_FILES["dokumen"]["name"]);
							$uploadOk = 1;
							$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
							// Check if image file is a actual image or fake image
							if(isset($_POST["submit"])) {
									$check = getimagesize($_FILES["dokumen"]["tmp_name"]);
									if($check !== false) {
											$uploadOk = 1;
									} else {
											$uploadOk = 0;
									}
						}

						if ($uploadOk == 0) {
							return False;
						} else {

								$temp = explode(".", $_FILES["dokumen"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
								$nama_baru=random_name(30);
								$nama_baru=$nama_baru. '.' . end($temp);
								$temp = explode(".", $_FILES["dokumen"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
								if (move_uploaded_file($_FILES["dokumen"]["tmp_name"], $target_dir."/" . $nama_baru)) {
										return array(true,$nama_baru);
								} else {
										 return array(False,false);
								}
						}
					}

				 function random_name($length) {
					 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					 $password = substr( str_shuffle( $chars ), 0, $length );
					 return $password;
				 }

?>
