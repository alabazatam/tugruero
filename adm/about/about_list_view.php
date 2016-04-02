<?php include('../../view_header.php')?>
<?php include('../menu.php')?>

        <div class="container">
			<h1 class="text-center"><label class="label label-default">Contenido de secciones</label></h1>
             <?php foreach($contents_html as $contents):?>
            <div class="row">
                <div class="col-lg-12">
					
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<label class="label label-default">Titulo: <?php echo $contents['title'];?></label>
						</div>
						<div class="panel-body">
						  <?php echo htmlentities($contents['html']);?>
						</div>
						<div class="panel-footer">
							  <a class="btn btn-default"  href="<?php echo full_url."/adm/about/index.php?action=edit&id_content=".$contents['id_content']?>"><i class="fa fa-edit  fa-pull-left fa-border"></i></a>
							  <?php if(isset($contents['status']) and $contents['status'] == 1):?>
								  <label class="label label-success">Activo</label>
							  <?php endif;?>
							  <?php if(isset($contents['status']) and $contents['status'] == 0):?>
								  <label class="label label-danger">Desactivado</label>
							  <?php endif;?>
						</div>
					</div>
					

				</div>
            </div>
			<?php endforeach;?>
		</div>
<?php include('../../view_footer.php')?>