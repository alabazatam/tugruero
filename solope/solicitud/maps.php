<?php include("../../autoload.php");?>	
<?php include('../../view_header_app.php')?>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
		padding-left: 10px;
		padding-top: 10px;
		
    font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif ;
    background: url(<?php echo full_url?>/web/img/fondos/Fondo-Tu-Gruero2.jpg) no-repeat center center fixed ;
    
    overflow-x: hidden;
    margin: 0;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;		
		
      }
      #map {
        height: 80%;
      }
	#floating-panel {
	  position: absolute;
	  top: 50px;
	  left: 25%;
	  z-index: 5;
	  background-color: #fff;
	  padding: 5px;
	  border: 1px solid #999;
	  text-align: center;
	  font-family: 'Roboto','sans-serif';
	  line-height: 30px;
	  padding-left: 10px;
	}
.controls {
    margin-top: 10px;
    border: 1px solid transparent;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#searchInput {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 50%;
}
#searchInput:focus {
    border-color: #4d90fe;
}
label {
	color: #fff;
}
h1, h2 ,h3 {
	color: #fff;
}
    </style>
	<body>
				<input id="searchInput" class="controls" type="text" placeholder="Coloque el lugar del accidentado">

				<div id="map" class="col-xs-12 col-sm-12 col-md-6 col-lg-6"></div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<form class="form-horizontal" action="#" method="POST">
					<div id="form-group">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<input onclick="deleteMarkers();" type=button value="Borrar Marcadores" class="btn btn-danger">	
							<input id="country" type="text" value="" class="controls">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="latlon">Lat/Long Origen</label>
							<input id="latlon" type="text" value=""  class="form-control input-sm" size="50" readonly="readonly">
							<label for="location">Direccion de Origen</label>
							<input id="location" type="text" value=""  class="form-control input-sm" size="50">

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="latlonl">Lat/Long destino</label>
							<input id="latlonl" type="text" value="" class="form-control input-sm" size="50" readonly="readonly">
							<label for="EstadoOrigen">Estado origen</label>
							<select name="EstadoOrigen" id="EstadoOrigen" class="form-control">
								<option value="">Seleccione</option>
								<option value="Amazonas">Amazonas</option>
								<option value="Anzoátegui">Anzoátegui</option>
								<option value="Apure">Apure</option>
								<option value="Aragua">Aragua</option>
								<option value="Barinas">Barinas</option>
								<option value="Bolivar">Bolivar</option>
								<option value="Carabobo">Carabobo</option>
								<option value="Cojedes">Cojedes</option>
								<option value="Delta Amacuro">Delta amacuro</option>
								<option value="Dependencias Federales">Dependencias federales</option>
								<option value="Distrito Capital">Distrito Capital</option>
								<option value="Falcón">Falcón</option>
								<option value="Guárico">GUARICO</option>
								<option value="Lara">Lara</option>
								<option value="Mérida">Mérida</option>
								<option value="Miranda">Miranda</option>
								<option value="Monagas">Monagas</option>
								<option value="Nueva Esparta">Nueva Esparta</option>
								<option value="Portuguesa">Portuguesa</option>
								<option value="Sucre">Sucre</option>
								<option value="Táchira">Táchira</option>
								<option value="Trujillo">Trujillo</option>
								<option value="Vargas">Vargas</option>
								<option value="Yaracuy">Yaracuy</option>
								<option value="Zulia">Zulia</option>
							</select>						
							<label for="locationl">Direccion destino</label>
							<input id="locationl" type="text" value="" class="form-control input-sm" size="50">

						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h2>Datos solicitud</h2>
							<label for="QueOcurre">¿Qué ocurre?</label>
							<select class="form-control input-sm" name='QueOcurre' id='QueOcurre'>
								<option value="">Seleccione</option>
								<option value="Fallo de encendido">Fallo de encendido / No puedo rotar</option>
								<option value="Neumático espichado">Neumático espichado / Torcido</option>
								<option value="Volante">Volante / Palanca trabada</option>
								<option value="Falla de encendido">Falla de encendido / No puedo rotar</option>
								<option value="Encunetado">Encunetado</option>
								<option value="Choqué">Choqué</option>
								<option value="Otra falla">Otra falla</option>
							</select>
							<div class="row">
								<label for="">Neumaticos delanteros</label>
								<input id="caucho1" type="checkbox" value="1" class=" input-sm">
								<input id="caucho2" type="checkbox" value="1" class=" input-sm">
								<label for="">Neumaticos delanteros</label>
								<input id="caucho3" type="checkbox" value="1" class=" input-sm">
								<input id="caucho4" type="checkbox" value="1" class="input-sm">
							</div>
							<label for="Situacion">Detalles importantes</label>
							<select class="form-control input-sm" name='Situacion' id='Situacion'>
								<option value="">Seleccione</option>
								<option value="Calle plana">Calle plana</option>
								<option value="Calle inclinada">Calle inclinada</option>
								<option value="Atascado en barro o arena">Atascado en barro o arena</option>
								<option value="Estacionamiento techado o sótano">Estacionamiento techado o sótano</option>
							</select>
							<h3>Detalles importantes</h3>
							<label for="CellContacto">Contacto</label>
							<input type="text" name="CellContacto" id="CellContacto" class="form-control input-sm" placeholder="Contacto">
							<label for="InfoAdicional">Informacion adicional</label>
							<textarea name="InfoAdicional" id='InfoAdicional' class="form-control input-sm" placeholder="Informacion adicional"></textarea>
							<a id="enviaSolicitud" name="" class="btn btn-success btn-lg">Solicitar</a>
						</div>	
					</div>		
				</div>			
	</body>
	  
