<?php include('../../view_header_app.php')?>

<form action="" method="post" id="pay" name="pay" class="">
  <div class="form-group col-sm-12">
    <label for="email" class="control-label">Correo electrónico</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" class="form-control" autocomplete="off" id="email" maxlength="" value="<?php if(isset($values['Correo']) and $values['Correo']!='') echo $values['Correo'];?>" placeholder="Ejemplo: correo@gmail.com">
    </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="cardNumber" class="control-label">Número de tarjeta</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" class="form-control" autocomplete="off" id="cardNumber" maxlength=""  placeholder="Ejemplo: 4966382331109310">
    </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="securityCode" class="control-label">Código de seguridad</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" class="form-control" autocomplete="off" id="securityCode" maxlength="" placeholder="Ejemplo: 4966382331109310">
    </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="cardExpirationYear" class="control-label">Año de vencimiento</label> <label class="text-danger"> * </label>
    <div class="">
        <select name="cardExpirationYear" id="cardExpirationYear" class="form-control">
                    <option value="">Seleccione...</option>

                <?php for($anio = (date('Y')-17); $anio<=date('Y'); $anio++):?>
                    <option value="<?php echo $anio?>" <?php if(isset($values['Anio']) and $anio == $values['Anio']) echo "selected='selected'";?>><?php echo $anio?></option>    
                <?php endfor;?>
 
        </select>
    </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="cardExpirationMonth" class="control-label">Mes de vencimiento</label> <label class="text-danger"> * </label>
    <div class="">
        <select name="cardExpirationMonth" id="cardExpirationMonth" class="form-control">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
 
        </select>
    </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="cardholderName" class="control-label">Titular</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" class="form-control" autocomplete="off" id="cardholderName" maxlength="" value="<?php if(isset($values['Correo']) and $values['Correo']!='') echo $values['Correo'];?>">
    </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="docType" class="control-label">Tipo de documento</label> <label class="text-danger"> * </label>
    <div class="">
        <select id="docType" class="form-control"></select>
    </div>
  </div>
  <div class="form-group col-sm-12">
    <label for="Apellidos" class="control-label">Numero de documento</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" class="form-control" autocomplete="off" id="docNumber" maxlength="" value="<?php if(isset($values['Correo']) and $values['Correo']!='') echo $values['Correo'];?>">
    </div>
  </div>
</form>


<?php include('../../view_footer_solicitud.php')?>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script type="application/javascript"  src="../../web/js/mercadopago.js"></script>