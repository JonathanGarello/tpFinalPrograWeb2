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

    });

    }


</script>


<h5>Coloce Su Ubicacion</h5>

    <div id="mapa" style="width:1200px; height:400px;"></div>

<div class="w3-panel">
    <h5>Coloque sus Gastos</h5>
    <form class="w3-container w3-card w3-padding-32 w3-white" action=""  method = "POST">
        <div class="w3-section">
            <label>Carga De Combustible:</label>
            <input class="w3-input" style="width:100%;" type="number" required name="carga">
            <label>Lugar:</label>
            <input class="w3-input" style="width:100%;" type="text" required name="lugar">
            <label>Cantidad:</label>
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
    {{#exito}}
    <br>
    {{exito}}
    <br>
    {{/exito}}
</div>
{{>footerAdmin}}