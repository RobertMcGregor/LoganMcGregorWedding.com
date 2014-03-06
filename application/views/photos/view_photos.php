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
			<pre>
			<?php print_r($photos); ?>
			</pre>
			<?php /*
				foreach ($photos as $key => $value) {
					echo $key." -- ".print_r($value)."<br/>";
				}*/
			?>
			
		</div>
		
	</div>
</div>
