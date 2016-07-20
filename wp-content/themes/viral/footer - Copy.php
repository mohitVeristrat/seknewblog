<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Viral
 */

?>

	</div><!-- #content -->

	<footer id="vl-colophon" class="site-footer">
		<div class="vl-container">
			<div class="site-info">
				WordPress Theme
				<span class="sep"> | </span>
				<?php echo sprintf( __('Viral by <a href="%s">Hash Themes</a>', 'viral' ), 'http://hashthemes.com'); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
