<!DOCTYPE html>
<html lang="en">
<head>
  <title>Animate.css</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, minimal-ui" />

  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link rel="dns-prefetch" href="//code.jquery.com" />

  <link href='//fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="<?php echo full_url.'/web/css/'?>animate.min.css" />
  <link rel="stylesheet" href="<?php echo full_url.'/web/css/'?>style_new.css" />
</head>
<style>
#animationSandbox {
    -vendor-animation-duration: 6s;
    -vendor-animation-delay: 2s;
    -vendor-animation-iteration-count: infinite;
}
</style>
<body>
<header class="site__header island">
  <div class="wrap">
   <span id="animationSandbox" style="display: block;"><h1 class="site__title mega">Animate.css</h1></span>
    <span id="animationSandbox2" style="display: block;">Just-add-water CSS animations</span>
  </div>
</header><!-- /.site__header -->


<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
    

    
  function testAnim(x) {
    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };
  function testAnim2(x) {
    $('#animationSandbox2').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };
  
$(document).ready(function(){
    testAnim2('slideInLeft');
    testAnim('slideInUp');

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
      testAnim2('slideInLeft');
    });
  });

</script>

</body>
</html>
