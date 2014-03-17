<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="title" content="Kristine and Roberts wedding"/>
<meta name="keywords" content="wedding" />

<link href="<?=CSS?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?=CSS?>style.css" rel="stylesheet" type="text/css" />
<link href="<?=CSS?>color.css" rel="stylesheet" type="text/css" />
<link href="<?=CSS?>nav.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?=LIB?>/ChopSlider2/css/chopslider.css"/>

<script type="text/javascript" src="<?=LIB?>/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?=LIB?>/jquery.form.js"></script>
<script type="text/javascript" src="<?=LIB?>/jquery.innerlabel.js"></script>
<script type="text/javascript" src="<?=LIB?>/swfobject-2.2/swfobject.js"></script>
<script type="text/javascript" src="<?=LIB?>/jquery-validation-1.9.0/jquery.validate.js"></script>
<script type="text/javascript" src="<?=LIB?>/colorbox-1.3.17/colorbox/jquery.colorbox-min.js"></script>

<script type="text/javascript" src="<?=LIB?>/ChopSlider2/Scripts/jquery.id.chopslider-2.2.0.free.min.js"></script>
<script type="text/javascript" src="<?=LIB?>/ChopSlider2/Scripts/jquery.id.cstransitions-1.2.min.js"></script>


<title><?=$this->data['template']['title']?></title>

<?php if (is_array($this->data['template']['css'])) {
	foreach ($this->data['template']['css'] as $css) {
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$css\" />\n";
	}
} ?>

<style type="text/css">
<?=$this->data['template']['style']?>
</style>


<script type="text/javascript">
$(document).ready(function(){

    // Color box!
    $("a[rel='colorbox']").colorbox();

    // Change the image of hoverable images
	$('.hover').each(function(){
    var t=$(this);
    var src1= t.attr('src'); // initial src
    var newSrc = src1.substring(0, src1.lastIndexOf('.'));; // let's get file name without extension
    t.hover(function(){
        $(this).attr('src', newSrc+ '-hover.' + /[^.]+$/.exec(src1)); //last part is for extension   
    }, function(){
        $(this).attr('src', newSrc + '.' + /[^.]+$/.exec(src1)); //removing '-over' from the name
    });
	});
	
});
</script>

</head>

<body>


