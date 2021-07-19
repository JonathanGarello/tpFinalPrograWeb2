{{>headerAdmin}}
{{>navAdmin}}
<div class="w3-panel">
    <h5>Viajes Activos</h5>
    <table class="w3-table w3-striped w3-white">
        {{#activos}}
        <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>{{destino}}</td>
            <td><i><a href="/admin/cargarDatos/id={{id}}">Cargar Gastos De Viaje</a> </i></td>
        </tr>
        {{/activos}}
    </table>
</div>
{{>footerAdmin}}