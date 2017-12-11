<?php
/**
 * The template used for displaying page content in page.php
 *
 * Please browse readme.txt for credits and forking information
 * @package noteblog
 */
	function noteblog_featured_image_disaplay(){
		if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) {  // check if the post has a Post Thumbnail assigned to it. 
			echo '<div class="featured-image">';
			the_post_thumbnail('noteblog-full-width');
			echo '</div>';
		} 
	}
	?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-content'); ?>>

	<?php noteblog_featured_image_disaplay(); ?>

	<header class="entry-header">
		<span class="screen-reader-text"><?php the_title();?></span>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta"></div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'noteblog' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

