<?

/*
 * This file is for standard visual components that can appear
 * on any page. They can be either variables or functions, depending
 * on what they need to do.
 */

/*********************
 ****** BUTTONS ******
 *********************/

/*
 * Creates a blue button with a top-left shadow
 * @param $text the text displayed in the button
 * @param $url the URL that the button links to (goes in the "href")
 * @param $width OPTIONAL - sets the total button width. If not set, the width is automatic
 * @param $target OPTIONAL - If TRUE, link opens in a new page
 * @param $small_font OPTIONAL - If TRUE, set font size to 13px
 * @return the code for the button
 */
function shadow_button ($text, $url, $width = NULL, $target = FALSE, $hover = FALSE, $small_font = FALSE) {
	$button = '<div class="shadow_button'.($hover?" hover":"").'">
		<table>
			<tr>
				<td class="button_left"></td>
				<td class="button_middle" style="'
					.($width?'width: '.($width-24).'px;':'')
					.'">
					<a href="'.$url.'" '.($target?'target="_blank"':'').' '.($small_font?'style="font-size: 13px;"':'').'>'.$text.'</a>
				</td>
				<td class="button_right"></td>
			</tr>
		</table>
	</div>';
	
	return $button;
}


/**********************
 ***** HORIZONTAL *****
 ******** LINE ********
 **********************/

/*
 * Creates a full-width horizontal grey divider line
 * @param $vspace the vertical space around the divider, half-above and half-below
 * @return the code for the divider
 */
function hline ($vspace = 0, $bgcolor = "grey") {
	$hline = vspace($vspace/2)
	.'<div class="hline" style="background-color: '.$bgcolor.';"></div>'
	.vspace($vspace/2);
	
	return $hline;
}

/*
 * Creates a full-width horizontal grey divider line with a 3px
 * vertical gradient, from dark to light
 * 
 * @return the code for the divider
 */
function hline_gradient () {
	$hline = '<div class="hline" style="background: #999999"></div>
		<div class="hline" style="background: #bbbbbb"></div>
		<div class="hline" style="background: #dddddd"></div>';
	return $hline;
}

/**********************
 ****** FACEBOOK ******
 ****** WIDGETS *******
 **********************/
 
function like_widget () {
	$widget = '<div class="like_widget">
		<h3 class="red">Support Free The Children</h3>
		<img src="'.IMG.'fb-like.jpg" alt="Like to Donate" />'
		.vspace(20)
		.shadow_button('"Like" us on Facebook', FACEBOOK, 257, TRUE).
		'</div>';
		
	return $widget;
}

/***********************
 ******** VIDEO ********
 ******* DISPLAY *******
 ***********************/

/*
	 * Video display funtion
	 * 
	 * @param $v youtube video id
	 * @param $id div id specify by yourself
	 * @param $width, $height width and height of the div
	 * @return a piece of html code display the video
	 */
function video_display($v, $id, $width, $height, $source = NULL, $class = NULL, $flashvars=array(), $params=array(), $attrs=array()) {
		$flashvars_default = array(
			"autoplay"=>0,
			"rel"=>0,
			"fs"=>1,
			"hd"=>1,
			"showsearch"=>0,
			"showinfo"=>0
		);		
		$params_default = array(
			"allowfullscreen"=>"true",
			"allowscriptaccess"=>"always",
			"wmode"=>"opaque"
		);
		$attrs_default = array(
		);		
		$f = array_merge($flashvars_default, $flashvars);
		$p = array_merge($params_default, $params);
		$a = array_merge($attrs_default, $attrs);
		if ($source == NULL || $source == "youtube") {
		$video = "
		<div id='{$id}' class='{$class}' style='width: ".$width."px; height: ".$height."px;'>
<div id='".$id."_inner'></div>
</div>
<script type='text/javascript'>
swfobject.embedSWF('http://www.youtube.com/v/".$v."', '".$id."_inner', '".$width."', '".$height."', '7', 'http://www.freethechildren.com/lib/swfobject-2.2/expressInstall.swf', ".stripslashes(json_encode($f)).", ".stripslashes(json_encode($p)).", ".stripslashes(json_encode($a)).");
</script>";
		} else {
		$video = "
		<script type='text/javascript' src='http://videos4.freethechildren.com/lib/swfobject-2.2/swfobject.js'></script>
		<div id='{$id}' class='{$class}' style='width: ".$width."px; height: ".$height."px;'>
<div id='".$id."_inner'></div>
</div>
<script type='text/javascript'>
swfobject.embedSWF('http://videos4.freethechildren.com/lib/mediaplayer-5.4-viral/player.swf','".$id."_inner', '".$width."', '".$height."', '7', 'http://www.freethechildren.com/lib/swfobject-2.2/expressInstall.swf', {'file':'".$source."/video.flv','controlbar':'over','skin':'http://videos4.freethechildren.com/lib/mediaplayer-5.4-viral/skins/bekle.zip','viral.onpause':false,'viral.oncomplete':true,'viral.email_footer':'---','autostart':1}, ".stripslashes(json_encode($p)).",[]);
</script>";
		}
		return $video;
	}

