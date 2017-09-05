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
		<div class="row"><div class="col-md-5"></div>
		<div class="col-md-2">
		 <div class="text-center title-color-post-<?php echo $terms[0]->name;?>"><h5><?php echo $terms[0]->name;?></h5></div>
		 </div><div class="col-md-5"></div>
		</div>
	 </header><!-- .entry-header -->

		<?php if ( 'reconocimiento' == get_post_type() ) : ?>
			<div class="entry-meta">
				<!-- <?php understrap_posted_on(); ?> -->
			</div><!-- .entry-meta -->
			<div class="entry-content">
			<div class="row">
				<div class="col-md-2">
					<div><?php echo "<img src=\"".get_avatar_url( get_the_author_meta('id') )."\" class=\"rounded\">";?></div>
					<div class="text-left text-nowrap"><span><?php print ("<a href=\"/author/".get_the_author_meta('nickname')."\">".get_the_author_meta('nickname')."</a>" );?></span></div>
				</div>
				<div class="col-md-8">
					<?php
					the_excerpt();
					?>
				</div>
				<div class="col-md-2">
					<?php $destinatario = get_userdata( $meta['reconocimiento_usuario'][0] );?>
					<?php echo "<img src=\"".get_avatar_url( $meta['reconocimiento_usuario'][0] )."\" class=\"rounded \">";?>
					<div class="text-left text-nowrap"><span><?php print ("<a href=\"/author/".$destinatario->user_login."\">".$destinatario->user_login."</a>" );?></span></div>					
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
