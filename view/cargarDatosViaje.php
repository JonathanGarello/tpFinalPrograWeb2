{{>headerAdmin}}
{{>navAdmin}}
<div class="w3-panel">
    <h5>Cargar Datos Primarios</h5>
    <form class="w3-container w3-card w3-padding-32 w3-white" action="/admin/crearViajes"  method = "POST">
        {{#id}}
        <label for="id">Tu id:</label><br>
        <input type="number" id="id" name="id" value={{id}} readonly onmousedown="return false;"><br>
        <label for="origen">Origen:</label><br>
        <input type="text" id="origen" name="origen"><br>
        <label for="destino">Destino:</label><br>
        <input type="text" id="destino" name="destino">
        <input type="submit" value="crear">
        {{/id}}
    </form>
</div>
{{>footerAdmin}}