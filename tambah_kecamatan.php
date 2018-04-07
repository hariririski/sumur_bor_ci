<?php session_start();?>

       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Tambah Kecamatan</h4>
       </div>
       <div class="modal-body">

         <form class="form-horizontal" role="form" action="proses/proses_tambah_kecamatan.php" method="POST">
           <div class="form-group">
             <label for="inputEmail3" class="col-sm-2 control-label">Nama Kecamatan</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" id="inputEmail3" placeholder="Nama kecamatan" required name="nama_kecamatan">
             </div>
           </div>

         <div class="form-group">
             <label for="inputPassword3" class="col-sm-2 control-label"">Kabupaten</label>
             <div class="col-sm-10">
               <select name="nama_kabupaten"class="form-control">
           <?php
                       include'maps/db.php';
                       $i=0;
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
             <div class="col-sm-offset-2 col-sm-10">
               <button type="submit" class="btn btn-primary">Tambah</button>
             </div>
           </div>
         </form>

       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
