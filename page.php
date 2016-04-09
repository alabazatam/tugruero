<!doctype html>
<html ng-app="cssawds">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="web/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="web/img/favicon.ico" type="image/x-icon"/>
    <!-- Custom CSS -->
    <link href="web/css/freelancer.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="web/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300|Roboto:400,300,500,700">
    <!-- <link rel="stylesheet" href="http://cssa.cssawards123.netdna-cdn.com/wp-content/themes/cssawds/assets/css/cssawds.min.css"> -->
    <link rel="stylesheet" href="web/ccsa/css/cssa.css">
     <link href="web/css/caroussel.css" rel="stylesheet">   
     <title>Tugruero.com</title>
</head>

<body id="page-top" class="index" ng-controller="BaseController" ng-class="{ min:boolClass, 'toggled':menu }">

     <nav class="navbar navbar-inverse navbar-fixed-top visible-sm visible-xs">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand text" href="#page-top"><img class="img-responsive" src="web/img/g362.png" alt="" width="150"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                        <?php foreach($items as $item):?>
                            <li class="page-scroll">
                                <a href="<?php echo $item['url'];?>"><?php echo $item['name'];?></a>
                            </li>
                        <?php endforeach;?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>    
    <!-- Navigation -->
    <header id="scroll" class="">       
    <div class="visible-lg visible-md background_nav" align="center"><a href="#page-top"><img src="web/img/g362.png" class="img-responsive" width="200" alt="tugruero.com"></a></div>
	<div class="menu" ng-class="{ 'toggled' : menu }">
		<a ng-click="toggle()" class="bars"><i class="fa fa-bars"></i></a>
		<nav ng-class="{ 'toggled' : menu }" ng-mouseleave="menu=''">
			<ul class="list-unstyled">
                        <?php foreach($items as $item):?>
                            <li class="page-scroll">
                                <a href="<?php echo $item['url'];?>"><?php echo $item['name'];?></a>
                            </li>
                        <?php endforeach;?>
			</ul>
		</nav>
        </div>
	</header>
    <!-- Header -->  
	<section id="" class="" >
        <div class="container">
			<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<img src="<?php echo full_url?>/web/img/cel/cel1.png" class="img-responsive">
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<p><h3 class="text-center">“¡La  soluciones perfecta para el auxilio vial!”</h3></p>
							<p><h3 class="text-center">“Más de 2000 grueros al alcance de tu mano con un solo click”</h3></p>
							<p align="center"><a class="btn text-center" style="background-color: #404040;color:#fff;"><i class="fa fa-users fa-3x fa-lg"></i> Acceso grueros</a></p>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<img src="<?php echo full_url?>/web/img/cel/cel1.png" class="img-responsive">
						</div>

			</div>	
		</div>
	</section>
    <section class="success2" id="" style="background-color: #000000;">
        <div class="container">			
					<div class="row">
						<div class="thumbnail">
							<img src="<?php echo full_url;?>/web/img/icon4.png">
						  <div class="caption">
							  <h2 class="text-center">GPS</h2>
							<p class="text-center text-muted">Ubicamos a los grueros más cercanos a tu ubicación</p>
						  </div>

					  </div>
					 
						<div class="thumbnail">
						  <img src="<?php echo full_url;?>/web/img/icon6.png" width="100" height="105">
						  <div class="caption">
							  <h2 class="text-center">Calidad</h2>
							<p class="text-center text-muted">Nuestros grueros son los más calificados del mercado</p>
						  </div>
						</div>

					 
						<div class="thumbnail">
						  <img src="<?php echo full_url;?>/web/img/icon1.png" width="100" height="105">
						  <div class="caption">
							  <h2 class="text-center">Rápidez</h2>
							<p class="text-center text-muted">Grúas en menos de 30 minutos</p>
						  </div>
						</div>

					</div>
					<div class="row">
					  
						<div class="thumbnail">
						  <img src="<?php echo full_url;?>/web/img/icon5.png">
						  <div class="caption">
							  <h2 class="text-center">Sencillez</h2>
							<p class="text-center text-muted">Un botón y ¡Listo! La grúa viene en camino</p>
						  </div>
						</div>
					  
					  
						<div class="thumbnail">
						  <img src="<?php echo full_url;?>/web/img/icon2.png">
						  <div class="caption">
							  <h2 class="text-center">Grueros</h2>
							<p class="text-center text-muted">Contamos con más de 2000 grueros en todo el territorio nacional</p>
						  </div>
						</div>
					  
					</div>
        </div>
    </section>
	<section style="background-color: #cccccc;">		
			<div class="row">
				<div class="col-md-3 col-lg-3">
						<div class="thumbnail">
						<a class="" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
						  <img src="<?php echo full_url;?>/web/img/icon5.png">
						</a>
							<div class="caption">
							
							   <h3 class="text-center">¿Qué hacemos?</h3>
							</div>
							<div class="collapse" id="collapseExample1">
								<div class="well">

									<p class="text-justify">
										Ofrecemos el mejor servicio de auxilio vial por medio de nuestra excelente plataforma de comunicación, garantizando la tranquilidad a los accidentados en la vía, y esforzándonos siempre en actuar con amabilidad, transparencia e integridad.
									</p>
								</div>
							</div>
						</div>
				</div>
				<div class="col-md-3 col-lg-3">
						<div class="thumbnail">
						<a class="" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
							<img src="<?php echo full_url;?>/web/img/g190.png" width="150">
						</a>
							<div class="caption">
							
							   <h3 class="text-center">Sobre nosotros</h3>
							</a>
							</div>
							<div class="collapse" id="collapseExample2">
								<div class="well">
									<p class="text-justify">
										Nuestra plataforma de comunicación se llama TU/GRUERO®, es la primera aplicación de teléfonos inteligentes hecha para el auxilio vial. La aplicación conecta a los accidentados con las grúas más cercanas vía geolocalización, permitiéndoles obtener un servicio rápido, eficiente y seguro, simplemente con tocar un botón. 
									</p>
								</div>

							</div>
						</div>
				</div>
				<div class="col-md-3 col-lg-3">
						<div class="thumbnail">
						<a class="" role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
							<img src="<?php echo full_url;?>/web/img/icon5.png">
						</a>
							<div class="caption">
							
								<h3 class="text-center">¿A dónde vamos?</h3>
							</a>
							</div>
							<div class="collapse" id="collapseExample3">
								<div class="well">
									<p class="text-justify">
										TU/GRUERO® ser perfila a ser la plataforma tecnológica número uno a nivel mundial en auxilio vial, teniendo la red de grueros más amplia, trabajando con el 100% de las compañías de seguro existentes y la mayor cantidad de personas no aseguradas del mercado.
									</p>
								</div>

							</div>
						</div>
				</div>				
				<div class="col-md-3 col-lg-3">
						<div class="thumbnail">
							<a class="" role="button" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
								<img src="<?php echo full_url;?>/web/img/icon5.png">
							</a>
							<div class="caption">
								 <h3 class="text-center">¿Cómo funcionamos?</h3>
							  </a>
							</div>
							<div class="collapse" id="collapseExample4">
								<div class="well">
									<p class="text-justify">
										Actualmente trabajamos en el mercado asegurador, por lo que TU/GRUERO® funciona como intermediario directo entre al accidentado y los grueros más cercanos dispuestos a auxiliarlo, siempre y cuando el accidentado esté asegurado con una compañía de seguros afiliada a TU/GRUERO®.
									</p>
									<p class="text-justify">
										Muy pronto nuestros servicios podrán ser utilizados por cualquier persona que no tenga su vehículo asegurado. Mantente atento a nuestros anuncios para descargar y disfrutar de la aplicación móvil.
									</p>
								</div>

							</div>
						</div>
				</div>					
			</div>
	</section>
	<section>
	<div class="row">
		<div class="container">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="" height="" frameborder="0" wmode="Opaque" allowfullscreen="" src="https://www.youtube.com/embed/oqDRPoPDehE?wmode=transparent"></iframe>
			</div>
		</div>
	</div>
	</section>
	<section id="testimonials" class="" style="background-color: #dddddd;"> 
        <div class="container">
            <div class="row">		
				<div class="media">
					<div class="media-left">
					  <a href="#">
						  <img class="img-responsive img-circle" width="200" src="<?php echo full_url?>/web/img/Carlos_Germani.PNG" alt="">
					  </a>
					</div>
					<div class="media-body">
						<h2 class="media-heading">Carlos Germani <small class="text-info">Presidente a nivel nacional del Club Grúas Venezuela.  Barquisimeto, Venezuela.</small></h2>
						<p class="text-justify text-muted">"Como presidente del Club Grúas Venezuela doy fe de que TU/GRUERO® es la mejor solución para nosotros los grueros en nuestro trabajo, los pagos son mucho más rápidos y elevados. Además el trabajar con tecnología nos simplifica mucho nuestra labor."</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container">
            <div class="row">		
				<div class="media">
					<div class="media-left">
					  <a href="#">
						  <img class="media-object img-responsive img-circle" width="200" src="<?php echo full_url?>/web/img/Juan_Panto.PNG" alt="">
					  </a>
					</div>
					<div class="media-body ">
						<h2 class="media-heading">Juan Panto <small class="text-info">Presidente a nivel regional del Club Grúas Venezuela en la Gran Caracas.</small></h2>
						<p class="text-justify text-muted">"Con TU/GRUERO® me siento mucho más seguro a la hora de trabajar, sé que los servicios que tomo por la aplicación son servicios de clientes serios, les  recomiendo a todos mis colegas que se afilien a esta plataforma, es muy buena"</p>
					</div>
				</div>
			</div>
		</div>		
	</section>

    <!-- Contact Section -->
    <section id="contact" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contáctanos</h2>
                    <!--<hr class="star-contacts">-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombres y Apellidos</label>
                                <input type="text" class="form-control" placeholder="Nombres y Apellidos" id="name" required data-validation-required-message="Por favor indique sus Nombres y apellidos.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Dirección de correo</label>
                                <input type="email" class="form-control" placeholder="Dirección de correo" id="email" required data-validation-required-message="Por favor indique su Dirección de correo.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Número de Teléfono</label>
                                <input type="tel" class="form-control" placeholder="Número de Teléfono" id="phone" required data-validation-required-message="Por favor indique su Número de teléfono.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor indique su Mensaje."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" id="btnSubmit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Dirección</h3>
                        <p>Av. Principal Los Dos Caminos. Edificio Provincial. Piso 8. Oficina 8 “B”. Municipio Sucre. Caracas. Venezuela. Código Postal: 1071.</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Redes sociales</h3>
                        <ul class="list-inline">
                            <li>
                                <a class="btn-social btn-outline" href="https://wwww.facebook.com/tugruero" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/tugruero" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/tugruero/" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <p><img src="web/img/g190.png" class="img-responsive" width="300"></p>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; tugruero.com 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!--<h2>Project Title</h2>-->
                            <!--<hr class="star-primary">-->
                            <!--<img src="web/img/ASEGURADOS.png" class="img-responsive img-centered" alt="">-->
                            <p> <img src="web/img/diagrama1.png" class="img-responsive img-centered" alt=""></p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!--<h2>Project Title</h2>-->
                             <!--<hr class="star-primary">-->
                            <img src="web/img/GRUERAS.png" class="img-responsive img-centered" alt="">
                            <p>Proceso grueras</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!--<h2>Project Title</h2>-->
                             <!--<hr class="star-primary">-->
                            <img src="web/img/CONDUCTORES.png" class="img-responsive img-centered" alt="">
                            <p>Proceso conductores</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="web/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="web/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="web/js/classie.js"></script>
    <script src="web/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="web/js/jqBootstrapValidation.js"></script>
    <script src="web/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="web/js/freelancer.js"></script>
<script>
    $('#myCarousel').carousel();
</script>
<script src="web/ccsa/js/angular.js"></script>
<script src="web/ccsa/js/vendors.js"></script>
<script src="web/ccsa/js/cssawds.min.js"></script>
</body>
</html>

    
