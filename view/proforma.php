{{>headerAdmin}}
{{>navAdmin}}
<div class="w3-panel">
                <h1>PROFORMA</h1>
                    {{#exito}}
                    <br>
                    {{exito}}
                    <br>
                    {{/exito}}
                <p class="w3-opacity">REGISTRO DE DATOS</p>
                <form class="w3-container w3-card w3-padding-32 w3-white" action="proforma/validarProforma"  method = "POST">
                    <div class="w3-section">
                        <h3>Proforma</h3><br><br>
                        <label>Número: </label>
                        <input class="w3-input" style="width:100%;" type="number" required name="numero"><br>
                        <label>Fecha: </label>
                        <input class="w3-input" style="width:100%;" type="date" required name="fecha">
                    </div>
                    <br>
                    <div class="w3-section">
                        <h3>Cliente</h3><br><br>
                        <label>Denominacion:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="denominación"><br>
                        <label>Cuit:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="cuit"><br>
                        <label>Telefono:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="telefono"><br>
                        <label>Email:</label>
                        <input class="w3-input" style="width:100%;" type="email" required name="email"><br>
                        <label>Contacto 1:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="contacto1"><br>
                        <label>Contacto 2:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="contacto2">
                    </div>
                    <br>
                    <div class="w3-section">
                        <h3>Viaje</h3><br><br>
                        <label>Origen:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="origen"><br>
                        <label>Destino:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="destino"><br>
                        <label>Fecha de carga:</label>
                        <input class="w3-input" style="width:100%;" type="date" required name="fechaCarga"><br>
                        <label>ETA:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="eta">
                    </div>
                    <br>
                    <div class="w3-section">
                        <h3>Carga</h3><br><br>
                        <label>Tipo:</label>
                        <select name="tipo">
                            <option value="granel">Granel</option>
                            <option value="liquida" >Líquida</option>
                            <option value="20">20</option>
                            <option value="40">40</option>
                            <option value="jaula">Jaula</option>
                            <option value="CarCarrier">Car Carrier</option>
                        </select><br> <br>
                        <label>Peso neto:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="pesoNeto"><br>
                        <label>Hazard:</label><br><br>
                        <label><input type="radio" name="hazard" value="si"> Si</label>
                        <label><input type="radio" name="hazard" value="no"> No</label><br><br>
                        <label>Reefer:</label><br><br>
                        <label><input type="radio" name="reefer" value="si"> Si</label>
                        <label><input type="radio" name="reefer" value="no"> No</label><br><br>
                        <label>IMO class:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="imoClass"><br>
                        <label>IMO Sclass:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="imoSclass"><br>
                        <label>Temperatura:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="temperatura">
                    </div>
                    <br>
                    <div class="w3-section">
                        <h3>Costeo</h3> <br> <br>
                        <label>Kilometros:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoKm"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realKm"> <br>
                        <label>Combustible:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="estimadoCombustible"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="text" required name="realCombustible"> <br>
                        <label>ETD:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoEtd"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realEtd"> <br>
                        <label>ETA:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoEta"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realEta"> <br>
                        <label>Viaticos:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoViaticos"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realViaticos"> <br>
                        <label>Peajes y pasajes:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoPasajes"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realPasajes"> <br>
                        <label>Extras:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoExtras"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realExtras"> <br>
                        <label>Hazard:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoHhazard"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realHazard"> <br>
                        <label>Reefer:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoRefeer"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realReefer"> <br>
                        <label>Free:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoFree"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realFree"> <br>
                        <label>Total:</label> <br><br>
                        <label>Estimado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="estimadoTotal"> <br>
                        <label>Real:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="realTotal">
                    </div>
                    <br>
                    <div class="w3-section">
                        <h3>Personal:</h3> <br>
                        <label>Chofer asignado:</label>
                        <input class="w3-input" style="width:100%;" type="number" required name="choferAsignado">
                    </div>
                    <button type="submit" class="w3-button w3-teal w3-right">Registrarme</button>
                </form>

{{>footerAdmin}}