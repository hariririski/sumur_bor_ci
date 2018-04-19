
<?php

				  include'../maps/db.php';
                  echo"<option value=''>SIlahkan Pilih</option>";
				  $id_kabupaten=$_GET['id'];
                  $tampil = "SELECT * FROM kecamatan where id_kabupaten='$id_kabupaten'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
					   echo"<option value='".$data['id_kecamatan']."'>".$data['nama_kecamatan']."</option>";
					   
				   }
    		
				
				
	

?>