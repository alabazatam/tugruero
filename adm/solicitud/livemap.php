<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<style>
html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        padding-left: 0px;
        padding-top: 0px;
		
        font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif ;    
        overflow-x: hidden;
	margin: 0;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;		
		
}
#map {
	height: 100%;
        padding-left: 10px;
        padding-right: 10px;
}
</style>

	<div id="map" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>


	<?php include('../../view_footer_solicitud.php')?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1_5ATmWh8kZkKHo6skucFrl9emI3dPMA&signed_in=false&libraries=places"></script>
	<script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
		var markerStore = {};
               
		var INTERVAL = 10000;
		var myLatlng = new google.maps.LatLng(10.5168373,-66.9279394);
		var myOptions = {
			zoom: 10,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		}
    var map = new google.maps.Map(document.getElementById("map"), myOptions);

    getMarkers();
function getMarkers() {
 var array_existe = [];
$.getJSON("<?php echo full_url;?>/adm/solicitud/index.php?action=json_solicitudes_livemap", function(json1) {
			$.each(json1, function(key, data) {
                                $.each(data, function(key, data) {
                                    //console.log(json1[0]);
                                     
                                       $.each(markerStore, function(i, value) {
                                        
                                        if((markerStore.hasOwnProperty(i))) {
                                               
                                               if(i == data.id)
                                               {
                                                  
                                                   //console.log("son iguales" + i + " " + data.id);
                                                   array_existe.push(data.id);
                                                   
                                               }
                                                   

                                        }
                                         
                                     });
                                     //console.log(array_existe);
                                    
                
                                        
                                    // Creating a marker and putting it on the map
                                    var infowindow = new google.maps.InfoWindow({
                                                    content: data.contentinfo
                                    });
                                    
                                    
                                    
                                    if((markerStore.hasOwnProperty(key))) {
                                        //alert(key + data.id);
                                    //console.log(markerStore[key]);
                                    //var array_existe = ["0", "2"];
                                    console.log(markerStore[key].id);
                                   /* var existe = markerStore.indexOf(5);
                                    if(existe == -1)
                                    {
                                      console.log("No existe en el json =" + markerStore[key].id);
                                    }*/
                                    
                                    if(markerStore[key].id == data.id)
                                    {
                                      console.log("existe");
                                    }else
                    {
                                      console.log("n");
                                    }
                                            markerStore[key].setPosition(new google.maps.LatLng(data.lat, data.lng));
                                            markerStore[key].setIcon({
                                                      path: google.maps.SymbolPath.CIRCLE,
                                                      fillColor: 'yellow',
                                                      fillOpacity: 0.8,
                                                      scale: 1,
                                                      strokeColor: data.iconcolor,
                                                      strokeWeight: 14,
                                                    });
                                    }else{
                                            
                                            var latLng = new google.maps.LatLng(data.lat, data.lng);
                                            var marker = new google.maps.Marker({
                                                    position: latLng,
                                                    icon: {
                                                      path: google.maps.SymbolPath.CIRCLE,
                                                      fillColor: 'yellow',
                                                      fillOpacity: 0.8,
                                                      scale: 1,
                                                      strokeColor: data.iconcolor,
                                                      strokeWeight: 14,
                                                    },
                                                    map: map,
                                                    title: data.title,
                                                    label: data.label,
                                                    id: data.id
                                            });
                                            if(data.id != 0)
                                            {
                                            
                                            infowindow.open(map, marker);
                                                    marker.addListener('click', function() {
                                                            infowindow.open(map, marker);
                                                    });						
                                            }
                                            if(data.id == 0)
                                            {       
                                                    var center = new google.maps.LatLng(data.latCenter, data.lngCenter);
                                                    //alert(center);
                                                    // using global variable:
                                                    map.panTo(center);
                                            }					
                                            marker.addListener('click', function() {
                                                    infowindow.open(map, marker);
                                            });
                                            markerStore[data.id] = marker;
                                    }

				

                                });
			});
                        
		});
		window.setTimeout(getMarkers,INTERVAL);
}
function clearOverlays() {
  for (var i = 0; i < markerStore.length; i++ ) {
    markerStore[i].setMap(null);
  }
  markerStore.length = 0;
}
    </script>