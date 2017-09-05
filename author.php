<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>


<div class="wrapper" id="author-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

			<main class="site-main" id="main">

				<header class="page-header author-header">

					<?php
					$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug',
						$author_name ) : get_userdata( intval( $author ) );
					?>
					<?php $metaUser =  get_user_meta ( $curauth->ID );?>
					<!-- <?php print_r ($curauth );?> -->
					<div class="row">
						<div class="col-md-10">
							<h1><?php echo esc_html( $curauth->display_name ); ?></h1>							
						</div>					
						<div class="col-md-2 text-right">							
							<?php if ( ! empty( $curauth->ID ) ) : ?>						
								<?php echo get_avatar( $curauth->ID ); ?>																
						</div>
						<?php endif; ?>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h2> Centro de trabajo: <?php echo esc_html( $metaUser['c_adscripcion'][0] ); ?> </h2>
							<h2> Puesto: <?php echo esc_html( $metaUser['puesto'][0] ); ?> </h2>
							<h2> Correo Electrónico: <?php echo esc_html( $curauth->user_email ); ?> </h2>
						</div>
					</div>
					<?php /*
					<?php $video_url1 = get_field ( 'video_user', $curauth->ID) ?>
					<?php $video_url = wp_get_attachment_url( ($metaUser['video_user'][0])) ;?>
					<video src="<?php echo $video_url?>" autoplay controls controlsList="nodownload" ></video>
					*/?>
					<dl>
						<?php if ( ! empty( $curauth->user_url ) ) : ?>
							<dt><?php esc_html_e( 'Website', 'understrap' ); ?></dt>
							<dd>
								<a href="<?php echo esc_html( $curauth->user_url ); ?>"><?php echo esc_html( $curauth->user_url ); ?></a>
							</dd>
						<?php endif; ?>

						<?php if ( ! empty( $curauth->user_description ) ) : ?>
							<dt><?php esc_html_e( 'Profile', 'understrap' ); ?></dt>
							<dd><?php echo esc_html( $curauth->user_description ); ?></dd>
						<?php endif; ?>
						
					</dl>

					<!--<h2><?php esc_html_e( 'Posts by', 'understrap' ); ?> <?php echo esc_html( $curauth->nickname ); ?>
						:</h2>-->


				</header><!-- .page-header -->
				<!--
				<ul>

					
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<li>
								<a rel="bookmark" href="<?php the_permalink() ?>"
								   title="Permanent Link: <?php the_title(); ?>">
									<?php the_title(); ?></a>,
								<?php understrap_posted_on(); ?> <?php esc_html_e( 'in',
								'understrap' ); ?> <?php the_category( '&' ); ?>
							</li>
						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>

					

				</ul>
				-->
			</main><!-- #main -->

			<!-- The pagination component -->
			<!-- <?php understrap_pagination(); ?>-->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>

	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
