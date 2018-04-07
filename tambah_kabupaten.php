<?php session_start();?>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Tambah Kabupaten</h4>
</div>
<div class="modal-body">

  <form class="form-horizontal" role="form" action="proses/proses_tambah_kabupaten.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Nama Kabupaten</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Kabupaten" name="nama_kabupaten" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-4 control-label">Upload Logo Kabupaten</label>
      <div class="col-sm-8">
        <input type="file" id="exampleInputFile" name='foto_kabupaten'>

      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </form>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
