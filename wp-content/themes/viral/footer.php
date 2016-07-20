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

</div><!-- #page -->

<div  class="custom-footer-all">
<div  class="custom-footer vl-container">

<div class="">

<div class="footer-block block1"><?php dynamic_sidebar( 'Footer-block1' ); ?> </div>
<div class="footer-block block1"><?php dynamic_sidebar( 'Footer-block2' ); ?> </div>
<div class="footer-block block1 block3"><?php dynamic_sidebar( 'Footer-block3' ); ?> </div>

</div>



</div>
</div>
	<footer id="vl-colophon" class="site-footer">
		<div class="vl-container">
			<div class="site-info">
				&copy; 2015-2016 Shaadi-e-Khas. All Right Reserved.
				
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->

</body>
</html>
