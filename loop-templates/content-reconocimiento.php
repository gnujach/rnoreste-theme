<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php $terms = get_the_terms( get_the_ID(), "valores" );?>
	<?php $meta = get_post_custom( get_the_ID() );?>
	<header class="entry-header">
		 <div class="text-center title-color-post"><h4><?php echo $terms[0]->name;?></h4></div>
	 </header><!-- .entry-header -->

		<?php if ( 'reconocimiento' == get_post_type() ) : ?>
			<div class="entry-meta">
				<!-- <?php understrap_posted_on(); ?> -->
			</div><!-- .entry-meta -->
			<div class="entry-content">
			<div class="row">
				<div class="col-md-1">
					<?php echo "<img src=\"".get_avatar_url( get_the_author_meta('id') )."\" class=\"rounded float-left\">";?>
				</div>
				<div class="col-md-10">
					<?php
					the_excerpt();
						// the_content();
					?>
				</div>
				<div class="col-md-1">
					<?php echo "<img src=\"".get_avatar_url( $meta['reconocimiento_usuario'][0] )."\" class=\"rounded float-right\">";?>
				</div>
			</div>
			</div><!-- .entry-content -->
		<?php endif; ?>

	
	<!-- <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>-->

	
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	

	<footer class="entry-footer">

		<!-- <?php understrap_entry_footer(); ?> -->
		<div class="text-right" <?php understrap_posted_on(); ?></div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
