<?php include('../../view_header_app.php')?>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script src="<?php echo full_url;?>/web/js/mercadopago.js"></script>
<input type="text" name="Correo" value="<?php if(isset($values['Correo']) and $values['Correo']!='') echo $values['Correo']?>">
<input type="text" name="precio" value="<?php if(isset($values['precio']) and $values['precio']!='') echo $values['precio']?>">
<input type="text" name="Cedula" value="<?php if(isset($values['Cedula']) and $values['Cedula']!='') echo $values['Cedula']?>">

<div class="col-sm-6">
    <form action="" method="post" id="pay" name="pay" class="">
      <div class="form-group col-sm-12">
        <label for="cardholderName" class="control-label">Titular</label> <label class="text-danger"> * </label>
        <div class="">
            <input type="text" class="form-control" autocomplete="off" id="cardholderName" maxlength="50" data-checkout="cardholderName" maxlength="" value="APRO">
        </div>
      </div>
      <div class="form-group col-sm-4">
        <label for="docType" class="control-label">Tipo de documento</label> <label class="text-danger"> * </label>
        <div class="">
             <select  id="docType" data-checkout="docType"  data-checkout="docType" class="form-control"></select>    
        </div>
      </div>
      <div class="form-group col-sm-8">
        <label for="Apellidos" class="control-label">Número de documento</label> <label class="text-danger"> * </label>
        <div class="">
            <input type="text" class="form-control" autocomplete="off" data-checkout="docNumber" id="docNumber" maxlength="8" value="18020594">
        </div>
      </div>
      <div class="form-group col-sm-12">
        <label for="email" class="control-label">Correo electrónico</label> <label class="text-danger"> * </label>
        <div class="">
            <input type="text" class="form-control" autocomplete="off" id="email" maxlength="" value="<?php if(isset($values['Correo']) and $values['Correo']!='') echo $values['Correo']; else echo "deandrademarcos@hotmail.com";?>" placeholder="Ejemplo: correo@gmail.com">
        </div>
      </div>
      <div class="form-group col-sm-8">
        <label for="cardNumber" class="control-label">Número de tarjeta</label> <label class="text-danger"> * </label>
        <div class="">
            <input type="text" class="form-control" autocomplete="off" data-checkout="cardNumber" id="cardNumber" maxlength="16" value="4966382331109310"  placeholder="Ejemplo: 4966382331109310">
        </div>
      </div>
      <div class="form-group col-sm-4">
        <label for="securityCode" class="control-label">Código de seguridad</label> <label class="text-danger"> * </label>
        <div class="">
            <input type="text" class="form-control" data-checkout="securityCode" autocomplete="off" id="securityCode" maxlength="3" value="123" placeholder="Ejemplo: 123">
        </div>
      </div>
      <div class="form-group col-sm-6">
        <label for="cardExpirationYear" class="control-label">Año de vencimiento</label> <label class="text-danger"> * </label>
        <div class="">
            <select id="cardExpirationYear" data-checkout="cardExpirationYear" class="form-control">
                    <?php for($anio = (date('Y')); $anio<=date('Y')+10; $anio++):?>
                        <option value="<?php echo $anio?>" <?php if(isset($values['Anio']) and ($anio == $values['Anio'] or $anio=='2017')) echo "selected='selected'";?>><?php echo $anio?></option>    
                    <?php endfor;?>

            </select>
        </div>
      </div>
      <div class="form-group col-sm-6">
        <label for="cardExpirationMonth" class="control-label">Mes de vencimiento</label> <label class="text-danger"> * </label>
        <div class="">
            <select id="cardExpirationMonth" data-checkout="cardExpirationMonth" class="form-control">
                                                                    <option value="01">01</option>
                                                                    <option value="02" selected="selected">02</option>
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

    <input type="submit" value="Pay!" />
    </form>        
</div>



<?php include('../../view_footer_solicitud.php')?>
