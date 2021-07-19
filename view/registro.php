{{> headerlogin}}
<!-- Login y Logo -->
<div class="w3-row" id="contact">
    <div class="w3-half w3-indigo w3-container " style="height:750px">
        <div class="w3-padding-16 w3-padding-large">
            <h1>Registro</h1>
            <p class="w3-opacity">REGISTRO DE DATOS</p>
            <form class="w3-container w3-card w3-padding-32 w3-white" action="registrar/validarRegistro"  method = "POST">
                <div class="w3-section">
                    <label>Nombre</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="nombre">
                </div>
                <div class="w3-section">
                    <label>Apellido</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="apellido">
                </div>
                <div class="w3-section">
                    <label>UserName</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="username">
                </div>
                <div class="w3-section">
                    <label>Email</label>
                    <input class="w3-input" style="width:100%;" type="email" required name="email">
                </div>
                <div class="w3-section">
                    <label>Password</label>
                    <input class="w3-input" style="width:100%;" type="password" required name="contra">
                </div>
                <div class="w3-section">
                    <label>Confirma Password</label>
                    <input class="w3-input" style="width:100%;" type="password" required name="confirmaPassword">
                </div>
                <button type="submit" class="w3-button w3-teal w3-right">Registrarme</button>
                {{#datos}}
                <br>
                {{datos}}
                <br>
                {{/datos}}
            </form>
        </div>
    </div>
    <div class="w3-half w3-teal w3-container w3-padding-16 w3-padding-large" style="height:750px">
        <h1>Transportes La Matanza</h1>
    </div>
</div>
<!-- Footer -->
{{> footerLogin}}

