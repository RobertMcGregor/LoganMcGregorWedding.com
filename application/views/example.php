<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php

foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; 
?>
<!--
	<link type="text/css" rel="stylesheet" href="http://www.logan-mcgregor-wedding.com/assets/image_crud/css/fineuploader.css" />
	<link type="text/css" rel="stylesheet" href="http://www.logan-mcgregor-wedding.com/assets/image_crud/css/photogallery.css" />
	<link type="text/css" rel="stylesheet" href="http://www.logan-mcgregor-wedding.com/assets/image_crud/css/colorbox.css" />
	<script src="http://www.logan-mcgregor-wedding.com/assets/image_crud/js/jquery-1.8.2.min.js"></script>
	<script src="http://www.logan-mcgregor-wedding.com/assets/image_crud/js/jquery-ui-1.9.0.custom.min.js"></script>
	<script src="http://www.logan-mcgregor-wedding.com/assets/image_crud/js/fineuploader-3.2.min.js"></script>
	<script src="http://www.logan-mcgregor-wedding.com/assets/image_crud/js/jquery.colorbox-min.js"></script>
-->
<?php
foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; 
?>

<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
		<a href='<?php echo base_url('images_examples/example1')?>'>Example 1 - Simple</a> |
		<a href='<?php echo base_url('images_examples/example2')?>'>Example 2 - Ordering</a> |
		<a href='<?php echo base_url('images_examples/example3/22')?>'>Example 3 - With group id</a> |
		<a href='<?php echo base_url('images_examples/example4')?>'>Example 4 - Images with title</a> | 
		<a href='<?php echo base_url('images_examples/simple_photo_gallery')?>'>Simple Photo Gallery</a>
	</div>
	<div style='height:20px;'></div>  
	<div>
		<?php echo $output; ?>
	</div>
</body>
</html>
