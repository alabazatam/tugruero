<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo full_url;?>/web/img/favicon.png">
    <title>TU/GRUERO®</title>
    <link href="<?php echo full_url;?>/web/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo full_url;?>/web/css/freelancer_app.css" rel="stylesheet">
	<link href="<?php echo full_url;?>/web/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo full_url;?>/web/css/caroussel.css" rel="stylesheet">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link href="<?php echo full_url;?>/web/css/datatables.css" rel="stylesheet">
	<script src="<?php echo full_url;?>/web/js/datatables.js"></script>
 </head>
 <body class="fondo_mensaje">

	 <div class="">
			<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4 col-sm-offset-4 col-xs-offset-4 col-md-offset-4 col-lg-offset-4 ">

				<p class="text-center" >
					<br><br><br><br>
					<?php echo $values['message'];?>

				</p>

			</div>
			<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4 col-sm-offset-4 col-xs-offset-4 col-md-offset-4 col-lg-offset-4 ">




				<div id="">
					<br><br><br><p class="text-center"><a href="<?php echo full_url;?>/ap/index.php"><img src="<?php echo full_url;?>/web/img/boton_mensaje.png"></img></a></p>
				</div>


			</div>

			<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4 col-sm-offset-4 col-xs-offset-4 col-md-offset-4 col-lg-offset-4 ">




				<div id="" class="text-center" align="center">
					<br><br><br><br><br><img src="<?php echo full_url;?>/web/img/footer_mensaje.png"></img>
				</div>


			</div>
	 </div>
<?php include('../view_footer.php');?>