
	
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-hover table-striped">
			<tr>
				<th>Estado</th>
				<th>Cantidad</th>
			</tr>
			<?php if(count($grueros_online)>0):?>
			<?php foreach($grueros_online as $data):?>
			<tr>
				<td><?php echo $data['zone_work']?></td>
				<td><?php echo $data['nombre']?></td>
			</tr>
			<?php endforeach;?>
			<?php endif;?>			
		</table>
		
		
	</div>
	
