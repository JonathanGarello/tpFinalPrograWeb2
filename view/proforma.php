{{>headerAdmin}}
<div class="w3-row" id="contact">
    <div class="w3-indigo w3-container " style="height:700px">
        <div class="w3-padding-64 w3-padding-large">
            <h1>PROFORMA</h1>
            <p class="w3-opacity">REGISTRO DE DATOS</p>
            <form class="w3-container w3-card w3-padding-32 w3-white" action="proforma/validarProforma"  method = "POST">
                <div class="w3-section">
                    <label>Proforma</label><br>
                    <label>Número: </label>
                    <input class="w3-input" style="width:100%;" type="number" required name="numero">
                    <label>Fecha: </label>
                    <input class="w3-input" style="width:100%;" type="date" required name="fecha">
                </div>
                <br>
                <div class="w3-section">
                    <label>Cliente</label><br>
                    <label>Denominacion:</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="denominación">
                    <label>Cuit:</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="cuit">
                    <label>Telefono:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="telefono">
                    <label>Email:</label>
                    <input class="w3-input" style="width:100%;" type="email" required name="email">
                    <label>Contacto 1:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="contacto 1">
                    <label>Contacto 2:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="contacto 2">
                </div>
                <br>
                <div class="w3-section">
                    <label>Viaje</label>
                    <label>Origen:</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="origen">
                </div>
                <br>
                <div class="w3-section">
                    <label>Destino:</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="destino">
                </div>
                <br>
                <div class="w3-section">
                    <label>Fecha de carga:</label>
                    <input class="w3-input" style="width:100%;" type="date" required name="fechaDeCarga">
                </div>
                <br>
                <div class="w3-section">
                    <label>ETA:</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="eta">
                </div>
                <br>
                <div class="w3-section">
                    <label>Carga</label>
                    <label>Tipo:</label>
                    <select name="Tipo">
                        <option value="granel">Granel</option>
                        <option value="liquida" >Líquida</option>
                        <option value="20">20</option>
                        <option value="40">40</option>
                        <option value="jaula">Jaula</option>
                        <option value="CarCarrier">Car Carrier</option>
                    </select>
                </div>
                <br>
                <div class="w3-section">
                    <label>Peso neto:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="pesoNeto">
                </div>
                <br>
                <div class="w3-section">
                    <label>Hazard:</label>
                    <label><input type="radio" name="hazard" value="si"> Si</label><br>
                    <label><input type="radio" name="hazard" value="no"> No</label><br>
                </div>
                <br>
                <div class="w3-section">
                    <label>IMO class:</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="imoClass">
                </div>
                <br>
                <div class="w3-section">
                    <label>IMO Sclass:</label>
                    <input class="w3-input" style="width:100%;" type="text" required name="imoSclass">
                </div>
                <br>
                <div class="w3-section">
                    <label>Temperatura:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="temperatura">
                </div>
                <br>
                <div class="w3-section">
                    <label>Costeo</label>
                    <label>Kilometros:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoKm">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realKm">
                </div>
                <br>
                <div class="w3-section">
                    <label>Combustible:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoCombustible">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realCombustible">
                </div>
                <br>
                <div class="w3-section">
                    <label>ETD:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoEtd">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realEtd">
                </div>
                <br>
                <div class="w3-section">
                    <label>ETA:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoEta">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realEta">
                </div>
                <br>
                <div class="w3-section">
                    <label>Viaticos:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoViaticos">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realViaticos">
                </div>
                <div class="w3-section">
                    <label>Peajes y pasajes:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoPasajes">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realPasajes">
                </div>
                <div class="w3-section">
                    <label>Extras:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoExtras">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realExtras">
                </div>
                <div class="w3-section">
                    <label>Hazard:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoHhazard">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realHazard">
                </div>
                <div class="w3-section">
                    <label>Reefer:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoRefeer">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realReefer">
                </div>
                <div class="w3-section">
                    <label>Free:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoFree">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realFree">
                </div>
                <div class="w3-section">
                    <label>Total:</label>
                    <label>Estimado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="estimadoTotal">
                    <label>Real:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="realTotal">
                </div>
                <div class="w3-section">
                    <label>Personal:</label>
                    <label>Chofer asignado:</label>
                    <input class="w3-input" style="width:100%;" type="number" required name="choferAsignado">
                </div>
                <button type="submit" class="w3-button w3-teal w3-right">Registrarme</button>
            </form>
        </div>
    </div>
</div>
{{>footerLogin}}