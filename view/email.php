
{{> headerlogin}}
<!-- Login y Logo -->
<div class="w3-row" id="contact">
    <div class="w3-half w3-teal w3-container w3-padding-32 w3-padding-large" style="height:700px">
        <h1>Transportes La Matanza</h1>
    </div>
    <div class="w3-half w3-indigo w3-container " style="height:700px">
        <div class="w3-padding-32 w3-padding-large">
            {{#error}}
            <br>
            {{error}}
            <br>
            {{/error}}
            {{#username}}
            <h1>Su cuenta fue validada con exito</h1>
            <p class="w3-opacity">

                {{username}}, ahora debes esperar que tu administrador te asigne un rol para poder ingresar a la app.</p>

            <p class="w3-opacity">Muchas gracias.</p>
            <a href="login/index">Ir a login</a>
            {{/username}}
        </div>

    </div>
</div>
<!-- Footer -->
{{> footerLogin}}