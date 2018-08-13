<?php session_start();?>
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

    <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Tambah Desa</h4>
</div>
<div class="modal-body">

  <form class="form-horizontal" role="form" action="proses/proses_tambah_desa.php" method="POST">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-4 control-label">Nama Desa</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Desa" required name="nama_desa">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-4 control-label">Kabupaten</label>
      <div class="col-sm-8">
        <select name="country" onChange="getState(this.value)" class="form-control">
          <option>Pilih Kabupaten</option>
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
      <label for="inputPassword3" class="col-sm-4 control-label">Kecamatan</label>
      <div class="col-sm-8">
        <div id="statediv"><select name="state" class="form-control">
      <option>Pilih Kecamatan</option>
             </select>
		</div>
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
