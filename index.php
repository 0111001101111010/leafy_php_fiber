<html>
<head>
	<link rel='stylesheet' href='http://cdn.leafletjs.com/leaflet-0.7/leaflet.css' />
	<script src='http://cdn.leafletjs.com/leaflet-0.7/leaflet.js' type='text/javascript'></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type='text/javascript'></script>
 	<script src="http://beta.mapquestapi.com/sdk/leaflet/v0.1/mq-map.js?key=Fmjtd%7Cluubn90znq%2C2l%3Do5-902wha "></script>
	<style type="text/css">
		html, body {height: 100%;overflow: hidden;}
		#map {height: 100%;}
	</style>
</head>
<body>
	<div id="map"></div>

 <script>



 //http://gis.stackexchange.com/questions/41491/openlayers-2-12-and-http-basic-authentication-woes/43526#43526
jQuery.support.cors = true;

// unrequired 




	
	var map = new L.Map('map', {
		layers: MQ.mapLayer(),
		center: [37.2708, -76.7069],
		zoom: 10
	});
//console.log(test.responseText);
	
	//L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	//	attribution: '© OpenStreetMap contributors'
	//}).addTo(map);
var mapLayer = MQ.mapLayer(),
    map;
 
/*L.map('map', {
		layers: MQ.mapLayer(),
		center: [37.2708, -76.7069],
		zoom: 10
});
*/
 
L.control.layers({
    'Map': mapLayer,
    'Satellite': MQ.satelliteLayer(),
    'Hybrid': MQ.hybridLayer()
}).addTo(map);


	L.tileLayer.wms('http://nefms.nbtsolutions.net/api/?',{  //?SPHERICALMERCATOR=true&LAYERS=lh_centurylink&TRANSPARENT=TRUE&FORMAT=image%2Fpng&SERVICE=WMS&VERSION=1.1.1&REQUEST=GetMap&STYLES=&SRS=EPSG%3A900913&BBOX=-18817124.993832,3536568.1049742,-3730290.1011178,6119528.1644274&WIDTH=1542&HEIGHT=264&user=nefportal&pwd=olfk$90", {
    layers: 'lh_centurylink',
        transparent: true,
        SPHERICALMERCATOR: true,
        WIDTH:1542,
        HEIGHT:512,
        EXCEPTIONS:"application/vnd.ogc.se_inimage",
        SRS:'EPSG:4326'
   // attribution: "Weather data © 2012 IEM Nexrad"
}).addTo(map);



//the controls
var legend = L.control({position: 'topright'});
legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend');
    div.innerHTML = '<select><option>Layer1</option><option>Layer2</option><option>Layer3</option></select>';
    div.firstChild.onmousedown = div.firstChild.ondblclick = L.DomEvent.stopPropagation;
    return div;
};
legend.addTo(map);	
    	//console.log(test.responseText);
        // Yuppieeeeee!
        //map.addLayer(myLayer);   
         // The browser wil set up the 
         // authentication in the request for you

$.ajax({
    url: 'http://localhost/~stanzheng/code/nbt/leaf_php_fiber/proxy_lk.php?url=http://nefms.nbtsolutions.net/api/?service=wms&version=1.1.1&request=GetCapabilities',
   // data: '?VERSION=1.1.1&REQUEST=GetCapabilities&SERVICE=WMS',
    method: 'GET',
    error: function(jqXHR, textStatus, errorThrown){
        // Handle not authoruzed here
        console.log("request failed");
    },
    success: function(response) {
        //console.log(response);
            $(response).find('Layer').each(function(){
                    var name = $(this).find("Name").text()
                    console.log(name + '\n');
                });
            }

}
);


</script>



</body>
</html>
