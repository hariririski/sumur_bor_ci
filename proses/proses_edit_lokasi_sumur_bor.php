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
$foto=$_POST['foto_sumur_bor'];
$dokumen=$_POST['dokumen'];
$id=$_GET['id'];
if (!empty($_FILES["foto_sumur_bor"]["tmp_name"])){
		list($status, $foto)=upload();
}

if (!empty($_FILES["dokumen"]["tmp_name"])){
	list($status, $dokumen)=upload2();
}


		include"../maps/db.php";
	  $perintah="UPDATE `data_sumur_bor` SET `lokasi`='$nama_lokasi',`desa`='$nama_desa',`kecamatan`='$nama_kecamatan',`kabupaten`='$nama_kabupaten',
							`lon`='$bujur',`lat`='$lintang',`kedalaman_akuifer`='$kedalaman_akuifer',`foto`='$foto',`jari_jari_sumur_bor`='$jari_jari_sumur_bor',`dokumen`='$dokumen',
							`nama_user`='$nama',`ph`='$ph',`ketebalan_akuifer`='$ketebalan_akuifer' WHERE data_sumur_bor.id_sumur_bor='$id'";
		$query = mysqli_query($con,$perintah);
		if ($query) {
				echo "<script type='text/javascript'>alert('Selamat Anda Telah Meperbeharui data Lokasi');</script>";
				echo '<script>document.location = "../data_lokasi_sumur_bor.php"</script>';
		} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal Perbaharui Lokasi');</script>";
			echo '<script>document.location = "../edit_lokasi_sumur_bor.php?id='.$id.'"</script>';
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
