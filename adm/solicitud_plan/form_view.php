<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<?php $Marcas = new Marcas(); $marcas_list = $Marcas->getMarcasListSelect();?>
<h1>Título</h1>

<form class="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="<?php echo $values['action']?>">
    <input type="text" id="precio" name="precio" value="<?php if(isset($values['precio']))echo $values['precio']?>">

    <div class="form-group col-sm-12 text-right PlanPrecio">
      <p><b>Total a pagar:</b> <?php if(isset($values['precio']) and $values['precio']!='') echo number_format($values['precio'],2,",","."); else echo "0,00 Bs."?></p>
  </div>
  <div class="form-group col-sm-12">
	  <label for="idPlan" class="">Plan </label> <label class="text-danger"> * </label>
    <div class="">
        <select class="form-control" id="idPlan" name="idPlan">
            <option value="">Seleccione el plan</option>
            <option value="2" <?php if(isset($values['idPlan']) and $values['idPlan']==2) echo "selected='selected'";?>>TU GRUERO GOLD</option>
            <option value="1" <?php if(isset($values['idPlan']) and $values['idPlan']==1) echo "selected='selected'";?>>TU GRUERO PLUS</option>
        </select>
    </div>
        <?php if(isset($errors['idPlan']) and $errors['idPlan']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['idPlan'];?></div>

        <?php endif;?> 
  </div>    

  <div class="form-group col-sm-3">
    <label for="Cedula" class="control-label">Cédula</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Cedula" class="form-control" autocomplete="off" id="Cedula" maxlength="10" value="<?php if(isset($values['Cedula']) and $values['Cedula']!='') echo $values['Cedula'];?>" placeholder="Ejemplo: V-12345678">
    </div>
        <?php if(isset($errors['Cedula']) and $errors['Cedula']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Cedula'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-3">
    <label for="Rif" class=" control-label">RIF</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Rif" class="form-control" maxlength="11" autocomplete="off" value="<?php if(isset($values['Rif']) and $values['Rif']!='') echo $values['Rif'];?>" id="Rif" placeholder="Ejemplo: V-123456781">
    </div>
        <?php if(isset($errors['Rif']) and $errors['Rif']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Rif'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-3">
    <label for="Nombres" class="control-label">Nombres</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Nombres" class="form-control" autocomplete="off" maxlength="50" id="Nombres" value="<?php if(isset($values['Nombres']) and $values['Nombres']!='') echo $values['Nombres'];?>" placeholder="Ejemplo: Juan José">
    </div>
        <?php if(isset($errors['Nombres']) and$errors['Nombres']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Nombres'];?></div>
        <?php endif;?>
  </div>
  <div class="form-group col-sm-3">
    <label for="Apellidos" class="2 control-label">Apellidos</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Apellidos" class="form-control" autocomplete="off" maxlength="50" id="Apellidos" value="<?php if(isset($values['Apellidos']) and $values['Apellidos']!='') echo $values['Apellidos'];?>"  placeholder="Ejemplo: Alvarez Pérez">
    </div>
        <?php if(isset($errors['Apellidos']) and$errors['Apellidos']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Apellidos'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-6">
    <label for="Correo" class="control-label">Correo electrónico</label> <label class="text-danger"> * </label>
    <div class="">
      <input type="email" class="form-control" name="Correo" autocomplete="off" id="Correo" maxlength="100" value="<?php if(isset($values['Correo']) and $values['Correo']!='') echo $values['Correo'];?>" placeholder="Ejemplo: correo@gmail.com">
    </div>
        <?php if(isset($errors['Correo']) and $errors['Correo']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Correo'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-3">
    <label for="Telefono" class="control-label">Teléfono de habitación</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Telefono" class="form-control" autocomplete="off" id="Telefono" maxlength="10" value="<?php if(isset($values['Telefono']) and $values['Telefono']!='') echo $values['Telefono'];?>" placeholder="Ejemplo: 2121234567">
    </div>
        <?php if(isset($errors['Telefono']) and $errors['Telefono']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Telefono'];?></div>

        <?php endif;?>
  </div> 
  <div class="form-group col-sm-3">
    <label for="Celular" class="control-label">Celular</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Celular" class="form-control" autocomplete="off" id="Celular" maxlength="10" value="<?php if(isset($values['Celular']) and $values['Celular']!='') echo $values['Celular'];?>" placeholder="Ejemplo: 4141234567">
    </div>
        <?php if(isset($errors['Celular']) and $errors['Celular']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Celular'];?></div>

        <?php endif;?>
  </div>
    <div class="row"> 
        <div class="form-group col-sm-12">
          <label for="RCV" class="control-label">¿Opción de RCV?</label> <label class="text-danger"> * </label>
          <div class="">
          <label class="radio-inline">
            <input type="radio" name="RCV" class="RCV" value="SI" <?php if(isset($values['RCV']) and $values['RCV']=='SI') echo "checked='checked'";?>> Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="RCV" class="RCV" value="NO" <?php if(isset($values['RCV']) and $values['RCV']=='NO') echo "checked='checked'";?>> No
          </label>
          </div>
              <?php if(isset($errors['RCV']) and $errors['RCV']!=''):?>
              <div id="" class="alert alert-danger"><?php echo $errors['RCV'];?></div>

              <?php endif;?>
        </div>
   </div>
  <div class="form-group col-sm-12 RCV_SI LicenciaDiv">
    <label for="Licencia" class="control-label">Licencia</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="Licencia" class="form-control "  id="Licencia" accept="application/pdf,image/x-png,image/gif,image/jpeg">
    </div>
        <?php if(isset($errors['Licencia']) and $errors['Licencia']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Licencia'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-12 CarnetCirculacionDiv">
    <label for="CarnetCirculacion" class="control-label">Carnet de circulación</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="CarnetCirculacion" class="form-control " id="CarnetCirculacion" accept="application/pdf,image/x-png,image/gif,image/jpeg">
    </div>
        <?php if(isset($errors['CarnetCirculacion']) and $errors['CarnetCirculacion']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['CarnetCirculacion'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-12 CertificadoMedicoDiv">
    <label for="inputEmail3" class="control-label">Certificado médico</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="CertificadoMedico" class="form-control " id="CertificadoMedico" accept="application/pdf,image/x-png,image/gif,image/jpeg">
    </div>
        <?php if(isset($errors['CertificadoMedico']) and $errors['CertificadoMedico']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['CertificadoMedico'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-12 CertificadoOrigenDiv">
    <label for="certificadoOrigen" class="control-label">Certificado de origen del vehículo (Título de propiedad)</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="CertificadoOrigen" class="form-control" id="CertificadoOrigen" accept="application/pdf,image/x-png,image/gif,image/jpeg">
    </div>
    <?php if(isset($errors['CertificadoOrigen']) and $errors['CertificadoOrigen']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['CertificadoOrigen'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-2">
    <label for="Marca" class="control-label">Marca</label> <label class="text-danger"> * </label>
    <div class="">
        <select name="Marca" id="Marca" class="form-control">
                    <option value="">Seleccione...</option>
            <?php if(count($marcas_list)>0):?>
                <?php foreach($marcas_list as $marcas):?>
                    <option value="<?php echo $marcas['Marca']?>" <?php if(isset($values['Marca']) and $marcas['Marca'] == $values['Marca']) echo "selected='selected'";?>><?php echo $marcas['Marca']?></option>    
                <?php endforeach;?>
            <?php endif;?>
        </select>
    </div>
        <?php if(isset($errors['Marca']) and $errors['Marca']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Marca'];?></div>

        <?php endif;?>
  </div> 
  <div class="form-group col-sm-2">
    <label for="Telefono" class="control-label">Modelo</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Modelo" class="form-control" autocomplete="off" id="Modelo" maxlength="20" value="<?php if(isset($values['Modelo']) and $values['Modelo']!='') echo $values['Modelo'];?>" placeholder="Ejemplo: AVEO">
    </div>
        <?php if(isset($errors['Modelo']) and $errors['Modelo']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Modelo'];?></div>

        <?php endif;?>
  </div> 
  <div class="form-group col-sm-2">
    <label for="Telefono" class="control-label">Año</label> <label class="text-danger"> * </label>
    <div class="">
        <select name="Anio" id="Anio" class="form-control">
                    <option value="">Seleccione...</option>

                <?php for($anio = (date('Y')-17); $anio<=date('Y'); $anio++):?>
                    <option value="<?php echo $anio?>" <?php if(isset($values['Anio']) and $anio == $values['Anio']) echo "selected='selected'";?>><?php echo $anio?></option>    
                <?php endfor;?>
 
        </select>
    </div>
        <?php if(isset($errors['Anio']) and $errors['Anio']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Anio'];?></div>

        <?php endif;?>
  </div> 
  <div class="form-group col-sm-2">
    <label for="Telefono" class="control-label">Color</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Color" class="form-control" id="Color" autocomplete="off" maxlength="20" value="<?php if(isset($values['Color']) and $values['Color']!='') echo $values['Color'];?>" placeholder="Ejemplo: Azul">
    </div>
        <?php if(isset($errors['Color']) and $errors['Color']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Color'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-2">
    <label for="Telefono" class="control-label">Placa</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Placa" class="form-control" id="Placa" autocomplete="off" maxlength="7" value="<?php if(isset($values['Placa']) and $values['Placa']!='') echo $values['Placa'];?>" placeholder="Ejemplo: AAABBB">
    </div>
        <?php if(isset($errors['Placa']) and $errors['Placa']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Placa'];?></div>

        <?php endif;?>
  </div> 
  <div class="form-group col-sm-2 Puestos">
    <label for="Telefono" class="control-label">Cantidad de puestos</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="number" name="Puestos" class="form-control" id="Puestos" autocomplete="off" maxlength="1" value="<?php if(isset($values['Puestos']) and $values['Puestos']!='') echo $values['Puestos']; else echo "5";?>" min="5" max="7">
    </div>
        <?php if(isset($errors['Puestos']) and $errors['Puestos']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Puestos'];?></div>

        <?php endif;?>
  </div>    
  <div class="form-group col-sm-12">
    <label for="inputEmail3" class="control-label">Método de pago</label> <label class="text-danger"> * </label>
    <div class="">
    <label class="radio-inline">
      <input type="radio" name="MET" class="MET" value="TDC" <?php if(isset($values['TipoPago']) and $values['TipoPago']=='TDC') echo "checked='checked'";?>>Tarjeta de crédito
    </label>
    <label class="radio-inline">
      <input type="radio" name="MET" class="MET" value="DEP" <?php if(isset($values['TipoPago']) and $values['TipoPago']=='DEP') echo "checked='checked'";?>> Depósito o transferencia
    </label>
    </div>
        <?php if(isset($errors['MET']) and $errors['MET']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['MET'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-12 DEPOSITO">
    <label for="DEP1" class="control-label">Comprobante #1 </label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="DEP1" class="form-control" id="DEP1" accept="application/pdf,image/x-png,image/gif,image/jpeg">
    </div>
        <?php if(isset($errors['DEP1']) and $errors['DEP1']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['DEP1'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-12 DEPOSITO">
    <label for="DEP2" class="control-label">Comprobante #2</label>
    <div class="">
        <input type="file" name="DEP2" class="form-control " id="DEP2" accept="application/pdf,image/x-png,image/gif,image/jpeg">
    </div>
        <?php if(isset($errors['DEP2']) and $errors['DEP2']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['DEP2'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-12 DEPOSITO">
    <label for="DEP3" class="control-label">Comprobante #3</label>
    <div class="">
        <input type="file" name="DEP3" class="form-control " id="DEP3" accept="application/pdf,image/x-png,image/gif,image/jpeg">
    </div>
        <?php if(isset($errors['DEP3']) and $errors['DEP3']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['DEP3'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-sm-12 text-right PlanPrecio">
      <p><b>Total a pagar:</b> <?php if(isset($values['precio']) and $values['precio']!='') echo number_format($values['precio'],2,",","."); else echo "0,00 Bs."?></p>
  </div>
  <div class="form-group col-sm-12">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

<?php include('../../view_footer_solicitud.php')?>
<script>

$(document).ready(function(){
<?php if(isset($values['RCV']) and $values['RCV']=='SI'):?>
            console.log('eligio si');
            $('.Puestos').show();
            $('.LicenciaDiv').show();
            $('.CarnetCirculacionDiv').show();
            $('.CertificadoMedicoDiv').show();
            $('.CertificadoOrigenDiv').show();
<?php endif;?>
<?php if(isset($values['RCV']) and $values['RCV']=='NO'):?>
            console.log('eligio no');
            $('.Puestos').hide();
            $('.LicenciaDiv').show();
            $('.CarnetCirculacionDiv').show();
            $('.CertificadoMedicoDiv').hide();
            $('.CertificadoOrigenDiv').hide();
<?php endif;?>
<?php if((!isset($values['RCV'])) or @$values['RCV']==''):?>
            console.log('No eligio nada');
            $('.Puestos').hide();
            $('.LicenciaDiv').hide();
            $('.CarnetCirculacionDiv').hide();
            $('.CertificadoMedicoDiv').hide();
            $('.CertificadoOrigenDiv').hide();
<?php endif;?>

<?php if(isset($values['MET']) and $values['MET']=='DEP'):?>
         $('.DEPOSITO').show();
<?php endif;?>
<?php if(isset($values['MET']) and $values['MET']=='TDC'):?>
         $('.DEPOSITO').hide();
<?php endif;?>
<?php if((!isset($values['MET']))):?>
        $('.DEPOSITO').hide();
<?php endif;?>   

    $('#idPlan').change(function(e){
    calculaPrecio();       
    });

    $('.RCV').change(function(e){
        calculaPrecio();
        if($('.RCV:checked').val() == 'SI'){
            console.log('seleccione si');
            $('.Puestos').show();
            $('.LicenciaDiv').show();
            $('.CarnetCirculacionDiv').show();
            $('.CertificadoMedicoDiv').show();
            $('.CertificadoOrigenDiv').show();
        }else{
            console.log('seleccione no');
            $('.Puestos').hide();
            $('.LicenciaDiv').show();
            $('.CarnetCirculacionDiv').show();
            $('.CertificadoMedicoDiv').hide();
            $('.CertificadoOrigenDiv').hide();
        }
        

        
    });
    $('#Puestos').change(function(e){
    calculaPrecio();       
    });
    $('.MET').change(function(e){
        if($('.MET:checked').val() == 'DEP'){
            $('.DEPOSITO').show();
        }else{
           
            $('.DEPOSITO').hide();            
        }
        

        
    });    
    
});

    function calculaPrecio(){
        $.ajax({
        url: '<?php echo full_url?>/pl/planes/index.php',
	data: { action: "precio_plan",id_plan: $('#idPlan').val(), RCV: $('.RCV:checked').val(), Puestos: $('#Puestos').val()},
	success: function(data){
            $('.PlanPrecio').html("<p><b>Total a pagar:</b> " + data.precio + " Bs.</p>")
            $('#precio').val(data.precio_sin_formato);
	},
          dataType: 'JSON'
        });        
        
    }

</script>