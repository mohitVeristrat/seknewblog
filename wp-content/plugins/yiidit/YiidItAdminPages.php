<?php
// register
if (isset($wp_version)) {
  // admin panel
  add_action('admin_menu', array('YiidItAdminPages', 'addMenuItem'));
  add_filter('plugin_action_links', array('YiidItAdminPages', 'addSettingsLink'), 10, 2);
}

/**
 * yiid admin panels
 *
 * @author Matthias Pfefferle
 */
class YiidItAdminPages {
  /**
   * adds the yiid.it-items to the admin-menu
   */
  function addMenuItem() {
    add_options_page('Spread.ly', 'Spread.ly', 10, 'spreadly', array('YiidItAdminPages', 'showSettings'));
  }

  /**
   * add a settings link next to deactive / edit
   *
   * @author Matthias Pfefferle
   * @param array $links
   * @param string $file
   * @return array
   */
  function addSettingsLink( $links, $file ) {
    if( preg_match("/spreadly/i", $file) && function_exists( "admin_url" ) ) {
      $settings_link = '<a href="' . admin_url( 'options-general.php?page=spreadly' ) . '">' . __('Settings') . '</a>';
      array_unshift( $links, $settings_link );
    }
    return $links;
  }

  /**
   * displays the yiid.it settings page
   */
  function showSettings() {
    // check form posts and save updates
    if (isset($_POST['submit'])) {
      update_option('yiid_email_addresses', $_POST['yiid_email_addresses']);

      $array = array("pages" => "hide", "posts" => "hide", "overviews" => "hide");
      if ($_POST['yiidit_show_on']) {
        foreach ($_POST['yiidit_show_on'] as $key => $value) {
          $array[$key] = $value;
        }
      }

      update_option('yiidit_show_on', $array);

      // social button
      if (isset($_POST['yiidit_button_social'])) {
        update_option('yiidit_button_social', $_POST['yiidit_button_social']);
      }
      // feed button
      if (isset($_POST['yiidit_static_feed_button'])) {
        update_option('yiidit_static_feed_button', "show");
      } else {
        update_option('yiidit_static_feed_button', "hide");
      }
      // vidibility
      if (isset($_POST['yiidit_button_position'])) {
        update_option('yiidit_button_position', $_POST['yiidit_button_position']);
      }
    }
?>
    <style type="text/css">
      .postbox .inside {
        margin: 10px;
      }
    </style>
    <div class="wrap metabox-holder">
      <img src="<?php echo WP_PLUGIN_URL ?>/yiidit/logo_32x32.png" alt="Spread.ly" class="icon32" />

      <h2><?php _e('Spread.ly Settings', 'spreadly') ?></h2>

      <p>Check out the social media reach of your blog at <a href="http://spreadly.com" target="_blank">spreadly.com</a></p>

      <div class="postbox">
        <h3 class="hndle"><span><?php echo __('Support us'); ?></span></h3>
        <div class="inside">
          <p><?php echo _e("If you enjoy our service don't hestiate to spread the word"); ?></p>
          <iframe src="http://button.spread.ly/?url=http%3A%2F%2Fwordpress.org%2Fextend%2Fplugins%2Fyiidit%2F&title=yiidit+plugin+for+wordpress" style="overflow:hidden;
                width: 350px; height: 30px;" frameborder="0" scrolling="no" marginheight="0" allowTransparency="true"></iframe>
        </div>
      </div>
      <form action="<?php echo WP_ADMIN_URL; ?>/options-general.php?page=spreadly" method="post">

        <div class="postbox">
          <h3 class="hndle"><span><?php echo __('General Settings'); ?></span></h3>
          <div class="inside">
            Show social-connections:

            <select id="yiidit_button_social" name="yiidit_button_social">
              <option value="1" <?php if (get_option('yiidit_button_social') == '1') { echo 'selected="selected"'; } ?>>on</option>
              <option value="0" <?php if (get_option('yiidit_button_social') == '0') { echo 'selected="selected"'; } ?>>off</option>
            </select>
          </div>
        </div>

        <div class="postbox">
          <h3 class="hndle"><span><?php echo __('Where to display'); ?></span></h3>
          <div class="inside">
            Show

            <select id="yiidit_button_position" name="yiidit_button_position">
              <option value="bottom" <?php if (get_option('yiidit_button_position') == "bottom") { echo 'selected="selected"'; } ?>>after post/page</option>
              <option value="top" <?php if (get_option('yiidit_button_position') == "top") { echo 'selected="selected"'; } ?>>before page/post</option>
            </select>
          </div>

          <?php $whereToShow = get_option('yiidit_show_on'); ?>

          <div class="inside">
            Show on pages: <input type="checkbox" name="yiidit_show_on[pages]" value="show" <?php if ($whereToShow['pages'] == "show") { echo 'checked="checked"'; } ?>>
          </div>
          <div class="inside">
            Show on single posts: <input type="checkbox" name="yiidit_show_on[posts]" value="show" <?php if ($whereToShow['posts'] == "show") { echo 'checked="checked"'; } ?>>
          </div>
          <div class="inside">
            Show on overview pages (home, archives, author, ...): <input type="checkbox" name="yiidit_show_on[overviews]" value="show" <?php if ($whereToShow['overviews'] == "show") { echo 'checked="checked"'; } ?>>
          </div>
          <div class="inside">
            Use static buttons in feeds: <input type="checkbox" name="yiidit_static_feed_button" value="show" <?php if (get_option('yiidit_static_feed_button') == "show") { echo 'checked="checked"'; } ?>>
          </div>
        </div>

        <div class="postbox">
          <h3 class="hndle"><span><?php echo __('Claim your Blog'); ?></span></h3>
          <div class="inside">
            <p>To claim your blog for the Spread.ly-Stats, add the mail addresses you used to signup to Spread.ly (one per line).</p>
            <textarea rows="5" cols="50" name="yiid_email_addresses"><?php echo get_option('yiid_email_addresses'); ?></textarea>
            <p>More informations about Spread.ly, visit: <a href="http://spreadly.com" target="_blank">spreadly.com</a></p>
          </div>
        </div>

        <input type="submit" name="submit" value="save changes">
      </form>
    </div>
<?php
  }
}
?>