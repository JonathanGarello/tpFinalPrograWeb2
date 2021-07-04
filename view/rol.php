<!DOCTYPE html>
<html>
<title>Trasporte La Matanza</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right">Trasportes</span>
</div>

<!-- Sidebar/menu -->
{{> narbarPrincipal}}
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-dashboard"></i> Mi Sistema</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-red w3-padding-16">
                <div class="w3-left"><i class="fa fa-bell w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>52</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Alertas</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
                <div class="w3-left"><i class="fa fa-truck w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>99</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Vehiculos</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-teal w3-padding-16">
                <div class="w3-left"><i class="fa fa-map-marker w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>23</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Viajes Finalizados</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>50</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Usuarios Totales</h4>
            </div>
        </div>
    </div>

    <div class="w3-panel">
        <h1>Determine Rol</h1>
        {{#usuarios}}
        <form action="/principal/darRol" method="POST">
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
</body>
</html>
    </div>

    <!-- End page content -->
</div>

{{> finalPrincipal}}

</body>
</html>