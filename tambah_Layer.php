
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Tambah Layer</h4>
       </div>
       <div class="modal-body">

         <form class="form-horizontal" role="form" action="proses/proses_tambah_layer.php" method="POST">
           <div class="form-group">
             <label for="inputEmail3" class="col-sm-4 control-label">Nama Layer</label>
             <div class="col-sm-8">
               <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Layer" required name="nama_layer">
             </div>
           </div>
           <div class="form-group">
             <label for="inputEmail3" class="col-sm-4 control-label">Url</label>
             <div class="col-sm-8">
               <input type="text" class="form-control" id="inputEmail3" placeholder="Url" required name="url">
             </div>
           </div>
           <div class="form-group">
             <div class="col-sm-offset-4 col-sm-8">
               <button type="submit" class="btn btn-primary">Tambah</button>
             </div>
           </div>

       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
