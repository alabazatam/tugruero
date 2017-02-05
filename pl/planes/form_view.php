<?php include('../../view_header_app.php')?>
<h1>Proceso de contratación Plan TU/GRUERO®</h1>
<form class="">
  <div class="form-group col-xs-12">
    <label for="idPlan" class="">Plan</label>
    <div class="">
        <select class="form-control" id="idPlan">
            <option>TU GRUERO GOLD</option>
            <option>TU GRUERO PLUS</option>
        </select>
    </div>
  </div>    
  <div class="form-group col-xs-6">
    <label for="Nombres" class="control-label">Nombres</label>
    <div class="">
        <input type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="Apellidos" class="2 control-label">Apellidos</label>
    <div class="">
        <input type="text" name="Apellidos" class="form-control" id="Apellidos" placeholder="Ejemplo: Alvarez Pérez">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="Apellidos" class="control-label">Cédula</label>
    <div class="">
        <input type="text" name="Apellidos" class="form-control" id="Apellidos" placeholder="Ejemplo: Alvarez Pérez">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="Apellidos" class=" control-label">RIF</label>
    <div class="">
        <input type="text" name="Apellidos" class="form-control" id="Apellidos" placeholder="Ejemplo: Alvarez Pérez">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="inputEmail3" class="control-label">Correo electrónico</label>
    <div class="">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Ejemplo: correo@gmail.com">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="inputEmail3" class="control-label">Confirme su correo electrónico</label>
    <div class="">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Ejemplo: correo@gmail.com">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="Nombres" class="control-label">Teléfono de habitación</label>
    <div class="">
        <input type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div> 
  <div class="form-group col-xs-6">
    <label for="Nombres" class="control-label">Celular</label>
    <div class="">
        <input type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group col-xs-12">
    <label for="inputEmail3" class="control-label">¿Opción de RCV?</label>
    <div class="">
    <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="" value="Si"> Si
    </label>
    <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="" value="No"> No
    </label>
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="inputEmail3" class="control-label">Licencia</label>
    <div class="">
        <input type="file" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="inputEmail3" class="control-label">Carnet de circulación</label>
    <div class="">
        <input type="file" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="inputEmail3" class="control-label">Certificado médico</label>
    <div class="">
        <input type="file" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <label for="certificadoOrigen" class="control-label">Certificado de origen del vehículo (Título de propiedad)</label>
    <div class="">
        <input type="file" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group col-xs-6">
    <div class="col-sm-offset-10 col-sm-2">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

<?php include('../../view_footer_solicitud.php')?>
