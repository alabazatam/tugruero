<?php include("../view_header_app.php");?>
<?php include("menu.php");?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="page-header">
        <h1>Bienvenido(a) <strong>Usuario </strong><small> a <?php echo title;?> <?php echo version;?></small></h1>
    </div>
</div>
<div class="col-sm-8 col-sm-offset-2">
	<div class="alert alert-info"><h6>Da click en una de las opciones en la parte inferior y comienza a registrar toda tu información, también puedes utilizar el menú ubicado en la parte superior derecha de tu monitor</h6></div>
							<table class="table table-responsive table-condensed table-bordered table-hover bg-warning">
								<tr>
                            <?php foreach($items_padres as $item):?>
													
															                                   
                                      <?php $items_hijos = $Menu -> getMenu(4,1,$item['id_menu']);?>
                                      <?php foreach($items_hijos as $item2):?>						
											<td align="center">
												<a href="<?php echo full_url.$item2['url']?>?action=new" target="">
													<img class="img-responsive" src="<?php echo full_url;?>/web/img/ic_acceso.png" width="150">
													<br><i class="fa fa-plus-circle fa-2x btn btn-default"> <label class="">Agregar <?php echo $item2['name']?></label></i> 
												</a>
											</td>
                                      <?php endforeach;?>
														
														
														
													                                    
                               
                            <?php endforeach;?>
								</tr>
							</table>
</div>


<?php include("../view_footer.php");?>