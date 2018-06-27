<html>
<head>




</head>
<body>
<div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <?php
		  $gambar=$_GET['gambar'];

                  include'maps/db.php';
                  $i=0;
                  $tampil = "SELECT * FROM data_sumur_bor LEFT join desa on desa.id_desa=data_sumur_bor.desa LEFT JOIN kecamatan on kecamatan.id_kecamatan=data_sumur_bor.kecamatan left join kabupaten on kabupaten.id_kabupaten=data_sumur_bor.kabupaten where data_sumur_bor.id_sumur_bor='$gambar'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {


		  ?>

          <h4 class="modal-title"><?php echo $data['lokasi']?></h4>
        </div>
        <div class="modal-body">
         <table>
		 <tr>
			 <td>
			 Nama
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['lokasi'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Foto
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo '<img src="img/'.$data['foto'].'" width="100%">' ?>
			 </td>
		 </tr>

		 <tr>
			 <td>
			 Provinsi
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 Aceh
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Kabupaten/Kota
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama_kabupaten'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Kecamatan
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama_kecamatan'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Desa
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama_desa'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Koordinat
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['lat'].",".$data['lon'] ?>

			 </td>
		 </tr>
		 <tr>
			 <td>
			 PH
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['ph']?>

			 </td>
		 </tr>
     <tr>
       <td>
       Kedalaman Akuifer
       </td>
       <td>
       :
       </td>
       <td>
       <?php echo $data['kedalaman_akuifer']?>

       </td>
     </tr>
     <tr>
       <td>
       Ketebalan Akuifer
       </td>
       <td>
       :
       </td>
       <td>
       <?php echo $data['ketebalan_akuifer']?>

       </td>
     </tr>
     <tr>
       <td>
       Posisi Akuifer
       </td>
       <td>
       :
       </td>
       <td>
       <?php echo $data['posisi_akuifer']?>

       </td>
     </tr>
     <tr>
       <td>
       Jari-Jari Sumur Bor
       </td>
       <td>
       :
       </td>
       <td>
       <?php echo $data['jari_jari_sumur_bor']?>

       </td>
     </tr>
     <tr>
       <td>
       Dokumen
       </td>
       <td>
       :
       </td>
       <td>
       <a href="img/<?php echo $data['dokumen']?>"><button class="btn-info">Download</button></a>

       </td>
     </tr>
   </table>
      <br>
      <br>
      <center><h3>Proses Pengerjaan</h3><center>
      <div class="bs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Kegiatan
                  </th>
                  <th>
                    Status
                  </th>

                </tr>
              </thead>
              <tbody>
                <?php
               $gambar=$_GET['gambar'];
                            $i=0;
                            $tampil1 = "SELECT * FROM proses_pengerjaan WHERE id_sumur_bor='$gambar'";
                            $sql1 = mysqli_query($con,$tampil1);
                            while($data1 = mysqli_fetch_array($sql1))
                             { $i++;


               ?>
                <tr>
                  <td>
                    <?php echo $i?>
                  </td>
                  <td>
                    <?php echo $data1['nama_proses_pengerjaan']?>
                  </td>
                  <td>
                    <?php if($data1['status']==0){echo"Belum";}else if($data1['status']==1){echo"Sedang";}else if($data1['status']==2){echo"Selesai";}?>
                  </td>

                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
    <iframe  src="perlokasi.php?lokasi=<?php echo $data['lat'].",".$data['lon'] ?>" width="100%" height="305px" scrolling="no" frameborder="0"></iframe>

  <center>
  <a href="edit_lokasi_sumur_bor.php?id=<?php echo  $data['id_sumur_bor'] ?>"><button class="btn btn-primary btn-lg">Edit</button></a>
  <a href="proses/proses_hapus_sumur_bor.php?id=<?php echo  $data['id_sumur_bor'] ?>"><button class="btn btn-danger btn-lg">Hapus</button></a>
  </center>
  <?php
                   }
  ?>
        </div>





        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

	  </body>
	  </html>
