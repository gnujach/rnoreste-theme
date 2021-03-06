<?php
/**
 * Single post partial template.
 * Template Name: Full Width Page
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php
		if ( has_post_thumbnail() ) {
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );	
			?>
			<img src="<?php echo $large_image_url[0]?>" class="img-fluid mx-auto mx-auto d-block img-thumbnail">
		<?php }?>
		<div></div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<!-- <span> <?php echo wp_strip_all_tags( get_the_excerpt(), true );?></span> -->
		<p><?php $meta = get_post_custom( $item->ID );
		?></p>
		<div class="entry-meta">

			<!-- <?php understrap_posted_on(); ?> -->

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<!-- <?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' =>  'img-fluid')); ?> -->
	

	<div class="entry-content">
		
		<?php the_content(); ?>

		<?php
		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	<?php understrap_posted_on(); ?> 
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<!-- <?php understrap_entry_footer(); ?> -->

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
