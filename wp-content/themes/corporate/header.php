<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>><head profile="http://gmpg.org/xfn/11">	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	<meta name="robots" content="index,follow" />	<meta name="revisit-after" content="7 Days" />	<title>		<?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>		<?php if ( is_search() ) { ?><?php echo the_search_query(); ?> | <?php bloginfo('name'); ?><?php } ?>		<?php if ( is_single() ) { ?> | <?php bloginfo('name'); ?><?php } ?>		<?php if ( is_page() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>		<?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> | <?php bloginfo('name'); ?><?php } ?>		<?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?> | <?php bloginfo('name'); ?><?php } ?>		<?php if ( is_tag() ) { ?><?php single_tag_title();?> | <?php bloginfo('name'); ?><?php } ?>	</title>		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/screen.css" type="text/css" media="screen, projection" />	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" media="print" /> 	<!--[if IE]>		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" type="text/css" media="screen, projection" />	<![endif]-->	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />	<!--[if lt IE 7]>		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ielt7.css" type="text/css" media="screen, projection" />	<![endif]-->	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />	<link rel="shortcut icon" type="image/x-png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />		<?php wp_head(); ?>	<SCRIPT TYPE="text/javascript">
var message="Sorry, right-click has been disabled";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
</SCRIPT>

<script type="text/javascript">

/***********************************************
* Disable Text Selection script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

function disableSelection(target){
if (typeof target.onselectstart!="undefined") //IE route
	target.onselectstart=function(){return false}
else if (typeof target.style.MozUserSelect!="undefined") //Firefox route
	target.style.MozUserSelect="none"
else //All other route (ie: Opera)
	target.onmousedown=function(){return false}
target.style.cursor = "default"
}

//Sample usages
//disableSelection(document.body) //Disable text selection on entire body
//disableSelection(document.getElementById("mydiv")) //Disable text selection on element with id="mydiv"
    
        </script>
    </head>
   
<body>	
    <div class="container">		
        <div id="top" class="span-24">		
            <div class="menu">	
                
                
               <ul style="float: right; margin: 0px; padding: 0px; width: 205px;">				
                    <li class="page_item <?php if ( is_home() ) { ?>current_page_item<?php } ?>">
                        <h1>
                            <a href="<?php bloginfo('url'); ?>">Home &nbsp;&nbsp;&nbsp;|</a>
                        </h1>
                    </li>					
                        <?php //wp_list_pages('title_li=&depth=-1&sort_column=menu_order'); ?>	
                     
                   <!--<li><ul style="float: right; margin: 0px; padding: 0px; width: auto" > -->
  
                        <li class="dropdown">
                         <a href="<?php bloginfo('url'); ?>/quiz"> Quiz</a>
                          <ul style="float: right; margin: 0px; padding: 0px; width: auto" class="dropdown-content" >
<!--                         <li class="dropdown">
                             <div class="dropdown-content">
                            <a href="<?php// bloginfo('url'); ?>/wedding-quiz">Wedding Quiz</a>
                            <a href="#">Quiz 2</a>
                            <a href="#">Quiz3</a>
                          </div>
                        </li>-->
                       </ul></li>
                    
<!--                <li> <a href="<?php //bloginfo('url'); ?>/wedding-quiz" title="Quiz">-->
                        <!--<div class="quiz-btn" type="submit" name=""> |&nbsp;&nbsp;  Wedding Quiz</div>-->
                    <!--</a>-->
                    
                <!--</li>-->
                    <li><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to RSS feed">
                            <img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="Subscribe to RSS feed" />
                        </a>
                    </li>		
                </ul>		
            </div>	
        </div>		
        <div id="contenttop" class="span-24"></div>	
        <div id="contentwrapper" class="span-24">	
            <div id="header" class="span-22 prepend-1 append-1">	
                <div id="title" class="span-15 prepend-1">		
                    <a href="http://www.shaadiekhas.com">
                        <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/sekhome-logo.png" alt="<?php //bloginfo('name'); ?>" />
                    </a>								
                </div>	
                <div id="searchbar" class="span-5 append-1 last">	
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>	
                </div>	
            </div>	
            
<!--===================================FB WIDGET JS START-------===================================-->
<!--   <style>
     .fb_iframe_widget{ background-color:#fff !important;}
.slide-out-div {
 
 width: 252px;
 background-color: #fffff !important;
 background: #FFF;
 
 position:relative;
 z-index:9999;
 
 
}  
    </style>
    
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
    <script src="http://www.shaadiekhas.com/js/jquery.tabSlideOut.v1.3.js"></script>
    <script type="text/javascript"> 
                            
                        var $a= jQuery.noConflict();
                        
                             $a(function(){
                                            $a('.slide-out-div').tabSlideOut({
                                                tabHandle: '.handle',                     //class of the element that will become your tab
                                                pathToTabImage: "http://www.shaadiekhas.com/app/view/themes/media/images/facebook_toggle.png", //path to the image for the tab //Optionally can be set using css
                                                imageHeight: '130px',                     //height of tab image           //Optionally can be set using css
                                                imageWidth: '47px',                       //width of tab image            //Optionally can be set using css
                                                tabLocation: 'left',                      //side of screen where tab lives, top, right, bottom, or left
                                                speed: 300,                               //speed of animation
                                                action: 'click',                          //options: 'click' or 'hover', action to trigger animation
                                                topPos: '113px',                          //position from the top/ use if tabLocation is left or right
                                                background: '#fff',   
                                                fixedPosition: true                     //options: true makes it stick(fixed position) on scroll
                                            });

                                        });
                                 
 </script>
======================================END HERE=====================================================

=======================================FB widget code start here==========================================================
            <div class="slide-out-div" style="background:#ffffff;"  >

            <a class="handle" href="http://link-for-non-js-users.html"></a>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                                   <div class="fb-like-box" data-href="http://www.facebook.com/shaadiekhas" data-width="252" data-height="425" data-show-faces="true" data-stream="true" data-header="true"></div>
            
        </div> -->
        <!--===============================================FB WIDGET END HERE===============================================================================-->