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
										
										<input type="text" autocomplete="off" class="form-control" name="login" placeholder="Ejemplo: V-12345678"  required />
											
										
			                            <p class="help-block"></p>
			                        </div>
			                    </div>
			                    <div class="control-group form-group">
			                        <div class="controls">
			                            <label>Clave:</label>
			                            <input autocomplete="off" name='password' type="password" class="form-control" id="password" required data-validation-required-message="">
			                        </div>
			                    </div>
								<div class="control-group form-group">
			                        <div class="controls">
										<?php
											  // show captcha HTML using Securimage::getCaptchaHtml()

											  $options = array();
											  $options['input_name']             = 'ct_captcha'; // change name of input element for form post
											  $options['disable_flash_fallback'] = false; // allow flash fallback
											  $options['show_audio_button'] = false;

											  if (!empty($_SESSION['ctform']['captcha_error'])) {
												// error html to show in captcha output
												$options['error_html'] = $_SESSION['ctform']['captcha_error'];
											  }

											  echo "<div id='captcha_container_1' class='text-center'>\n";
											  echo Securimage::getCaptchaHtml($options);
											  echo "\n</div><strong><p class='text-center small'>Respete letras mayúsculas y minúsculas</p></strong>\n";
										 ?>
			 							
							
								                           
			                           
			                        </div>
			                    </div>
							<div class="row">
                                                            <div align="center">
                                                                <button type="submit" class="btn-lg btn-success">Conectar <i class="fa fa-arrow-right"></i></button>

                                                                <!--<a href="<?php echo full_url;?>/ap/registrarse.php"><button type="button" class="btn-lg btn-naranja"> ¡Registrarse! <i class="fa fa-users"></i></button></a>-->

                                                            </div>
							</div>
							<div class="row">
                                                            <div align="center">
																<hr>
                                                                <a class="btn btn-default" href="<?php echo full_url;?>/ap/registrarse.php?action=ForgottenYourPassword"><b style="font-size: 14px !important; color: #000 !important;">¿Olvidó su clave? <i class="fa fa-question-circle"></i></b></a>
                                                            </div>
                                                            
							</div>
			                    <!-- For success/fail messages -->
			                    
			                    <?php if(isset($values['message']) and $values['message']!=''):?>
											<script>
												$(document).ready(function(){
												$('.modal-body').html('<div class="alert alert-success" role="alert"><?php echo $values['message']?></div>');
												$('#myModal').modal('show');	
												});


											</script>

			                    <?php endif;?>
								<?php if(isset($values['errors']) and $values['errors']!=''):?>
			                    	
			                    	<div id="" class="alert alert-danger"><?php echo $values['errors'];?></div>
			                    <?php endif;?>
			                </form>
				  </div>
				</div>              
            </div>

<?php include("../view_footer_clean.php");?>		
