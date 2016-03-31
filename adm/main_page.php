<?php include("../view_header.php");?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "><!--header-->
              
</div><!--fin header-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class=""><!--menu mobile-->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Cerrar/Abrir</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="#"> <img src="<?php echo full_url;?>/web/img/logo1.png" class="img-responsive" width="150"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          
                           <ul class="nav navbar-nav navbar-right">
                            <?php foreach($items_padres as $item):?>
                                <li class="dropdown">
                                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $item['name']?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <?php $items_hijos = $Menu -> getMenu(3,1,$item['id_menu']);?>
                                      <?php foreach($items_hijos as $item2):?>
                                        <li><a href="<?php echo full_url.$item2['url']?>" target="mainframe"><?php echo $item2['name']?></a></li>
                                      <?php endforeach;?>
                                    </ul>
                                </li>
                            <?php endforeach;?>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>          
        </div><!--fin menu mobile-->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><!--contenido-->
		<div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="index.php?action=bienvenida" frameborder="0" name="mainframe"></iframe>
		</div>
	</div><!--fin contenido-->



</div>
<?php include("../view_footer.php");?>	