<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">



  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/theme.css" rel="stylesheet">
  <link href="../css/bootstrap-reset.css" rel="stylesheet">
  <!--external css-->
  <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/flexslider.css"/>
  <link href="../assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />

      <style>
      #map-canvas {
      margin: 0;
      padding: 0;
      height: 560px;
      max-width: none;
    }
    body {
      padding-top: 0px;
  }

      </style>
</head>

<body>

       <div class="panel">

         <div class="panel-body container-fluid">
           <div class="row row-lg">
             <div class="col-lg-12">

               <div class="example-wrap">
                 <div class="row">
                   <div class="col-lg-8">

                       <div id="map-canvas"></div>

                   </div>
                   <div class="col-lg-4">


                     <div class="example">

                     <select id="type"  class="form-control" onchange="filterMarkers(this.value);">
                       <option value="">Semua</option>
                       <?php
                             //konfgurasi koneksi database
                             include'db.php';
                                	$sql_lokasi="SELECT * FROM kabupaten";
                                	$result=mysqli_query($con,$sql_lokasi);
                                  $i++;
                                	while($data=mysqli_fetch_object($result)){
                                		 ?>
                                      <option value="<?php echo $data->id_kabupaten?>"><?php echo $data->nama_kabupaten?></option>

                           <?php
                    				}
                    		?>

                     </select>
                    </div>
                    <br>
                     Layer
                     <table border='0'>
                       <?php
                             //konfgurasi koneksi database
                             include'db.php';
                                	$sql_lokasi="SELECT * FROM layer";
                                	$result=mysqli_query($con,$sql_lokasi);
                                  $i++;
                                	while($data=mysqli_fetch_object($result)){
                                		 ?>
                                     <tr>
                                    <td width='85%'>
                                      <div class="form-group form-material">
                                        <div class="checkbox-custom checkbox-default">
                                          <input type="checkbox"   id="layer_0" onclick="toggleLayers(<?php echo $data->id_layer;?>);"autocomplete="off" onclick="selectAllChecked();">
                                          <label for="inputBasicRemember"><?php echo $data->nama_layer;?></label>
                                        </div>
                                      </div>

                                    </tr>


                           <?php
                    				}
                    		?>

                     </table >

                     <div>

                      <img src="legenda.png" width="93%">
                     </div>

                   </div>

                 </div>
               </div>
               <!-- End Example Default Button -->
             </div>
           </div>

         </div>
       </div>



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmUfKutqGZ-VgbD4fwjOFd1EGxLXbxcpQ&sCensor=false"></script>



    <script >
    var gmarkers1 = [];
var markers1 = [];

var filters = {
  shower: false,
  vault: false,
  flush: false
}

var layers=[];
<?php
      //konfgurasi koneksi database
      include'db.php';
           $sql_lokasi="SELECT * FROM layer";
           $result=mysqli_query($con,$sql_lokasi);
           $i++;
           while($data=mysqli_fetch_object($result)){
              ?>
              layers[<?php echo $data->id_layer?>] = new  google.maps.KmlLayer('<?php echo $data->url;?>',
              {preserveViewport: true});

    <?php
     }
 ?>

var markers1 = [
  <?php
        //konfgurasi koneksi database
        include'db.php';
            $data2;
             $sql_lokasi="SELECT * FROM `data_sumur_bor`, kabupaten, kecamatan, desa WHERE data_sumur_bor.kabupaten=kabupaten.Id_kabupaten and kecamatan.id_kabupaten=kabupaten.Id_kabupaten and kecamatan.id_kecamatan=desa.id_kecamatan";
             $result=mysqli_query($con,$sql_lokasi);
       // ambil nama,lat dan lon dari table lokasi
             while($data=mysqli_fetch_object($result)){
               $data2=$data->id_sumur_bor;
    ?>
            ['<?php echo $data->id_sumur_bor;?>', 'title',<?php echo $data->lat;?>, <?php echo $data->lon;?>,<?php echo $data->id_kabupaten;?>,'icon.png'],
    <?php
       }
    ?>


  ];
var data=<?php echo $data2;?>

// var markers1 = [
//         ['5','title',5.564333,95.337685,'Banda Aceh','Rumah Sakit','http://localhost/pelayanan_kesehatan/uploads/1.png'],
//         ['6','title',5.564333,95.337685,'Banda Aceh','Puskesmas','http://localhost/pelayanan_kesehatan/uploads/2.png'],
//         ['7','title',5.564333,95.337685,'Aceh Besar','Puskesmas','http://localhost/pelayanan_kesehatan/uploads/2.png'],
//
//   ];
// var data=7



function initialize() {
  var center = new google.maps.LatLng(4.6952462,96.9974882);
  var mapOptions = {
    zoom: 8,
  center: new google.maps.LatLng(4.6952462,96.9974882),
    mapTypeId: 'roadmap',
  };

  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  for (i = 0; i < markers1.length; i++) {
    addMarker(markers1[i],);
  }
}

