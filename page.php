<!doctype html>
<html ng-app="cssawds">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="www.tugruero.com.ve">
    <meta name="author" content="">
    <link href="web/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="web/img/favicon.ico" type="image/x-icon"/>
    <link href="web/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300|Roboto:400,300,500,700">
    <!-- <link rel="stylesheet" href="http://cssa.cssawards123.netdna-cdn.com/wp-content/themes/cssawds/assets/css/cssawds.min.css"> -->
    <link rel="stylesheet" href="web/ccsa/css/cssa.css">  
	<link href="web/css/freelancer.css" rel="stylesheet">
     <title>Tugruero.com</title>
</head>
<body id="page-top" class="" ng-controller="BaseController" ng-class="{ min:boolClass, 'toggled':menu }">
     <nav class="navbar navbar-default navbar-fixed-top visible-sm visible-xs">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand text" href="#page-top"><img class="img-responsive" src="web/img/logo_blanco.png" alt="" width="100"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                        <?php foreach($items as $item):?>
                            <li class="">
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
    <div class="visible-lg visible-md background_nav" align="center"><a href="#page-top"><img src="web/img/logo_blanco.png" class="img-responsive" width="200" alt="tugruero.com"></a></div>
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
	
	<section id="header" class="success">
        <div class="container visible-lg visible-md">
			<div class="row" class="visible-lg visible-md">
						<div class="col-md-3 col-lg-3 ">
							<img src="<?php echo full_url?>/web/img/cel/iphone1.png" class="img-responsive">
						</div>
						<div class="col-md-6 col-lg-6">
							<div align="center"><img src="<?php echo full_url?>/web/img/titulo2.png" class="img-responsive text-center"></div>
							<p><h3 class="text-center white-font big-font">“¡La  solución perfecta para el auxilio vial!”</h3></p>
							<p><h3 class="text-center white-font">“Más de 2000 grueros al alcance de tu mano con un solo click”</h3></p>
							<br><br><br><br>
								<p align="center">
                                                                    <a class="btn text-center black-font" href="<?php echo full_url;?>/ap/index.php">
                                                                        <img src="<?php echo full_url?>/web/img/icon2.png">
                                                                        <small><b>Acceso grueros</b></small>
                                                                    </a>
                                                                </p>
						</div>
						<div class="col-md-3 col-lg-3">
							<img src="<?php echo full_url?>/web/img/cel/iphone2.png" class="img-responsive">
						</div>

			</div>
		</div>
		 <div class="container visible-xs visible-sm">
			<div class="row">
						<div class="col-xs-12 col-sm-12">

							<p align="center"><img src="<?php echo full_url?>/web/img/titulo2.png" class="img-responsive" width="200"></p>


						</div>
						<div class="col-xs-12 col-sm-12">
							<p><h3 class="text-center white-font big-font">“¡La  solución perfecta para el auxilio vial!”</h3></p>
							<p><h3 class="text-center white-font">“Más de 2000 grueros al alcance de tu mano con un solo click”</h3></p>
							<p align="center">
                                                                    <a class="btn text-center black-font" href="<?php echo full_url;?>/ap/index.php">
                                                                        <img src="<?php echo full_url?>/web/img/icon2.png" >
                                                                        <small><b>Acceso grueros</b></small>
                                                                    </a>
                            </p>
						</div>
			</div>	
		</div>
	</section>
    <section class="success5" id="work">
        <div class="container-fluid">
			<div class="col-lg-offset-0 col-md-offset-0">
				<div class="row">
						<div class="thumbnail">
							<img src="<?php echo full_url;?>/web/img/ic2.png">
							
							<div class="caption">
                                                                <p class="text-center"><b>GPS</b></p>
								 <p class="text-center text-info"><small>Ubicamos a los grueros más cercanos a tu ubicación</small></p>
							  </a>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="thumbnail">
							<img src="<?php echo full_url;?>/web/img/ic3.png" >

							<div class="caption">
								 <p class="text-center"><b>Calidad</b></p>
								 <p class="text-center text-info"><small>Nuestros grueros son los más calificados del mercado</small></p>
							  </a>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="thumbnail">
							<img src="<?php echo full_url;?>/web/img/ic4.png">

							<div class="caption">
								 <p class="text-center"><b>Rapidez</b></p>
								 <p class="text-center text-info"><small>Grúas en menos de 30 minutos</small></p>
							  </a>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="thumbnail">
							<img src="<?php echo full_url;?>/web/img/ic5.png">

							<div class="caption">
								 <p class="text-center"><b>Sencillez</b></p>
								 <p class="text-center text-info"><small>Un botón y ¡Listo! La grúa viene en camino</small></p>
							  </a>
							</div>
						</div>
				</div>
				<div class="row">
						<div class="thumbnail">
							<img src="<?php echo full_url;?>/web/img/ic6.png">

							<div class="caption">
								<p class="text-center"><b>Grueros</b></p>
								 <p class="text-center text-info"><small>Contamos con más de 2000 grueros en todo el territorio nacional</small></p>
							  </a>
							</div>
						</div>
				</div>
			</div>
        </div>
    </section>
	<section class="success3" id="about">		
			<div class="row">
				<div class="col-md-3 col-lg-3 portfolio-item">
						<div class="thumbnail">
						<a class="portfolio-link" role="button" data-toggle="modal" href="#portfolioModal1" aria-expanded="false" aria-controls="portfolioModal1">
						  <img src="<?php echo full_url;?>/web/img/ic7.png">
						</a>
							<div class="caption">
							
							   <p class="text-center white-font">¿Qué hacemos?</p>
							</div>
						</div>
				</div>
				<div class="col-md-3 col-lg-3">
						<div class="thumbnail">
						<a class="" role="button" data-toggle="modal" href="#portfolioModal2" aria-expanded="false" aria-controls="portfolioModal2">
							<img src="<?php echo full_url;?>/web/img/ic8.png">
						</a>
							<div class="caption">
							
							   <p class="text-center white-font">Sobre nosotros</p>
							</a>
							</div>
						</div>
				</div>
				<div class="col-md-3 col-lg-3">
						<div class="thumbnail">
						<a class="" role="button" data-toggle="modal" href="#portfolioModal3" aria-expanded="false" aria-controls="portfolioModal3">
							<img src="<?php echo full_url;?>/web/img/ic9.png">
						</a>
							<div class="caption">
							
								<p class="text-center white-font">¿A dónde vamos?</p>
							</a>
							</div>

						</div>
				</div>				
				<div class="col-md-3 col-lg-3">
						<div class="thumbnail">
							<a class="" role="button" data-toggle="modal" href="#portfolioModal4" aria-expanded="false" aria-controls="portfolioModal4">
								<img src="<?php echo full_url;?>/web/img/ic10.png">
							</a>
							<div class="caption">
								 <p class="text-center white-font">¿Cómo funcionamos?</p>
							  </a>
							</div>
						</div>
				</div>					
			</div>
	</section>
	<section class="success5" id="video">
	<div class="row" >
		<div class="container">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="" height="" frameborder="0" wmode="Opaque" allowfullscreen="" src="https://www.youtube.com/embed/oqDRPoPDehE?wmode=transparent"></iframe>
			</div>
		</div>
	</div>
	</section>
	<section id="testimonials" class="success"> 
            <div class="container content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonials">
                            <div class="active item">

                              <div class="carousel-info">

                                <div class="pull-left">
                                  <span class="testimonials-name white-font">Carlos Germani </span>
                                  <span class="testimonials-post white-font">Presidente a nivel nacional del Club Grúas Venezuela.  Barquisimeto, Venezuela</span>
                                </div>
                              </div>
                                <blockquote>
                                    <p>
                                        “Como presidente del Club Grúas Venezuela doy fe de que TU/GRUERO® es la mejor solución para nosotros los grueros en nuestro trabajo, los pagos son mucho más rápidos y elevados. Además el trabajar con tecnología nos simplifica mucho nuestra labor.”
                                    </p>
                                </blockquote>
                            </div>
                            <div class="active item">

                              <div class="carousel-info">
                                <!--<img alt="" src="<?php echo full_url?>/web/img/Carlos_Germani.png" class="pull-right">-->
                                <div class="pull-left">
                                  <span class="testimonials-name white-font">Juan Panto </span>
                                  <span class="testimonials-post white-font">Presidente a nivel regional del Club Grúas Venezuela en la Gran Caracas</span>
                                </div>
                              </div>
                                <blockquote>
                                    <p>
                                        “Con TU/GRUERO® me siento mucho más seguro a la hora de trabajar, sé que los servicios que tomo por la aplicación son servicios de clientes serios, les  recomiendo a todos mis colegas que se afilien a esta plataforma, es muy buena”.
                                    </p>
                                </blockquote>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>
	
	</section>

    <!-- Contact Section -->
    <section id="contact" class="success5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="white-font">Contáctanos</h2>
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
                                <input type="email" class="form-control input-sm" placeholder="Dirección de correo" id="email" required data-validation-required-message="Por favor indique su Dirección de correo.">
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
                                <input type="text"  class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor indique su Mensaje.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" id="btnSubmit" class="btn btn-default btn-lg">Enviar</button>
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
                        <h3 class="white-font">Dirección</h3>
                        <p class="white-font">Av. Principal Los Dos Caminos. Edificio Provincial. Piso 8. Oficina 8 “B”. Municipio Sucre. Caracas. Venezuela. Código Postal: 1071.</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3 class="white-font">Redes sociales</h3>
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
                        <div align="center"><p><img src="web/img/titulo3.png" class="img-responsive" width="200"></p></div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="white-font">Copyright &copy; tugruero.com 2016</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <!--<div class="scroll-top page-scroll">
        <a class="btn btn-default" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>-->

    <!-- Modals -->
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
                            <h2 class="white-font">¿Qué hacemos?</h2>
                            <br>
			<p class="text-justify white-font">
                            Ofrecemos el mejor servicio de auxilio vial por medio de nuestra excelente plataforma de comunicación, garantizando la tranquilidad a los accidentados en la vía, y esforzándonos siempre en actuar con amabilidad, transparencia e integridad.
			</p>
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
                            <h2 class="white-font">Sobre nosotros</h2>
                            <br>
                            <!--<hr class="star-primary">-->
			<p class="text-justify white-font">
                            Nuestra plataforma de comunicación se llama TU/GRUERO®, es la primera aplicación de teléfonos inteligentes hecha para el auxilio vial. La aplicación conecta a los accidentados con las grúas más cercanas vía geolocalización, permitiéndoles obtener un servicio rápido, eficiente y seguro, simplemente con tocar un botón. 
			</p>
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
                            <h2 class="white-font">¿A dónde vamos?</h2>
                            <br>
                            <!--<hr class="star-primary">-->
			<p class="text-justify white-font">
                            TU/GRUERO® ser perfila a ser la plataforma tecnológica número uno a nivel mundial en auxilio vial, teniendo la red de grueros más amplia, trabajando con el 100% de las compañías de seguro existentes y la mayor cantidad de personas no aseguradas del mercado.
			</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2 class="white-font">¿Cómo funcionamos?</h2>
                            <br>
                            <!--<hr class="star-primary">-->
			<p class="text-justify white-font">
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
    </div>
</body>
</html>

    <script src="web/js/jquery.js"></script>
    <script src="web/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="web/js/classie.js"></script>
    <script src="web/js/cbpAnimatedHeader.js"></script>
    <script src="web/js/jqBootstrapValidation.js"></script>
    <script src="web/js/contact_me.js"></script>
    <script src="web/js/freelancer.js"></script>
	<script src="web/ccsa/js/angular.js"></script>
	<script src="web/ccsa/js/vendors.js"></script>
	<script src="web/ccsa/js/cssawds.min.js"></script>

    
