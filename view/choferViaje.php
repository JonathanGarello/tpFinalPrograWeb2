{{>headerAdmin}}
{{>navAdmin}}
<script>
    function loadMap() {

        var mapOptions = {
            center:new google.maps.LatLng(-34.6686986,-58.5614947),
            zoom:12,
            panControl: false,
            zoomControl: false,
            scaleControl: false,
            mapTypeControl:false,
            streetViewControl:true,
            overviewMapControl:true,
            rotateControl:true,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("mapa"),mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-34.6686986,-58.5614947),
            map: map,
            draggable:true,
        });

        google.maps.event.addListener(map, "rightclick", function(event) {
            var lat = event.latLng.lat();
            var lng = event.latLng.lng();

            document.a1.lat.value = lat;
            document.a1.lon.value = lng;

        });

    }


</script>


<h5>Coloce Su Ubicacion</h5>

<div id="mapa" style="width:1200px; height:400px;"></div>

<div class="w3-panel">
    <h5>Coloque sus Gastos</h5>
    {{#id}}
    <form name="a1" class="w3-container w3-card w3-padding-32 w3-white" action="/admin/carga"  method = "POST">
        <div class="w3-section">
            <label  >ID de viaje</label>
            <input value={{id}}  id="id" class="w3-input" style="width:100%;" type="number" required name="id" readonly onmousedown="return false;">
            <label  >Latitud</label>
            <input id="lat" class="w3-input" style="width:100%;" type="text" required name="lat">
            <label  >Longitud</label>
            <input id="lon" class="w3-input" style="width:100%;" type="text" required name="lon">
            <label>Carga De Combustible:</label>
            <input class="w3-input" style="width:100%;" type="number" required name="carga">
            <label>Nombre del Lugar de carga:</label>
            <input class="w3-input" style="width:100%;" type="text" required name="lugar">
            <label>Cantidad peaje:</label>
            <input class="w3-input" style="width:100%;" type="number" required name="cantidad">
            <label>Importe Final:</label>
            <input class="w3-input" style="width:100%;" type="number" required name="importe">
            <label>Kilometros de la Unidad:</label>
            <input class="w3-input" style="width:100%;" type="number" required name="kilometros">
            <label>Varios:</label>
            <input class="w3-input" style="width:100%;" type="number" required name="varios">
        </div>
        <button type="submit" class="w3-button w3-teal w3-right">Registrar</button>

    </form>
    {{/id}}
</div>
{{>footerAdmin}}