<script>

// In the following example, markers appear when the user clicks on the map.
// The markers are stored in an array.
// The user can then click an option to hide, show or delete the markers.
var map;
var markers = [];
var labels = '';
var labelIndex = 0;
var color = '';
function initMap() {
  var haightAshbury = {lat: 10.490438279359, lng: -66.85555508755};

  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: haightAshbury,
	disableDefaultUI: true,
    zoomControl: true,
    scaleControl: true

  });

  
  // This event listener will call addMarker() when the map is clicked.
  map.addListener('click', function(event) {
    addMarker(event.latLng);
	
  });



   var input = document.getElementById('searchInput');
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });

    autocomplete.addListener('place_changed', function() {
        //infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }
  
        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(14);
        }
        marker.setIcon(({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
    
        var address = '';
        if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    
        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);
      
        //Location details
        for (var i = 0; i < place.address_components.length; i++) {
            if(place.address_components[i].types[0] == 'postal_code'){
                document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
            }
            if(place.address_components[i].types[0] == 'country'){
                document.getElementById('country').innerHTML = place.address_components[i].long_name;
            }
        }
        document.getElementById('location').innerHTML = place.formatted_address;
        document.getElementById('lat').innerHTML = place.geometry.location.lat();
        document.getElementById('lon').innerHTML = place.geometry.location.lng();
    });
  
}

