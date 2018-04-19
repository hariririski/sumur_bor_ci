
<?php

				  include'../maps/db.php';
					   echo"<option value=''>SIlahkan Pilih</option>";
				  $id_kecamatan=$_GET['id'];
                  $tampil = "SELECT * FROM desa where id_kecamatan='$id_kecamatan'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
					   echo"<option value='".$data['id_desa']."'>".$data['nama_desa']."</option>";

				   }





?>
