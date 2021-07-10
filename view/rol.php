{{>headerAdmin}}
{{>navAdmin}}
<div class="w3-panel">
    <h1>Determine Rol</h1>
    {{#usuarios}}
    <form action="/admin/darRol" method="POST">
        <input id="id" name="id" type="hidden" value={{id}}>
        <input id="nombre" name="nombre" type="hidden" value={{nombre}}>
        <input id="apellido" name="apellido" type="hidden" value={{apellido}}>
        <input id="username" name="username" type="hidden" value={{username}}>
        <input id="contra" name="contra" type="hidden" value={{contra}}>
          <input type="radio" id="chofer" name="language" value="chofer">
          <label for="chofer">chofer</label><br>
          <input type="radio" id="supervisor" name="language" value="supervisor" checked="checked">
          <label for="supervisor">supervisor</label><br>
          <input type="radio" id="encargado" name="language" value="encargado">
          <label for="encargado">encargado</label><br><br>
        <input type="submit" value="Cargar">
    </form>
    {{/usuarios}}

</div>

{{> footerAdmin}}