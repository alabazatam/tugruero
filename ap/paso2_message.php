<?php include('../view_header_app.php');?>

<br><br><br><br>
<div class="col-sm-8 col-xs-8 col-md-8 col-lg-8 col-sm-offset-2 col-xs-offset-2 col-md-offset-2 col-lg-offset-2">
	
	
				                <?php if(isset($values['message']) and $values['message']!=''):?>
			                    	
			                    	<div id="" class="alert alert-success"><?php echo $values['message'];?></div>
			                    <?php endif;?>
	
</div>
<div class="col-sm-8 col-xs-8 col-md-8 col-lg-8 col-sm-offset-2 col-xs-offset-2 col-md-offset-2 col-lg-offset-2">
	
	
				               
			                    	
	<div id="" class="text-center" align="center">
		<a class="btn btn-success" href="<?php echo full_url?>/ap/index.php"><i class="fa fa-check"></i> Aceptar</a>
	</div>

	
</div>