/**
 * Function to add marker to map
 */

function addMarker(marker) {
  var tip = marker[5];
  var category = marker[4];
  var title = marker[1];
  var lokasi = marker[0];
  var pos = new google.maps.LatLng(marker[2], marker[3]);
  var content = marker[1];
  var icon=marker[5];

  marker1 = new google.maps.Marker({
    title: title,
    position: pos,
    tip: tip,
    category: category,
    map: map,
    icon:icon
  });

  gmarkers1.push(marker1);
  //var content = '<iframe src="get_info_databases_baru.php?id='+marker+'" width="350px" height="400px" scrolling="no" frameborder="0"></iframe>';
  // Marker click listener
 //  var infowindow = new google.maps.InfoWindow({
 //   content: content,
 //
 //   // Assign a maximum value for the width of the infowindow allows
 //   // greater control over the various content elements
 //   //maxWidth: 400,
 //   maxHeight: 500
 // });
 var infowindow = new google.maps.InfoWindow({
//
      maxWidth: 350,
       maxHeight: 500
    });
    google.maps.event.addListener(marker1, 'click', (function(marker1, i) {
  return function() {


    $.ajax({
      url : "get_info_databases_baru.php",
      data : "id=" +lokasi+"&&l="+lokasi,
      success : function(data) {
          infowindow.setContent(data);
          infowindow.open(map, marker1);
      }
    });
  }
})(marker1, i));
  // google.maps.event.addListener(marker1, 'click', (function(marker1, content) {
  //   return function() {
  //
  //     infowindow.open(map, marker1);
  //
  //   }
  // })(marker1, content));

  google.maps.event.addListener(map, 'click', function() {
   infowindow.close();
 });

 // *
 // START INFOWINDOW CUSTOMIZE.
 // The google.maps.event.addListener() event expects
 // the creation of the infowindow HTML structure 'domready'
 // and before the opening of the infowindow, defined styles are applied.
 // *


}

/**
 * Function to filter markers by category
 */

filterMarkers = function(category) {
  for (i = 0; i < markers1.length; i++) {
    marker = gmarkers1[i];
    // If is same category or category not picked
    if (marker.category == category || category.length === 0) {
      marker.setVisible(true);
    }
    // Categories don't match
    else {
      marker.setVisible(false);
    }
  }

}
var get_set_options = function() {
  ret_array = []
  for (option in filters) {
    if (filters[option]) {
      ret_array.push(option)
    }
  }
  return ret_array;
}

var filter_markers = function() {
  set_filters = get_set_options()

  // for each marker, check to see if all required options are set
  for (i = 0; i < markers.length; i++) {
    marker = markers[i];

    // start the filter check assuming the marker will be displayed
    // if any of the required features are missing, set 'keep' to false
    // to discard this marker
    keep = true
    for (opt = 0; opt < set_filters.length; opt++) {
      if (!marker.properties[set_filters[opt]]) {
        keep = false;
      }
    }
    marker.setVisible(keep)
  }
}


// Fuction for checkboxes
var tipovi = document.getElementsByClassName('chk-btn').value;

var selectAllChecked = function() {
  var checkedPlace = []
  var allCheckedElem = document.getElementsByName('filter');
  for (var i = 0; i < allCheckedElem.length; i++) {
    if (allCheckedElem[i].checked == true) {
      checkedPlace.push(allCheckedElem[i].value)//creating array of checked items

    }
  }
  filterChecker(checkedPlace) //passing to function for updating markers
}

var filterChecker = function(tip) {
  //console.log(tip);
  for (i = 0; i < markers1.length; i++) {
    marker = gmarkers1[i];
    //console.log(marker);
    if (in_array(this.marker.tip, tip) != -1) {
      marker.setVisible(true);
    } else {
      marker.setVisible(false);
    }
  }
}
// Init map
initialize();

function in_array(needle, haystack) {
  var found = 0;
  for (var i = 0, len = haystack.length; i < len; i++) {
    if (haystack[i] == needle) return i;
    found++;
  }
  return -1;
}

function toggleLayers(i)
{

  if(layers[i].getMap()==null) {
       layers[i].setMap(map);

    }
    else {
       layers[i].setMap(null);
    }
    document.getElementById('status').innerHTML += "toggleLayers("+i+") [setMap("+layers[i].getMap()+"] returns status: "+layers[i].getStatus()+"<br>";

}


    </script>
    <!-- js placed at the end of the document so the pages load faster -->
      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/hover-dropdown.js"></script>
      <script defer src="../js/jquery.flexslider.js"></script>
      <script type="../text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

      <script src="../js/jquery.easing.min.js"></script>
      <script src="../js/link-hover.js"></script>


       <!--common script for all pages-->
      <script src="../js/common-scripts.js"></script>


      <script src="../js/wow.min.js"></script>
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
