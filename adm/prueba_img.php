<?php include('../autoload.php')?>
<?php include("../view_header_app.php");?>
<style>
.hover_group:hover {
  opacity: 1;
}
#Auto {
  position: relative;
  width: 100%;
  padding-bottom: 15%;
  vertical-align: middle;
  margin: 0;
  overflow: hidden;
  background-color: #fff;
}
#Auto svg {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
}	
</style>
<div class="col-sm-8 col-sm-offset-4" align="center">
	<figure id="Auto">
	  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1080" preserveAspectRatio="xMinYMin meet">
		<image width="250" height="250" xlink:href="<?php echo full_url?>/web/img/SVGs/Cauchos.svg"></image>
		<g class="hover_group" opacity="1">
		  <a xlink:href="#">
			<!--<text x="0" y="40" font-size="20">Caucho A</text>-->
			<rect x="0" y="40" opacity="1" width="40" height="40" id="CauchoA" style="fill:rgb(255,255,255);stroke-width:3;stroke:rgb(0,0,255);"></rect>
		  </a>
		</g>
		<g class="hover_group" opacity="1">
		  <a xlink:href="#">
			<!--<text x="210" y="40" font-size="20">Caucho b</text>-->
			<rect x="210" y="40" opacity="1" width="40" height="40" id="CauchoB" style="fill:rgb(255,255,255);stroke-width:3;stroke:rgb(0,0,255);"></rect>
		  </a>

		</g>
		<g class="hover_group" opacity="1">
		  <a xlink:href="#">
			<!--<text x="0" y="170" font-size="20">Caucho c</text>-->
			<rect x="0" y="170" opacity="1" width="40" height="40" id="CauchoC" style="fill:rgb(255,255,255);stroke-width:3;stroke:rgb(0,0,255);"></rect>
		  </a>

		</g>
		<g class="hover_group" opacity="1">
		  <a>
			<!--<text x="210" y="170" font-size="20">Caucho d</text>-->
			  <rect x="210" y="170" opacity="1" width="40" height="40" id="CauchoD" style="fill:rgb(255,255,255);stroke-width:3;stroke:rgb(0,0,255);"></rect>
			
		  </a>

		</g>
	  </svg>
	</figure>
<input id="caucho1" type="checkbox" value="1" class=" input-sm">
	<input id="caucho2" type="checkbox" value="1" class=" input-sm"><br>
<input id="caucho3" type="checkbox" value="1" class=" input-sm">
<input id="caucho4" type="checkbox" value="1" class="input-sm">
</div>
<?php include("../view_footer_solicitud.php");?>
<script>

$(document).ready(function() {
		$('#CauchoA').click(function(e)
		{
			W = $(this).width();
			H = $(this).height();
			X = $(this).position().left;
			Y = $(this).position().top;
			

			if ($('#caucho1').is(':checked')) {
				$(this).css('fill', "rgb(255,255,255)");
				$( "#caucho1" ).prop( "checked", false );
			}else{
				$(this).css('fill', "rgb(0,0,0)");
				$( "#caucho1" ).prop( "checked", true );			
			}
			
			
		});
		$('#CauchoB').click(function(e)
		{
			W = $(this).width();
			H = $(this).height();
			X = $(this).position().left;
			Y = $(this).position().top;
			

			if ($('#caucho2').is(':checked')) {
				$(this).css('fill', "rgb(255,255,255)");
				$( "#caucho2" ).prop( "checked", false );
			}else{
				$(this).css('fill', "rgb(0,0,0)");
				$( "#caucho2" ).prop( "checked", true );			
			}
			
			
		});
		$('#CauchoC').click(function(e)
		{
			W = $(this).width();
			H = $(this).height();
			X = $(this).position().left;
			Y = $(this).position().top;
			

			if ($('#caucho3').is(':checked')) {
				$(this).css('fill', "rgb(255,255,255)");
				$( "#caucho3" ).prop( "checked", false );
			}else{
				$(this).css('fill', "rgb(0,0,0)");
				$( "#caucho3" ).prop( "checked", true );			
			}
			
			
		});
		$('#CauchoD').click(function(e)
		{
			W = $(this).width();
			H = $(this).height();
			X = $(this).position().left;
			Y = $(this).position().top;
			

			if ($('#caucho4').is(':checked')) {
				$(this).css('fill', "rgb(255,255,255)");
				$( "#caucho4" ).prop( "checked", false );
			}else{
				$(this).css('fill', "rgb(0,0,0)");
				$( "#caucho4" ).prop( "checked", true );			
			}
			
			
		});
});


</script>