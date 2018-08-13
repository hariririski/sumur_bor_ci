<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Acme | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/flexslider.css"/>
    <link href="../assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


      <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->


<style>

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





            <table class="table table-bordered table-striped" style="font-size:10px;" >

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
                      Kedalaman Akuifer
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
                     echo "Selesai Dikerjakan : ".$selesai;
                    ?>
                  </td>
                </tr>
              </tbody>
            </table>


<?php }?>
<!-- js placed at the end of the document so the pages load faster -->
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/hover-dropdown.js"></script>
  <script defer src="../js/jquery.flexslider.js"></script>
  <script type="../text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

  <script src="../js/jquery.easing.min.js"></script>
  <script src="../js/link-hover.js"></script>


   <!--common script for all pages-->
  <script src="../js/common-scripts.js"></script>


  <script src="../js/wow.min.js"></script>

</body>
</html>
