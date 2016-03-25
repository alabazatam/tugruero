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
    <div class="visible-lg visible-md" align="center"><a href="#page-top"><img src="web/img/g362.png" class="img-responsive" width="200" alt="tugruero.com"></a></div>
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
<section id="header">
   <div id="<?php echo $caroussel1_name;?>" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php foreach($caroussel1_details as $caroussel1):?>
            <li data-target="#<?php echo $caroussel1_name;?>" data-slide-to="<?php echo $caroussel1['data_slide_to']?>" class="<?php echo $caroussel1['class']?>"></li>     
        <?php endforeach;?>

      </ol>
      <div class="carousel-inner" role="listbox">
        
        <?php foreach($caroussel1_details as $caroussel1):?>
            <div class="item <?php echo $caroussel1['class']?>">
              <img class="first-slide" src="web/img/<?php echo $caroussel1['image']?>" alt="<?php echo $caroussel1['alt']?>">
              <div class="container">
                <div class="carousel-caption">
                    <!--<div class="well">
                        <h1>No importa donde estés</h1>
                        <p>Contamos con tecnologia satelital que nos permite ubicarte en pocos minutos</p>                   
                    </div>-->

                    <p align="center" class="visible-lg visible-md"><img src="web/img/download_android.png" class="img-responsive"></p>
                    <p align="center" class="visible-lg visible-md"><a class="btn btn-primary">Regístrate aqui</a></p>
                </div>
              </div>
            </div>
        <?php endforeach;?>          
      </div>

    </div><!-- /.carousel -->
</section>
 
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>¿Quiénes somos?</h2>
                    <!--<hr class="star-light">-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at lobortis odio. In a tristique enim. In sodales placerat neque eget porttitor. Integer urna magna, commodo nec diam eget, fringilla efficitur mauris. In scelerisque odio sit amet semper faucibus. </p>
                </div>
                <div class="col-lg-4">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at lobortis odio. In a tristique enim. In sodales placerat neque eget porttitor. Integer urna magna, commodo nec diam eget, fringilla efficitur mauris. In scelerisque odio sit amet semper faucibus. </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Acción
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>¿Cómo funcionamos?</h2>
                    <!--<hr class="star-primary">-->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="web/img/diagrama1.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="web/img/g5248.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="web/img/g5247.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact">
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
                                <input type="text" class="form-control" placeholder="Nombres y Apellidos" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Dirección de correo</label>
                                <input type="email" class="form-control" placeholder="Dirección de correo" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Número de Teléfono</label>
                                <input type="tel" class="form-control" placeholder="Número de Teléfono" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
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
                        <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Redes sociales</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
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

    
