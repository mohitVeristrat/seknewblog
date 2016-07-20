<?php
/*
 Plugin Name: spread.ly for WordPress
 Plugin URI: http://spreadly.com
 Description: Adds support for the spread.ly like/deal button
 Version: 0.9.1
 Author: pfefferle, weyandch
 Author URI: http://spreadly.com
 */

add_action('the_content', array('YiidIt', 'addToContent'), 21);
add_action('wp_head', array('YiidIt', 'addToHeader'), 21);

// Pre-2.6 compatibility
if ( ! defined( 'WP_CONTENT_URL' ) )
  define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
if ( ! defined( 'WP_CONTENT_DIR' ) )
  define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
if ( ! defined( 'WP_PLUGIN_URL' ) )
  define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
if ( ! defined( 'WP_PLUGIN_DIR' ) )
  define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
if ( ! defined( 'WP_ADMIN_URL' ) )
  define( 'WP_ADMIN_URL', get_option('siteurl') . '/wp-admin' );

include_once('YiidItAdminPages.php');

/**
 * YiidItWidget Widget-Class
 */
class YiidIt {
  /**
   * adds the code to the content
   *
   * @param string $content
   * @return string
   */
  function addToContent($content) {
    $widgetCode = YiidIt::generateLikeButton();
    $staticCode = YiidIt::generateStaticButton();

    if (get_option('yiidit_button_position') == "top") {
      $contentWithButton = $widgetCode.$content;
    } else {
      $contentWithButton = $content.$widgetCode;
    }

    // display static-button in feed
    if (is_feed()) {
      if (get_option('yiidit_static_feed_button') == "show") {
        return $content . $staticCode;
      } else {
        return $content;
      }
    }

    // where to show
    $whereToShow = get_option('yiidit_show_on');
    if ((is_archive() || is_home() || is_author()) == true && $whereToShow['overviews'] == "show")
      return $contentWithButton;
    elseif (is_single() == true && $whereToShow['posts'] == "show")
      return $contentWithButton;
    elseif (is_page() == true && $whereToShow['pages'] == "show")
      return $contentWithButton;
    else
      return $content;
  }

  /**
   * adds microids to header
   */
  function addToHeader() {
    global $wpdb;

    $emails = get_option('yiid_email_addresses');
    $emails = explode("\n",$emails);

    $blogurl = get_bloginfo('wpurl');
    $urlArray = parse_url($blogurl);
    $domain = $urlArray['scheme']."://".$urlArray['host'];

    $hash = YiidIt::generateMicroid("mailto:".get_bloginfo('admin_email '), $domain);
    echo '<meta name="microid" content="mailto+http:sha1:' . $hash . '" />'."\n";

    foreach ($emails as $email) {
      if ($email = trim($email)) {
        $hash = YiidIt::generateMicroid("mailto:".$email, $domain);
        echo '<meta name="microid" content="mailto+http:sha1:' . $hash . '" />'."\n";
      }
    }
  }

	/**
	 * generates the like button
	 *
	 * @return string
	 */
	function generateLikeButton() {
		$widgetCode = '<p style="clear: both;">
                   <iframe scrolling="no" frameborder="0" marginwidth="0" marginheight="0"
                           style="overflow: hidden; '.YiidIt::generateSize().'"
                           src="//button.spread.ly/?url='.urlencode(get_permalink()).'&title='.urlencode(strip_tags(html_entity_decode(get_the_title()))).'&tags='.YiidIt::getTags().YiidIt::getSocial().'"
                           allowtransparency="true">
                   </iframe>
                   </p>';

		return $widgetCode;
	}

  /**
   * generates the like button
   *
   * @return string
   */
  function generateStaticButton() {
    $widgetCode = '<p style="clear: both;">
                   <a href="http://spread.ly/?url='.urlencode(get_permalink()).'&title='.urlencode(strip_tags(html_entity_decode(get_the_title()))).'&tags='.YiidIt::getTags().YiidIt::getSocial().'" rel="like">
                     <img src="http://spread.ly/img/like-button.jpg" alt="Like" />
                   </a>
                   </p>';

    return $widgetCode;
  }

  /**
   * generate a tag string
   *
   * @return array
   */
  function getTags() {
    $posttags = get_the_tags();
    $tags = array();
    if ($posttags) {
      foreach($posttags as $tag) {
        $tags[] = urlencode($tag->name);
      }
    }

    foreach((get_the_category()) as $category) {
      $tags[] = urlencode($category->name);
    }

    return implode(",", $tags);
  }

  /**
   * returns button font color
   *
   * @author weyandch
   * @return string
   */
  function getSocial() {
    if (get_option('yiidit_button_social')) {
      return "&social=".get_option('yiidit_button_social');
    } else {
      return "&social=0";
    }
  }

  function generateSize() {
    if (get_option('yiidit_button_social')) {
      return "width: 420px; height: 60px;";
    } else {
      return "width: 420px; height: 24px;";
    }
  }

  function generateMicroid($firstUri, $secondUri) {
    $firstUriHash = sha1($firstUri);
    $secondUriHash = sha1($secondUri);

    return sha1($firstUriHash . $secondUriHash);
  }
}
?>