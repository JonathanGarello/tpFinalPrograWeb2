{{>headerAdmin}}
{{>navAdmin}}
<div class="w3-panel">
    <h5>Usuarios Sin Rol</h5>
    <table class="w3-table w3-striped w3-white">
        {{#usuarios}}
        <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>{{username}}</td>
            <td><i><a href="/admin/verRoles/id={{id}}">dar Rol</a> </i></td>
        </tr>
        {{/usuarios}}
    </table>
</div>
{{>footerAdmin}}