// Adds a marker to the map and push to the array.
function addMarker(location) {
	
	
	if(markers.length <= 1)
	{
	
	if(labelIndex==0)
	{
		labels = 'Partida';
		color = 'green';
	}else
	{
		color = 'blue';
		labels = 'Llegada';
	}
	labelIndex++;
	var marker = new google.maps.Marker({
	  position: location,
	  icon: {
		path: google.maps.SymbolPath.CIRCLE,
		//path: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
		fillColor: 'yellow',
		fillOpacity: 0.8,
		scale: 5,
		strokeColor: color,
		strokeWeight: 14,
	  },
	  draggable: true,
	  map: map,
	  //label: labels[labelIndex++ % labels.length]
	  label: labels
	});
	
		marker.info = new google.maps.InfoWindow({
		  content: '<b>Accidentado: Marcos De Andrade Póliza </b> <br>hola knots'
		});	
		marker.info.open(map, marker);	
	
	marker.addListener('dragend', function(event) {
		//alert(event.latLng);
		if(marker.label == 'Partida')
		{
			$('#latlon').val(event.latLng);
			showLocationAddress(event.latLng,0);
			
		}else if(marker.label == 'Llegada')
		{
			$('#latlonl').val(event.latLng);
			showLocationAddress(event.latLng,1);
		}else{
			alert('Error seleccionando el punto');
		}
		
		
	});

		if(marker.label == 'Partida')
		{
			$('#latlon').val(location);
			showLocationAddress(location,0);
			
		}else if(marker.label == 'Llegada')
		{
			$('#latlonl').val(location);
			showLocationAddress(location,1);
		}else{
			alert('Error seleccionando el punto');
		}
	  
	
	markers.push(marker);
	
	  
  }	
	
	



}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
  $('#latlon').val(null);
  $('#latlonl').val(null);
  $('#location').val(null);
  $('#locationl').val(null);
  
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
  labelIndex = 0;
}

function showLocationAddress(location,parameter) {

var latlng = { lat: 10.500639925300456, lng: -66.86270713806152 };
var geocoder = new google.maps.Geocoder;

 geocoder.geocode({'location': location}, function(results, status) {
  if (status === google.maps.GeocoderStatus.OK) {
    //$('#location').empty();
    //$('#location').val(results[0].formatted_address);
	//alert(results[0].formatted_address);
	if(parameter == 0)
	{
		$('#location').val(results[0].formatted_address);
		//$('#EstadoOrigen').val(results[0].address_components[2]['long_name']);
		//$('#EstadoOrigen').val(results[0].geometry.location);
	}else if(parameter == 1)
	{
		$('#locationl').val(results[0].formatted_address);
		
	}else{
		alert('fallo geolocalizando');
	}
	//return results[0].formatted_address;
  } else {
   window.alert('Geocoder failed due to: ' + status);
  }
 });
 
}

    </script>
<script>
	
	$(document).ready(function(){

		$('#enviaSolicitud').click(function(){
			
			var latlon = $('#latlon').val();
			latlon = latlon.replace("(", "");
			latlon = latlon.replace(")", "");
			latlon = latlon.split(","); 
			
			var latlonl = $('#latlonl').val();
			latlonl = latlonl.replace("(", "");
			latlonl = latlonl.replace(")", "");
			latlonl = latlonl.split(","); 
			
			var arr = {
				idPoliza: 5,
				latOrigen:latlon[0],
				lngOrigen: latlon[1],
				latDestino: latlonl[0],
				lngDestino: latlonl[1],
				Direccion: $('#location').val(),
				CellContacto: $('#CellContacto').val(),
				InfoAdicional: $('#InfoAdicional').val(),
				EstadoOrigen: $('#EstadoOrigen').val(),
				QueOcurre: $('#QueOcurre').val(),
				Neumaticos:'0100',
				Situacion: $('#Situacion').val()
			};
				$.ajax({
					type: "POST",
					url: 'http://localhost/clienteapp/solicitudCliente.php',
					//url: 'http://52.25.178.106/clienteapp/solicitudCliente.php',
					data: JSON.stringify(arr),
					contentType: 'application/json; charset=utf-8',
					async: false,
					success: function(data){
						alert('ready');
					},
					crossDomain: true,
					dataType: 'json',
					//success: function() { alert("Success"); },
					//error: function() { alert('Failed!'); },
				});
		});
	});


</script>	
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1_5ATmWh8kZkKHo6skucFrl9emI3dPMA&signed_in=true&callback=initMap&libraries=places"></script>

	</body>
</html>
<?php include '../../view_footer_clean.php';?>