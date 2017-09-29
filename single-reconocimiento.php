<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
if (! is_user_logged_in() ) {
?>
<div class= "alert alert-danger" role="alert" style="margin-top: 20px">
    <h2> <strong>Acceso permitido solo a usuarios autentificados</strong> </h2>
</div>
<?php
} else {?>
<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		 <div class="row">			 
			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

			<main class="site-main" id="main">
				<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php $meta = get_post_custom( get_the_ID() );
					$user_info = get_userdata( $meta['reconocimiento_usuario'][0] );
					$user_name = $user_info->first_name. ' '.$user_info->last_name;;
				?>

					<div class="row">
						<div class="col-md-1">
						<!-- <?php the_author_ID()?> -->
							<?php// echo get_avatar( 1 )?>
							<?php echo "<img src=\"".get_avatar_url( get_the_author_meta('id') )."\" class=\"img-responsive img-circle\">";?>
						</div>
						<div class="col-md-10 bgreconocimiento">
							<?php $terms = get_the_terms( get_the_ID(), 'valores' )?>							
							<h3><?php echo $terms[0]->name;?></h3>
							<h1><?php echo $user_name?></h1>
							<h2><?php the_content();?></h2>
							<div class="foter"></div>
						</div>
						<div class="col-md-1">
							<?php echo "<img src=\"".get_avatar_url( $meta['reconocimiento_usuario'][0] )."\" class=\"img-responsive img-circle\">";?>
						</div>
						<?php understrap_post_nav(); ?>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php if(function_exists('wp_ulike')) wp_ulike('get');?>
						</div>
					</div>
						
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
					?>

				<?php endwhile; // end of the loop. ?>
			</div>
			</main><!-- #main -->
		
		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php //get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->
<?php } ?>
<?php get_footer(); ?>
