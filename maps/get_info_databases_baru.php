<style>
.table {
    width: 100%;
    margin-bottom: 20px;
}
</style>
<?php
include'../maps/db.php';
$i=0;
$id=$_GET['id'];
$tampil = "SELECT * FROM `data_sumur_bor`, kabupaten, kecamatan, desa WHERE data_sumur_bor.kabupaten=kabupaten.Id_kabupaten and kecamatan.id_kabupaten=kabupaten.Id_kabupaten and kecamatan.id_kecamatan=desa.id_kecamatan and data_sumur_bor.id_sumur_bor='$id'";
$sql = mysqli_query($con,$tampil);
while($data = mysqli_fetch_array($sql))
 {
?>





            <table class="table table-bordered table-striped"  width="50%">

              <thead>
                <tr>
                  <th colspan="2">
                    <center><img src="../img/<?php echo $data['foto'];?>" width="50%"></center>
                  </th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="70px">
                    <code>
                      Lokasi
                    </code>
                  </td>
                  <td>
                    <?php echo $data['lokasi'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>
                      Alamat
                    </code>
                  </td>
                  <td>
                    <?php echo $data['nama_desa'];?>,   <?php echo $data['nama_kecamatan'];?>,<br>  <?php echo $data['nama_kabupaten'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>
                      Kealaman Akuifer
                    </code>
                  </td>
                  <td>
                      <?php echo $data['kedalaman_akuifer'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>
                     Ketebalan Akuifer
                    </code>
                  </td>
                  <td>
                    <?php echo $data['ketebalan_akuifer'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>
                      Posisi akuifer
                    </code>
                  </td>
                  <td>
                      <?php echo $data['posisi_akuifer'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>
                      Jari-Jari Sumur Bor
                    </code>
                  </td>
                  <td>
                    <?php echo $data['jari_jari_sumur_bor'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>
                      pH
                    </code>
                  </td>
                  <td>
                    <?php echo $data['ph'];?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>
                      Proses Pengerjaan
                    </code>
                  </td>
                  <td>
                    <?php
                    $i=0;
                    $belum=0;
                    $sedang=0;
                    $sudah=0;
                    $id=$_GET['id'];
                    $tampil = "SELECT * FROM `proses_pengerjaan` where id_sumur_bor='$id'";
                    $sql = mysqli_query($con,$tampil);
                    while($data = mysqli_fetch_array($sql))
                     {
                       $i++;
                       if($data['status']==0){
                         $belum++;
                       }else if($data['status']==1){
                         $sedang++;
                       }else if($data['status']==2){
                         $selesai++;
                       }
                     }
                     

                     echo "Total Pengerjaan : ".$i;
                     echo "<br>";
                     echo "Belum Dikerjakan : ".$belum;
                     echo "<br>";
                     echo "Sedang Dikerjakan : ".$sedang;
                     echo "<br>";
                     echo "Selesai Dikerjakan : ".$sudah;
                    ?>
                  </td>
                </tr>
              </tbody>
            </table>


<?php }?>
