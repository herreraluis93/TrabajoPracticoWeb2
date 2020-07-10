<h2 style="margin-top:100px;margin-left:400px">Formulario de Suscripcion</h2>
<div class="container" style="margin-top:120px;margin-left:450px">
  <div class="col1">
    <div class="card">
      <img src="<?=base_url?>img/fondoTarjeta.jpg"> 
      <div class="front">
        <div class="type">
          <img src="<?=base_url?>img/Visa_logo.png"> 
        </div>
        <span class="chip">
          <img src="<?=base_url?>img/chip.jpg">
        </span>
        <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
        <div class="date"><span class="date_value">MM / AAAA</span></div>
        <span class="fullname">NOMBRE COMPLETO</span>
      </div>
      <div class="back">
      <img src="<?=base_url?>img/fondoTarjeta.jpg"> 
        <div class="magnetic"></div>
        <div class="bar"></div>
        <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
        <span class="chip"></span><span class="disclaimer">This card is property of Random Bank of Random corporation. <br> If found please return to Random Bank of Random corporation - 21968 Paris, Verdi Street, 34 </span>
      </div>
    </div>
  </div>
  <div class="col2">
    <form action="<?=base_url?>suscripcion/guardarSuscripcion" method="POST">
    <label>Suscribirse a</label>
    <select>
      <option value="Diario">Diario</option>
      <option value="Revista">Revista</option>
    </select>
    <label>Tipo de suscripcion</label>
    <select >
      <option value="Semanal">Semanal</option>
      <option value="Mensual">Mensual</option>
    </select><br><br>
    <label>Numero de Tarjeta</label>
    <input class="number" type="text" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <label>Nombre del titular</label>
    <input class="inputname" type="text" placeholder=""/>
    <label>Fecha Vencimiento</label>
    <input class="expire" type="text" placeholder="MM / YYYY"/>
    <label>Numero de Seguridad</label>
    <input class="ccv" type="text" placeholder="CVC" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <button class="buy">PAGAR</button>
</form>
  </div>
</div>