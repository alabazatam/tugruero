<?php include('../../view_header.php')?>
<h2><?php echo $about_title;?></h2>
    <section class="" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $about_title;?></h2>
                    <!--<hr class="star-light">-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php foreach($about_contents as $about):?>
						<p class="text-justify"><?php echo $about['html'];?></p>
					<?php endforeach;?>
				</div>
            </div>
		</div>
	</section>
<a class="btn btn-success"  href="<?php echo full_url."/adm/about/index.php?action=edit"?>">Editar</a>