function video_server_display($v, $id, $width, $height, $class = NULL, $flashvars=array(), $params=array(), $attrs=array()) {
		$flashvars_default = array(
			"autoplay"=>0,
			"rel"=>0,
			"fs"=>1,
			"hd"=>1,
			"showsearch"=>0,
			"showinfo"=>0
		);		
		$params_default = array(
			"allowfullscreen"=>"true",
			"allowscriptaccess"=>"always",
			"wmode"=>"opaque"
		);
		$attrs_default = array(
		);		
		$f = array_merge($flashvars_default, $flashvars);
		$p = array_merge($params_default, $params);
		$a = array_merge($attrs_default, $attrs);
		$video = "
		<script type='text/javascript' src='http://videos4.freethechildren.com/lib/swfobject-2.2/swfobject.js'></script>
		<div id='{$id}' class='{$class}' style='width: ".$width."px; height: ".$height."px;'>
<div id='".$id."_inner'></div>
</div>
<script type='text/javascript'>
swfobject.embedSWF('http://videos4.freethechildren.com/lib/mediaplayer-5.4-viral/player.swf','".$id."_inner', '".$width."', '".$height."', '7', 'http://www.freethechildren.com/lib/swfobject-2.2/expressInstall.swf', {'file':'http://videos4.freethechildren.com/watch/".$v."/video.flv','controlbar':'over','skin':'http://videos4.freethechildren.com/lib/mediaplayer-5.4-viral/skins/bekle.zip','viral.onpause':false,'viral.oncomplete':true,'viral.email_footer':'---','autostart':1}, ".stripslashes(json_encode($p)).",[]);
</script>";

		return $video;
	}


/***********************
 ******* SPEAKER *******
 ******* CAROUSEL ******
 ***********************/
 
function speaker_carousel($images = array()) {
	
	$carousel = '<div class="carousel2"><ul>';
	foreach ($images as $i => $image) {
		if ($i%6 == 0)
			$carousel .= '<li><table class="frame"><tr>';
		if ($i%2 == 0)
			$carousel .= '<td><table>';
		
		$carousel .= "<tr><td>";
		
		$img = "<img src='".IMG."events/speakers/{$image['image']}' alt='' />";
		
		if ($image['lightbox'])
			$carousel .= "<a href='".WEBROOT."about/press_speaker/{$image['image']}'>{$img}</a>";
		else if (!empty($image['image']))
			$carousel .= $img;
		$carousel .= "</td></tr>";
		
		if ($i%2 == 1)
			$carousel .= '</table></td>';
		if ($i%6 == 5)
			$carousel .= '</tr></table></li>';
	}
	
	if (count($images)%2 != 0)
		$carousel .= '</table></td>';
	if (count($images)%6 != 0)
		$carousel .= '</tr></table></li>';
	
	$carousel .= '</ul></div>';
	
	$carousel .= '<script type="text/javascript">
	$(".carousel2 a").colorbox({
		iframe: true,
		innerWidth: 500,
		innerHeight: 500
	});
	</script>';
	
	return $carousel;
}