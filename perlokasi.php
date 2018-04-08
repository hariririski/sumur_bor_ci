<!DOCTYPE html>
<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js">

</script>
<script src=" https://maps.googleapis.com/maps/api/js?key=AIzaSyAC5P_tZTLf8yk8O56lho1wqV6cYxvLa5o&origins&callback=initMap"> </script>

<?php $lokasi=$_GET['lokasi']?>
<script>
var myCenter=new google.maps.LatLng(<?php echo$lokasi?>);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:100%;height:380px;"></div>
</body>
</html>
