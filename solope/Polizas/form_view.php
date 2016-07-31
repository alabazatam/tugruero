<?php include('../../view_header_app.php')?>
<?php //include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Pólizas</h1>
	<form class="" enctype="multipart/form-data" action="index.php" method="POST">
		<input autocomplete="off" type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
	<div class="row">
		<div class="col-md-12"> 
			<div class="form-group">
				<label for="">IdPoliza</label>
				<input autocomplete="off" readonly="readonly" type="hidden" class="form-control input-sm" id="" placeholder="" name="idPoliza" value="<?php if(isset($values['idPoliza'])) echo $values['idPoliza']?>">
			<?php if(isset($values['idPoliza'])) echo $values['idPoliza']?>
			</div>
		</div>
	</div>
	<?php //if($values['action'] == "add"):?>
	<div class="row">
		<div class="col-md-12"> 
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                                <div class="alert alert-info">Datos del asegurado</div>
                                 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Cédula</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Cedula" maxlength="50" required oninput=""  value="<?php if(isset($values['Cedula'])) echo $values['Cedula']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Nombre</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Nombre" maxlength="50" required oninput=""  value="<?php if(isset($values['Nombre'])) echo $values['Nombre']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Apellido</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Apellido" maxlength="50" required oninput=""  value="<?php if(isset($values['Apellido'])) echo $values['Apellido']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        <br>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                                <div class="alert alert-info">Datos del asegurado</div>
                                 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Seguro</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Seguro" maxlength="50" required oninput=""  value="<?php if(isset($values['Seguro'])) echo $values['Seguro']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Número de Póliza</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="NumPoliza" maxlength="50" required oninput=""  value="<?php if(isset($values['NumPoliza'])) echo $values['NumPoliza']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Vencimiento</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Vencimiento" maxlength="50" required oninput=""  value="<?php if(isset($values['Vencimiento'])) echo $values['Vencimiento']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                     </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="">Dirección Estado</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="DireccionEDO" maxlength="50" required oninput=""  value="<?php if(isset($values['DireccionEDO'])) echo $values['DireccionEDO']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                                <div class="alert alert-info">Datos del vehículo</div>
                                 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Marca</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Marca" maxlength="50" required oninput=""  value="<?php if(isset($values['Marca'])) echo $values['Marca']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Modelo</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Modelo" maxlength="50" required oninput=""  value="<?php if(isset($values['Modelo'])) echo $values['Modelo']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Año</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Año" maxlength="50" required oninput=""  value="<?php if(isset($values['Año'])) echo $values['Año']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label for="">Color</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Color" maxlength="50" required oninput=""  value="<?php if(isset($values['Color'])) echo $values['Color']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>
                        <div class="col-sm-4">
                            <label for="">Tipo</label>
                            <div class="input-group">
                                    <input autocomplete="off" type="text" id="" class="form-control input-sm" name="Tipo" maxlength="50" required oninput=""  value="<?php if(isset($values['Tipo'])) echo $values['Tipo']?>">
                                    <span class="input-group-addon" id="basic-addon2">(*)</span>
                            </div> 
                        </div>

                    </div>
                    <div class="form-group">
                          <div class="col-sm-6">
                                  <label class="text-danger">Campos requeridos (*)</label>

                          </div>
                    </div>
		</div>
		
	</div>
		<a class="btn btn-default"  href="<?php echo full_url."/solope/Polizas/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
		
		<script>
			$(document).ready(function(){
			$('.modal-body').html('<div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>');
			$('#myModal').modal('show');	
			});

		
		</script>
        
    <?php endif;?>
	</form>
</div>
<?php include('../../view_footer.php')?>