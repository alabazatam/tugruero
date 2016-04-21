<?php include("../view_header.php");?>
        	<div class="col-md-4 col-lg-4">
        	</div>
        	
            <div class="col-md-4 col-lg-4">
				 <div class="panel panel-default ">
				  <div class="panel-body">
                                      <div align='center' class="visible-lg visible-md">
                                         <img src="<?php echo full_url;?>/web/img/g190.png" class="img-responsive" width="200"> 
                                      </div>
                                      <div align='center' class="visible-sm visible-xs">
                                         <img src="<?php echo full_url;?>/web/img/g190.png" class="img-responsive" width="100"> 
                                      </div>					
                                        <form name="" id="" novalidate action="<?php echo full_url;?>/ap/index.php" method="POST">
			                
                                         <input type="hidden" name="action" value="acceso"/>
			                    <div class="control-group form-group">
			                        <div class="controls">
			                            <label>Usuario:</label>
			                            <input  autocomplete="off" name='login' type="text" class="form-control" id="login" required data-validation-required-message="Please enter your login.">
			                            <p class="help-block"></p>
			                        </div>
			                    </div>
			                    <div class="control-group form-group">
			                        <div class="controls">
			                            <label>Clave:</label>
			                            <input autocomplete="off" name='password' type="password" class="form-control" id="password" required data-validation-required-message="Please enter your password.">
			                        </div>
			                    </div>

							<div class="row">
                                                            <div align="center">
                                                                <button type="submit" class="btn-lg btn-info">Conectar</button>

                                                                <a href="<?php echo full_url;?>/ap/registrarse.php"><button type="button" class="btn-lg btn-sucess"><i class="fa"></i> Registrarse</button></a>

                                                            </div>
							</div>
							<div class="row">
                                                            <div align="center">
                                                                <a href="<?php echo full_url;?>/ap/registrarse.php?action=ForgottenYourPassword"><small>¿Olvidó su clave?</small></a>
                                                            </div>
                                                            
							</div>
			                    <!-- For success/fail messages -->
			                    
			                    <?php if(isset($values['message']) and $values['message']!=''):?>
			                    	
			                    	<div id="" class="alert alert-success"><?php echo $values['message'];?></div>
			                    <?php endif;?>
								<?php if(isset($values['errors']) and $values['errors']!=''):?>
			                    	
			                    	<div id="" class="alert alert-danger"><?php echo $values['errors'];?></div>
			                    <?php endif;?>
			                </form>
				  </div>
				</div>              
            </div>

<?php include("../view_footer.php");?>		