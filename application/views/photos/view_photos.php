<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


<div id="photos-outter">
	<div id="photos-inner">

		<div class="photos-content">
			
			<br />
			<?php echo $output; ?>
			<?php 
				foreach ($photos as $key => $value) { ?>
					
						<a href="http://www.logan-mcgregor-wedding.com/albums/<?= $photos[$key]['image'] ?>">
							<img src="http://www.logan-mcgregor-wedding.com/albums/<?= $photos[$key]['thumb'] ?>" >
						</a>

			<?php
				}
			?>
			
		</div>
		
	</div>
</div>
