<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Viral
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="vl-post-wrapper">
		<?php if(has_post_thumbnail()): ?>
		<figure class="entry-figure">
			<?php 
			$viral_image = wp_get_attachment_image_src( get_post_thumbnail_id() , 'viral-blog-header' );
			?>
			<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($viral_image[0]); ?>" alt="<?php echo esc_attr( get_the_title() ) ?>"></a>
		</figure>
		<?php endif; ?>
		<header class="entry-header">
		
		
		<?php if ( 'post' == get_post_type() ) : ?>
	<div class="entry-meta vl-post-info">
		<?php viral_posted_on(); ?>
	</div><!-- .entry-meta -->
	<?php endif; ?>
	
	
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-categories">
			<i class="fa fa-bookmark"></i> <?php echo viral_entry_category(); ?>
		</div>
		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'viral' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'viral' ),
					'after'  => '</div>',
				) );
			?>
		<?php viral_entry_footer(); ?>
                </div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
