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
		 <table width="100%" border="0" class="table-responsive">
			 <tr>
				 <td align="center" width="50%">
					 <br><br><br><br><br><br>
					 <p align="center"><?php echo $values['message'];?></p>
					
				 </td>
			 </tr>
			 <tr>
				 <td align="center">
					 <a href="<?php echo full_url;?>/ap/index.php"><img  class="img-responsive text-center" src="<?php echo full_url;?>/web/img/boton_mensaje.png"></a>
					 <br>
				 </td>
			 </tr>
			 <tr>
				 <td align="center">
					 <img  class="img-responsive" src="<?php echo full_url;?>/web/img/footer_mensaje.png">
					 <br>
				 </td>
			 </tr>				 
		 </table>
	 </div>
<?php include('../view_footer.php');?>