{{>headerAdmin}}
{{>navAdmin}}
<div class="w3-panel">
    <h5>Proformas</h5>
    <table class="w3-table w3-striped w3-white">
        {{#prof}}
        <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>{{destino}}</td>
            <td><i><a href="/admin/cargas/id={{id}}">Aplicar Proforma</a> </i></td>
        </tr>
        {{/prof}}
    </table>
</div>
{{>footerAdmin}}