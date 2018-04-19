<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('share/header.php')?>

    <title>
  Beranda
    </title>
<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style1.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">


    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">
    <link rel="stylesheet" href="css/seq-slider/sequencejs-theme.sliding-horizontal-parallax.css" />

    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
    <style>
    .cd-slider li:first-of-type .image {
    background-image: url(img/kontak/peta.png);

}
.cd-slider li:nth-of-type(3) .image {
  background-image: url(img/kontak/peta.png);
}
.cd-slider li:nth-of-type(2) .image {
  background-image: url(img/kontak/peta.png);
}
    </style>
  </head>

  <body>
     <?php include'share/logo.php';?>
<!--header end-->

    <!-- Sequence Modern Slider -->
    <div id="sequence">
        <div class="cd-slider-wrapper">
		<ul class="cd-slider">
      <li class="is-visible">
				<div class="cd-half-block image"></div>

				<div class="cd-half-block content">
					<div>
						<h2>Selamat Datang Pada Sistem Informasi Geografis Pemetaan Letak Akuifer Di Provinsi Aceh</h2>

					</div>
				</div> <!-- .cd-half-block.content -->
			</li>
			<li >
				<div class="cd-half-block image"></div>

				<div class="cd-half-block content">
					<div>
						<h2>Peta Letak Akuifer DI Provinsi Aceh</h2>


					</div>
				</div>
			</li> <!-- .cd-half-block.content -->

			<li>
				<div class="cd-half-block image"></div>

				<div class="cd-half-block content light-bg">
					<div>
						<h2>Data Sumur Bor di Provinsi Aceh</h2>

					</div>
				</div> <!-- .cd-half-block.content -->
			</li>




		</ul> <!-- .cd-slider -->
	</div> <!-- .cd-slider-wrapper -->

<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

    <!--/sequence-theme-->
    <!-- End of Sequence Modern Slider -->







    <!--property end-->

   </div>
   </div>







    <!--container end-->

    <!--footer start-->
    <?php include'share/footer.php';?>
    <!-- footer end -->
    <!--small footer start -->

    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>
    <script src="js/superfish.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>

    <!-- Sequence Moder -slider js -->
    <script src="js/seq-slider/jquery.sequence-min.js">
    </script>
    <script src="js/seq-slider/sequencejs-options.sliding-horizontal-parallax.js">
    </script>
    <!-- end of sequence slider js-->

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>
    <script>
      $('a.info').tooltip();
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });



      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>
  </body>
</html>
