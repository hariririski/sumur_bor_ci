<ul class="nav navbar-nav">
  <li>
    <a href="index.php">Beranda</a>
  </li>

  <li>
    <a href="peta.php">Peta</a>
  </li>

  <?php
       if(!isset($_SESSION['login'])){
    ?>
    <li>
      <a href="kontak.php">Kontak</a>
    </li>
    <li>
      <a href="data_lokasi_sumur_bor_umum.php">Data Sumur Bor</a>
    </li>
    <?php } ?>
    <?php
				  if(!isset($_SESSION['login'])){
				  echo '
				  <li>
                      <a href="login.php">Login</a>
                  </li>
				  ';
				  }
				  ?>
      <?php
			  if(isset($_SESSION['login'])&&$_SESSION['login']==1){
			  echo'
				<li class="dropdown">
  <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">Data <i class="fa fa-angle-down"></i>
                      </a>
  <ul class="dropdown-menu">
    <li>
      <a href="data_layer.php">Layer</a>
    </li>
    <li>
      <a href="data_alamat.php?id=alamat">Data Alamat</a>
    </li>
    <li>
      <a href="data_admin.php">Data Admin</a>
    </li>
  </ul>
</li>

<li>
  <a href="data_lokasi_sumur_bor.php">Data Sumur Bor</a>
</li>
<li>
  <a href="proses/logout.php">Logout</a>
</li>
</ul>
</li>

				  ';
			  }
				?>

</ul>
