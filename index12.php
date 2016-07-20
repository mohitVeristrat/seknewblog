<?php
ob_start();
error_reporting(0);
session_start();
//$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$uri = $_SERVER['REQUEST_URI'];
$arr_uri = explode("/", $uri);
$arr_uri2 = explode("-", $_SERVER['REQUEST_URI']);
$i = count($arr_uri2);
$lst_id = $arr_uri2[$i-1];
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com'){
     header("Location: http://www.shaadiekhas.com");
}
if ($_SERVER['HTTP_HOST']== 'shaadi-a-khas.com' || $_SERVER['HTTP_HOST']== 'shaadi-e-khas.com' || $_SERVER['HTTP_HOST']== 'shaadiakhaas.com' || $_SERVER['HTTP_HOST']== 'shaadiakhaas.in' || $_SERVER['HTTP_HOST']== 'shaadiakhas.com' || $_SERVER['HTTP_HOST']== 'shaadiakhas.in' || $_SERVER['HTTP_HOST']== 'shaadiekhaas.com' || $_SERVER['HTTP_HOST']== 'shaadiekhaas.in' || $_SERVER['HTTP_HOST']== 'shaadiekhas.in' || $_SERVER['HTTP_HOST']== 'www.shaadi-a-khas.com' || $_SERVER['HTTP_HOST']== 'www.shaadi-e-khas.com' || $_SERVER['HTTP_HOST']== 'www.shaadiakhaas.com' || $_SERVER['HTTP_HOST']== 'www.shaadiakhaas.in' || $_SERVER['HTTP_HOST']== 'www.shaadiakhas.com' || $_SERVER['HTTP_HOST']== 'www.shaadiakhas.in' || $_SERVER['HTTP_HOST']== 'www.shaadiekhaas.com' || $_SERVER['HTTP_HOST']== 'www.shaadiekhaas.in' || $_SERVER['HTTP_HOST']== 'www.shaadiekhas.in'){
     header("Location: http://www.shaadiekhas.com");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/press" || $_SERVER['REQUEST_URI']=="/press/")){
     header("Location: http://www.shaadiekhas.com/press/indian_wedding/");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/aboutus" || $_SERVER['REQUEST_URI']=="/aboutus/")){
     header("Location: http://www.shaadiekhas.com/aboutus/free_wedding_websites_invitation_email/");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/price" || $_SERVER['REQUEST_URI']=="/price/")){
     header("Location: http://www.shaadiekhas.com/price");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/tour" || $_SERVER['REQUEST_URI']=="/tour/")){
     header("Location: http://www.shaadiekhas.com/tour");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/weddingplanners" || $_SERVER['REQUEST_URI']=="/weddingplanners/")){
     header("Location: http://www.shaadiekhas.com/weddingplanners/wedding_planners_intivation_cards/");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/vendorsignup" || $_SERVER['REQUEST_URI']=="/vendorsignup/")){
     header("Location: http://www.shaadiekhas.com/vendorsignup");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/faq" || $_SERVER['REQUEST_URI']=="/faq/")){
     header("Location: http://www.shaadiekhas.com/faq");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/termandcondition" || $_SERVER['REQUEST_URI']=="/termandcondition/")){
     header("Location: http://www.shaadiekhas.com/termandcondition/wedding_marriage_photos/");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/contactus" || $_SERVER['REQUEST_URI']=="/contactus/")){
     header("Location: http://www.shaadiekhas.com/contactus/online_wedding_invitations_cards/");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/feedback" || $_SERVER['REQUEST_URI']=="/feedback/")){
     header("Location: http://www.shaadiekhas.com/feedback");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/weddingsoftware" || $_SERVER['REQUEST_URI']=="/weddingsoftware/")){
     header("Location: http://www.shaadiekhas.com/weddingsoftware");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/articles" || $_SERVER['REQUEST_URI']=="/articles/")){
     header("Location: http://www.shaadiekhas.com/articles/wedding_websites_software/");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/testimonial" || $_SERVER['REQUEST_URI']=="/testimonial/")){
     header("Location: http://www.shaadiekhas.com/testimonial/Event_Planner/");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && ($_SERVER['REQUEST_URI']=="/fb" || $_SERVER['REQUEST_URI']=="/fb/")){
     header("Location: http://www.shaadiekhas.com/fb");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && $arr_uri['1']=='pressmore'){
     header("Location: http://www.shaadiekhas.com".$_SERVER['REQUEST_URI']."");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && $arr_uri['1']=='registration'){
     header("Location: http://www.shaadiekhas.com".$_SERVER['REQUEST_URI']."");
}
if ($_SERVER['HTTP_HOST']== 'shaadiekhas.com' && $arr_uri['1']=='packages'){
     header("Location: http://www.shaadiekhas.com".$_SERVER['REQUEST_URI']."");
}
if ($arr_uri['1']=='articles' && $arr_uri['2']=='readmore'){
    if(!is_numeric($lst_id)){
     header("Location: http://www.shaadiekhas.com");}     
}

if ($_SERVER['SCRIPT_NAME']== '/index.php'){
     header("Location: http://www.shaadiekhas.com");
}
define('DS', DIRECTORY_SEPARATOR);
define('ROOT',dirname(dirname(__FILE__)));
define('HOST', 'http://www.shaadiekhas.com/');
define('UPLOAD', 'http://www.shaadiekhas.com/app/upload/');
define('APP_DIR','app');
define('CTRL_DIR','controllers');
define('XTPL_DIR','view'.DS.'themes'.DS.'default');
define('STYLE',HOST.'/'.APP_DIR.'/view/themes/styles/default/');
define('SCRIPT',HOST.'/'.APP_DIR.'/view/themes/scripts/');
define('FILES',ROOT.'/'.APP_DIR.'/view/themes/media/images/gallery/');
define('IMAGES',HOST.'/'.APP_DIR.'/view/themes/media/images/gallery/');

define('IMAGE',HOST.APP_DIR.'/view/themes/media/images/');
define('TOUR_PATH',HOST.APP_DIR.'/tour_vid/');
define('FAV',HOST.APP_DIR.'/view/themes/media/images/');
define('CONFIGS',ROOT.DS.'config');
define('CONTROLLER',ROOT.DS.APP_DIR.DS.'controllers');
define('MODEL',ROOT.DS.APP_DIR.DS.'models');
if(!defined('CORE_DIR')){
	define('CORE_DIR',ROOT.DS.'core');	
}
set_include_path(get_include_path() . PATH_SEPARATOR.ROOT.DS.PATH_SEPARATOR.ROOT.DS.APP_DIR.DS.PATH_SEPARATOR.ROOT.DS.APP_DIR.DS.CTRL_DIR.DS.PATH_SEPARATOR.CONTROLLER.DS.PATH_SEPARATOR.MODEL.DS.PATH_SEPARATOR.CORE_DIR);
if(!file_exists(ROOT.'/config/config.ini')){
		include(ROOT.'/installer/index.php');
		exit();
}
if (!include(CORE_DIR.DS.'bootstrap.php')) {
		trigger_error("eek....! Framework path got messed .  Check the value of CORE_DIR in APP_DIR /webroot/index.php.  It should point to the directory containing your " . DS . " core directory and your " . DS . "vendors root directory.", E_USER_ERROR);
	}
	
	
	if (isset($_GET['url']) && $_GET['url'] === 'favicon.ico') {
		return;
	} else {
		$Dispatcher = new Dispatcher();
		$Dispatcher->dispatch();
	}

?>
