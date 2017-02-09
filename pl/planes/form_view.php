<?php include('../../view_header_app.php')?>
<h1>Título</h1>

<form class="" method="POST">
    <input type="text" name="action" value="<?php echo $values['action']?>">
  <div class="form-group col-xs-12">
	  <label for="idPlan" class="">Plan </label> <label class="text-danger"> * </label>
    <div class="">
        <select class="form-control" id="idPlan" name="idPlan">
            <option value="2">TU GRUERO GOLD</option>
            <option value="1">TU GRUERO PLUS</option>
        </select>
    </div>
  </div>    
  <div class="form-group col-xs-6">
    <label for="Nombres" class="control-label">Nombres</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Nombres" class="form-control" id="Nombres" value="<?php if(isset($values['Nombres']) and $values['Nombres']!='') echo $values['Nombres'];?>" placeholder="Ejemplo: Juan José">
    </div>
        <?php if(isset($errors['Nombres']) and$errors['Nombres']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Nombres'];?></div>
        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="Apellidos" class="2 control-label">Apellidos</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Apellidos" class="form-control" id="Apellidos" value="<?php if(isset($values['Apellidos']) and $values['Apellidos']!='') echo $values['Apellidos'];?>"  placeholder="Ejemplo: Alvarez Pérez">
    </div>
        <?php if(isset($errors['Apellidos']) and$errors['Apellidos']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Apellidos'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="Apellidos" class="control-label">Cédula</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Cedula" class="form-control" id="Cedula" value="<?php if(isset($values['Cedula']) and $values['Cedula']!='') echo $values['Cedula'];?>" placeholder="Ejemplo: V-12345678">
    </div>
        <?php if(isset($errors['Cedula']) and $errors['Cedula']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Cedula'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="Apellidos" class=" control-label">RIF</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Rif" class="form-control" value="<?php if(isset($values['Rif']) and $values['Rif']!='') echo $values['Rif'];?>" id="Rif" placeholder="Ejemplo: V-123456781">
    </div>
        <?php if(isset($errors['Rif']) and $errors['Rif']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Rif'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="Correo" class="control-label">Correo electrónico</label> <label class="text-danger"> * </label>
    <div class="">
      <input type="email" class="form-control" name="Correo" id="Correo" value="<?php if(isset($values['Correo']) and $values['Correo']!='') echo $values['Correo'];?>" placeholder="Ejemplo: correo@gmail.com">
    </div>
        <?php if(isset($errors['Correo']) and $errors['Correo']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Correo'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="Correo2" class="control-label">Confirme su correo electrónico</label> <label class="text-danger"> * </label>
    <div class="">
      <input type="email" class="form-control" name="Correo2" id="Correo2" value="<?php if(isset($values['Correo2']) and $values['Correo2']!='') echo $values['Correo2'];?>" placeholder="Ejemplo: correo@gmail.com">
    </div>
        <?php if(isset($errors['Correo2']) and $errors['Correo2']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Correo2'];?></div>

        <?php endif;?>    
  </div>
  <div class="form-group col-xs-6">
    <label for="Telefono" class="control-label">Teléfono de habitación</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Telefono" class="form-control" id="Telefono" value="<?php if(isset($values['Telefono']) and $values['Telefono']!='') echo $values['Telefono'];?>" placeholder="Ejemplo: 2121234567">
    </div>
        <?php if(isset($errors['Telefono']) and $errors['Telefono']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Telefono'];?></div>

        <?php endif;?>
  </div> 
  <div class="form-group col-xs-6">
    <label for="Celular" class="control-label">Celular</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="text" name="Celular" class="form-control" id="Celular" value="<?php if(isset($values['Celular']) and $values['Celular']!='') echo $values['Celular'];?>" placeholder="Ejemplo: 4141234567">
    </div>
        <?php if(isset($errors['Celular']) and $errors['Celular']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['Celular'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-12">
    <label for="inputEmail3" class="control-label">¿Opción de RCV?</label> <label class="text-danger"> * </label>
    <div class="">
    <label class="radio-inline">
      <input type="radio" name="RCV" id="" value="SI" <?php if(isset($values['RCV']) and $values['RCV']=='SI') echo "checked='checked'";?>> Si
    </label>
    <label class="radio-inline">
      <input type="radio" name="RCV" id="" value="NO" <?php if(isset($values['RCV']) and $values['RCV']=='NO') echo "checked='checked'";?>> No
    </label>
    </div>
        <?php if(isset($errors['RCV']) and $errors['RCV']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['RCV'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="inputEmail3" class="control-label">Licencia</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="Licencia" class="form-control" id="Nombres"  placeholder="Ejemplo: Juan José">
    </div>
        <?php if(isset($errors['id_plan']) and $errors['id_plan']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['id_plan'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="inputEmail3" class="control-label">Carnet de circulación</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="CarnetCirculacion" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
        <?php if(isset($errors['id_plan']) and $errors['id_plan']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['id_plan'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="inputEmail3" class="control-label">Certificado médico</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="CertificadoMedico" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
        <?php if(isset($errors['id_plan']) and $errors['id_plan']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['id_plan'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <label for="certificadoOrigen" class="control-label">Certificado de origen del vehículo (Título de propiedad)</label> <label class="text-danger"> * </label>
    <div class="">
        <input type="file" name="Certificado" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
    <?php if(isset($errors['id_plan']) and $errors['id_plan']!=''):?>
        <div id="" class="alert alert-danger"><?php echo $errors['id_plan'];?></div>

        <?php endif;?>
  </div>
  <div class="form-group col-xs-6">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

<?php include('../../view_footer_solicitud.php')?>