<?php session_start();?>

      <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Tambah Layer</h4>
</div>
<div class="modal-body">

  <form class="form-horizontal" role="form" action="proses/proses_tambah_admin.php" method="POST">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
      <div class="col-sm-8">
        <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="username" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Password</label>
      <div class="col-sm-8">
        <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Password" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Nama Lengkap</label>
      <div class="col-sm-8">
        <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-default">Tambah</button>
      </div>
    </div>
  </form>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
