<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center"><label class="label label-default">Compañias</label></h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
	  <div class="form-group">
		<label for="">Id</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id" value="<?php if(isset($values['id'])) echo $values['id']?>">
	  </div>
	  <div class="form-group">
		<label for="">Rif</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="rif" value="<?php if(isset($values['rif'])) echo $values['rif']?>">
	  </div>
	  <div class="form-group">
		<label for="">Responsable</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="responsible_name" value="<?php if(isset($values['responsible_name'])) echo $values['responsible_name']?>">
	  </div>
	  <div class="form-group">
		<label for="">Cédula</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="responsible_cedula" value="<?php if(isset($values['responsible_cedula'])) echo $values['responsible_cedula']?>">
	  </div>
 	  <div class="form-group">
		<label for="">Banco</label>
                <select name="id_bank">
                    <option value="">Seleccione...</option>
                    <?php if(isset($bank_list) and count($bank_list)>0):?>
                    <?php foreach ($bank_list as $bank):?>
                        <option value="<?php echo $bank['id'];?>" <?php if($bank['id']== $values['id_bank'])echo "selected='selected'" ?>><?php echo $bank['name'];?></option>
                    <?php endforeach;?>
                    <?php endif;?>
                </select>
	  </div>
	  <div class="form-group">
		<label for="">Cuenta Nº</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="num_cuenta" value="<?php if(isset($values['num_cuenta'])) echo $values['num_cuenta']?>">
	  </div>
	  <div class="form-group">
		<label for="">Razón social</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="razon_social" value="<?php if(isset($values['razon_social'])) echo $values['razon_social']?>">
	  </div>
	  <div class="form-group">
		<label for="">Archivos</label>
                    <?php if(isset($company_files_list) and count($company_files_list)>0):?>
                    <?php foreach ($company_files_list as $files):?>
                        <div class="alert alert-success" role="alert">
                            <a target="blank" href="<?php echo full_url?>/web/files/<?php echo $files['name_file'];?>"><i class="fa fa-eye fa-pull-left fa-border"></i> <?php echo $files['name_file'];?></a>
                        </div>
                    <?php endforeach;?>
                    <?php endif;?>
	  </div>
		<div class="form-group">
		  <label class="label label-danger">
			<input type="radio" name="status" id="status" value="0" <?php if(isset($values['status']) and $values['status'] =='0' ) echo "checked=checked"?>>
			Desactivar
		  </label>
		</div>
		<div class="form-group">
		  <label class="label label-success">
			<input type="radio" name="status" id="status" value="1" <?php if(isset($values['status']) and $values['status'] =='1' ) echo "checked=checked"?>>
			Activar
		  </label>
		</div>	
	  <div class="form-group">
		<label autocomplete="off" for="">Fecha creado</label>
		<input autocomplete="off"  type="text" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="date_created" value="<?php if(isset($values['date_created'])) echo $values['date_created']?>">
	  </div>
	  <div class="form-group">
		<label for="">Fecha modificado</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="date_updated" value="<?php if(isset($values['date_updated'])) echo $values['date_updated']?>">
	  </div>

		<a class="btn btn-default"  href="<?php echo full_url."/adm/company/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
        <div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>
    <?php endif;?>
	</form>
</div>
<?php include('../../view_footer.php')?>