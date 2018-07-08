<?php session_start();?>
<?php
					$id=$_GET['id'];
                  include'maps/db.php';
                  $i=0;
                  $tampil2 = "SELECT * FROM data_sumur_bor LEFT join desa on desa.id_desa=data_sumur_bor.desa LEFT JOIN kecamatan on kecamatan.id_kecamatan=data_sumur_bor.kecamatan left join kabupaten on kabupaten.id_kabupaten=data_sumur_bor.kabupaten where data_sumur_bor.id_sumur_bor='$id'";
                  $sql2 = mysqli_query($con,$tampil2);
                  while($data2 = mysqli_fetch_array($sql2))
                   {


  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('share/header.php')?>

    <title>Acme | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{
			try{
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}

		return xmlhttp;
    }

	function getState(countryId) {

		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('statediv').innerHTML=req.responseText;
						document.getElementById('citydiv').innerHTML='<select name="no_kamar" class="form-control">'+
						'<option>Pilih Desa</option>'+
				        '</select>';
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}
	}
	function getCity(countryId,stateId) {
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		var req = getXMLHTTP();

		if (req) {

			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {
						document.getElementById('citydiv').innerHTML=req.responseText;
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}
			}
			req.open("GET", strURL, true);
			req.send(null);
		}

	}
</script>

      <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE10 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
   <?php include'share/logo.php';?>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>EDIT</h1>
                </div>

            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="component-bg">
        <div class="container">
            <!-- Forms
================================================== -->
<div class="bs-docs-section mar-b-30">



  <h2 id="forms-horizontal">Edit lokasi Sumur Bor</h2>

  <div class="bs-callout bs-callout-info">
    <form class="form-horizontal" role="form" action="proses/proses_edit_lokasi_sumur_bor.php" method="POST" enctype="multipart/form-data">
	<div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Id Lokasi Sumur Bor</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="id_sumur_bor" value="<?php echo $data2['id_sumur_bor']?>" required name="id_sumur_bor">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nama Lokasi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Lokasi" value="<?php echo $data2['lokasi']?>" required name="nama_transportasi">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Lintang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Lintang" required name="lintang"  value="<?php echo $data2['lat']?>">
        </div>
      </div>
	  <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Bujur</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Bujur" required name="bujur"  value="<?php echo $data2['lon']?>">
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kedalaman Akuifer</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="kedalaman_akuifer" required name="kedalaman_akuifer" value="<?php echo $data2['kedalaman_akuifer']?>">
        </div>
      </div>
			<div class="form-group">
	      <label for="inputPassword3" class="col-sm-2 control-label">Ketebalan Akuifer</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="inputPassword3" placeholder="ketebalan Akuifer" required name="ketebalan_akuifer" value="<?php echo $data2['ketebalan_akuifer']?>">
	      </div>
	    </div>
			<div class="form-group">
	      <label for="inputPassword3" class="col-sm-2 control-label">Jari-Jari Sumur Bor</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="inputPassword3" placeholder="Jari-Jari Sumur Bor" required name="jari_jari_sumur_bor" value="<?php echo $data2['jari_jari_sumur_bor']?>">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputPassword3" class="col-sm-2 control-label">PH</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="inputPassword3" placeholder="PH" required name="ph"value="<?php echo $data2['ph']?>">
	      </div>
	    </div>

	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kabupaten</label>
        <div class="col-sm-10">
          <select name="nama_kabupaten" onChange="getState(this.value)" class="form-control" >

			<?php
                  include'maps/db.php';
                  $i=0;
				   				echo "<option value='$data2[id_kabupaten]' selected>$data2[nama_kabupaten]</option>";
                  $tampil = "SELECT * from kabupaten";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   echo "<option value='$data[id_kabupaten]'>$data[nama_kabupaten]</option>";

                   }
					?>

		  </select>
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kecamatan</label>
        <div class="col-sm-10">
          <select name="nama_kecamatan" onChange="getState(this.value)" class="form-control" >

			<?php
                  include'maps/db.php';
                  $i=0;
				     echo "<option value='$data2[id_kecamatan]'>$data2[nama_kecamatan]</option>";
                  $tampil = "SELECT * from kecamatan";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                    if($data2['id_kecamatan']!=$data['id_kecamatan']){
                   echo "<option value='$data[id_kecamatan]'>$data[nama_kecamatan]</option>";
					}
                   }
					?>

		  </select>
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Desa</label>
        <div class="col-sm-10">
          <select name="nama_desa" onChange="getState(this.value)" class="form-control" >

			<?php
                  include'maps/db.php';
                  $i=0;
				   echo "<option value='$data2[id_desa]' selected>$data2[nama_desa]</option>";
                  $tampil = "SELECT * from desa";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   echo "<option value='$data[id_desa]'>$data[nama_desa]</option>";

                   }
					?>

		  </select>
        </div>
      </div>
			<div class="form-group">

				<label for="inputPassword3" class="col-sm-2 control-label">Upload Foto</label>
				<div class="col-sm-10">
					<input type="file" id="exampleInputFile" name='foto_sumur_bor'>
						<?php if(!empty($data2['foto'])){?>
								<img src="img/<?php echo $data2['foto']?>" width="30%">
						<?php } ?>
				</div>
			</div>
			<div class="form-group">

				<label for="inputPassword3" class="col-sm-2 control-label">Dokumen</label>
				<div class="col-sm-10">
					<input type="file" id="exampleInputFile" name='dokumen'>
					<?php if(!empty($data['dokumen'])){?>
						<a href="img/<?php echo $data2['dokumen']?>" class="btn btn-primary">Download Dokumen</a>
						<label><?php echo $data['dokumen']?></label>
						<?php } ?>
				</div>
			</div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Tambah</button>
        </div>
      </div>
    </form>
	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
  </div><!-- /.bs-example -->


</div>
        </div>
    </div>
    <!--container end-->

    <?php include'share/footer.php';?>

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>

  </body>
</html>
<?php }?>
