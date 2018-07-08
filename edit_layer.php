
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Tambah Layer</h4>
       </div>
       <div class="modal-body">
         <?php
                $id=$_GET['id'];
                 include'maps/db.php';
                 $i=0;
                 $tampil2 = "SELECT * FROM layer where id_layer='$id'";
                 $sql2 = mysqli_query($con,$tampil2);
                 while($data2 = mysqli_fetch_array($sql2))
                  {
          ?>
         <form class="form-horizontal" role="form" action="proses/proses_edit_layer.php?id=<?php echo $id?>" method="POST">
           <div class="form-group">
             <label for="inputEmail3" class="col-sm-4 control-label">Nama Layer</label>
             <div class="col-sm-8">
               <input type="text" class="form-control" id="inputEmail3"  value="<?php echo $data2['nama_layer']?>" placeholder="Nama Layer" required name="nama_layer">
             </div>
           </div>
           <div class="form-group">
             <label for="inputEmail3" class="col-sm-4 control-label">Url</label>
             <div class="col-sm-8">
               <input type="text" class="form-control" id="inputEmail3" placeholder="Url" required name="url" value="<?php echo $data2['url']?>">
             </div>
           </div>
           <div class="form-group">
             <div class="col-sm-offset-4 col-sm-8">
               <button type="submit" class="btn btn-primary">Perbaharui</button>
             </div>
           </div>
         <?php }?>
        </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
