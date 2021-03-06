{{>headerLogin}}
<div class="w3-row" id="contact">
    <div class="w3-half w3-indigo w3-container " style="height:750px">
        <div class="w3-padding-32 w3-padding-large">
            <h1>Transportes La Matanza</h1>
        </div>
    </div>
    <div class="w3-half w3-teal w3-container" style="height:750px">
        <div class="w3-padding-32 w3-padding-large">
            <h1>Login</h1>
            <p class="w3-opacity">INGRESO DE DATOS</p>
            <form class="w3-container w3-card w3-padding-32 w3-white" action="login/procesarLogin"  method = "POST">
                <div class="w3-section">
                    <label>Username</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="loginNombre" id="loginNombre">
                </div>
                <div class="w3-section">
                    <label>Password</label>
                    <input class="w3-input" style="width:100%;" type="password" required name="loginPassword" id="loginPassword">
                </div>
                <button type="submit" class="w3-button w3-teal w3-right">Sign In</button>
                {{#error}}
                <br>
                {{error}}
                <br>
                {{/error}}
                {{#error2}}
                <br>
                {{error2}}
                <br>
                {{/error2}}
            </form>
            <p> Si aún no estas en la app,
                <a href="../registrar">registrate!!!</a>
            </p>
        </div>
    </div>
</div>

<!-- Footer -->
{{> footerLogin}}