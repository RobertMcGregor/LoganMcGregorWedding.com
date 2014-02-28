<?php

/* STANDARD INTERNAL LOCATION VARIABLES */

$WEBROOT = "http://".$_SERVER['SERVER_NAME'].($_SERVER['SERVER_PORT']!=80?':'.$_SERVER['SERVER_PORT']:'').'/';
$DOC = $WEBROOT."doc/";
$TEMPLATE = $WEBROOT."template/";
$LIB = $TEMPLATE."lib/";
$IMG = $TEMPLATE."img/";
$JS = $TEMPLATE."js/";
$CSS = $TEMPLATE."css/";

define('WEBROOT', $WEBROOT);
define('DOC', $DOC);
define('TEMPLATE', $TEMPLATE);
define('LIB', $LIB);
define('IMG', $IMG);
define('JS', $JS);
define('CSS', $CSS);

/* COMMON EXTERNAL VARIABLES */

$FACEBOOK = "https://www.facebook.com/weday";
$TWITTER = "http://twitter.com/craigkielburger";
$YOUTUBE = "http://www.youtube.com/user/freethechildrenintl";
$FTC = "http://www.freethechildren.com/";
$METOWE = "http://www.metowe.com/";

define('FACEBOOK', $FACEBOOK);
define('TWITTER', $TWITTER);
define('YOUTUBE', $YOUTUBE);
define('FTC', $FTC);
define('METOWE', $METOWE);

/* SITE-SPECIFIC COLORS (CSS) */

$BLACK = "#363636";
$RED = "#e4092d";
$GREEN = "#8eb607";
$BLUE = "#00b5ef";
$YELLOW = "#f9db2f";
$NAVY = "#304e79";
$GRAY = "#999999";

define('BLACK', $BLACK);
define('RED', $RED);
define('GREEN', $GREEN);
define('BLUE', $BLUE);
define('YELLOW', $YELLOW);
define('NAVY', $NAVY);
define('GRAY', $GRAY);

$VIDEO_H = 340;
$VIDEO_W = 610;

define("VIDEO_H", $VIDEO_H);
define("VIDEO_W", $VIDEO_W);