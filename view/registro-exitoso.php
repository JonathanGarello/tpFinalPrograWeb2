{{> headerlogin}}
<!-- Login y Logo -->
<div class="w3-row" id="contact">
    <div class="w3-half w3-teal w3-container w3-padding-64 w3-padding-large" style="height:700px">
        <h1>Transportes La Matanza</h1>
    </div>
    <div class="w3-half w3-indigo w3-container " style="height:700px">
        <div class="w3-padding-64 w3-padding-large">
            <h1>Validación de registro en proceso</h1>

            <p class="w3-opacity">{{#exito}}
                {{exito}}, para finalizar tu registro y poder activar tu cuenta necesitamos que valides tu email.</p>
                {{/exito}}
            <p class="w3-opacity">Por dicha razón, te hemos enviado un correo donde deberás confirmar tu email, muchas gracias.</p>
        </div>
    </div>
</div>
<!-- Footer -->
{{> footerLogin}}

