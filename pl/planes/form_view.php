<?php include('../../view_header_app.php')?>
<h1>Proceso de contratación Plan TU/GRUERO®</h1>
<form class="form-horizontal">
  <div class="form-group">
    <label for="idPlan" class="col-sm-2 control-label">Plan</label>
    <div class="col-sm-8">
        <select class="form-control" id="idPlan">
            <option>TU GRUERO GOLD</option>
            <option>TU GRUERO PLUS</option>
        </select>
    </div>
  </div>    
  <div class="form-group">
    <label for="Nombres" class="col-sm-2 control-label">Nombres</label>
    <div class="col-sm-8">
        <input type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group">
    <label for="Apellidos" class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-8">
        <input type="text" name="Apellidos" class="form-control" id="Apellidos" placeholder="Ejemplo: Alvarez Pérez">
    </div>
  </div>
  <div class="form-group">
    <label for="Apellidos" class="col-sm-2 control-label">Cédula</label>
    <div class="col-sm-8">
        <input type="text" name="Apellidos" class="form-control" id="Apellidos" placeholder="Ejemplo: Alvarez Pérez">
    </div>
  </div>
  <div class="form-group">
    <label for="Apellidos" class="col-sm-2 control-label">RIF</label>
    <div class="col-sm-8">
        <input type="text" name="Apellidos" class="form-control" id="Apellidos" placeholder="Ejemplo: Alvarez Pérez">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Correo electrónico</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Ejemplo: correo@gmail.com">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Confirme su correo electrónico</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Ejemplo: correo@gmail.com">
    </div>
  </div>
  <div class="form-group">
    <label for="Nombres" class="col-sm-2 control-label">Teléfono de habitación</label>
    <div class="col-sm-8">
        <input type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group">
    <label for="Nombres" class="col-sm-2 control-label">Celular</label>
    <div class="col-sm-8">
        <input type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Ejemplo: Juan José">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">¿Opción de RCV?</label>
    <div class="col-sm-8">
    <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="" value="Si"> Si
    </label>
    <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="" value="No"> No
    </label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

<?php include('../../view_footer_solicitud.php')?>
