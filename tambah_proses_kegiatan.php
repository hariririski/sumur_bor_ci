<?php session_start();
$id=$_GET['id'];
?>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Tambah Kegiatan</h4>
</div>
<div class="modal-body">

  <form class="form-horizontal" role="form" action="proses/proses_tambah_pengerjaan.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Nama Kegiatan</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Kegiatan" name="nama_kegiatan" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Status Pengerjaan</label>
      <div class="col-sm-8">
        <select name="status"  class="form-control">
          <option>Pilih status</option>
          <option value="0">Belum</option>
          <option value="1">Sedang</option>
          <option value="2">Selesai</option>


          </select>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </form>
  <center><h3>Proses Pengerjaan</h3><center>
  <div class="bs-example">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>
                #
              </th >
              <th>
                Kegiatan
              </th>
              <th>
                Status
              </th>
              <th width="40%">
                Edit
              </th>
              <th>
                Hapus
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            include'maps/db.php';
           $gambar=$_GET['gambar'];
                        $i=0;
                        $tampil1 = "SELECT * FROM proses_pengerjaan WHERE id_sumur_bor='$id'";
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
              <td>
                <?php if($data1['status']==0){?>

              <?php }else{?>
                  <a href=""><button class="btn btn-warning btn-sm "  >Belum</button></a>
              <?php }?>

              <?php if($data1['status']==1){?>

              <?php }else{?>
                  <a href=""><button class="btn btn-info btn-sm" >Sedang</button></a>
              <?php }?>

              <?php if($data1['status']==2){?>

              <?php }else{?>
                  <a href=""><button class="btn btn-success btn-sm" >Selesai</button></a>
              <?php }?>

              </td>
              <td>
                <a href="proses/proses_hapus_pengerjaan.php?id=<?php echo $data1['id_proses_pengerjaan']?>"><button class="btn btn-danger btn-sm">Hapus</button></a>

              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
