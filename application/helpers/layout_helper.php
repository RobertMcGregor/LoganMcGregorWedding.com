<?php

/*
 * This file is for any components that bound major sections of the
 * website, such as full-width content panels.
 */


/*
 * Default color: white
 * Shaded background: #f3f3f3
 */
function content_white ($color = "white", $options = array()) {
	$content = '<div class="wd_content solid" style="background: '.$color.'">
		<div class="wd_content_inner">';
		
	return $content;
}

function content_shaded ($color = "#f3f3f3", $options = array()) {
	$content = '<div class="wd_content solid" style="background: '.$color.'">
		<div class="wd_content_inner">';
		
	return $content;
}

function content_image ($img, $options = array()) {
	$content = '<div class="wd_content" style="background: url('.$img.') no-repeat center top;">
		<div class="wd_content_inner">';
		
	return $content;
}

function content_end () {
	$content = '</div>
		</div>';
		
	return $content;
}

function hspace ($width = 0) {
	$space = '<div class="hspace" style="width: '.$width.'px"></div>';
	
	return $space;
}

function vspace ($height = 0) {
	$space = '<div class="clear" style="height: '.$height.'px"></div>';
	
	return $space;
}