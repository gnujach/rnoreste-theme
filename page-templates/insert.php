<?php
/**
 * Template Name: Insertar post
 *
 * Template for insert post from front-end
 *
 * @package understrap
 */
 get_header();
$container = get_theme_mod( 'understrap_container_type' );
if (isset( $_POST[‘cpt_nonce_field’] ) && wp_verify_nonce( $_POST[‘cpt_nonce_field’], ‘cpt_nonce_action’ ) )
if ( isset( $_POST['submitted'] ) ) {
    $post_information = array(
        'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
        'post_excerpt' => $_POST['postContent'],
        // 'post_content'  => $_POST['postContent'],
        'post_type' => 'reconocimiento',
        'post_status' => 'publish'
    );
    $pid = wp_insert_post( $post_information, true );
    add_post_meta($pid, 'reconocimiento_usuario', 1, true);
}
?>
<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
            <form action="" id="primaryPostForm" method="POST">
                <div class="form-group">
                    <label for="postTitle"><?php _e('Compañero:', 'framework') ?></label>
                    <input type="text"  class="form-control" name="postTitle" id="postTitle" required />
                    <small id="postTitleHelp" class="form-text text-muted">El nombre del compañero a reconocer</small>
                </div>
                <div class="form-group">                    
                    <label for="postContent"><?php _e('Motivo del reconocimiento:', 'framework') ?></label>                                
                    <textarea class="form-control" name="postContent" id="postContent"></textarea>
                    <small id="postTitleHelp" class="form-text text-muted">No mayor a 140 caracteres.</small>
                </div>
                <div class="form-group">
                    <input type="hidden" name="submitted" id="submitted" value="true" />
                <div class="form-group">
                <?php wp_nonce_field( ‘cpt_nonce_action’, ‘cpt_nonce_field’ ); ?>
                    <button type="submit"><?php _e('Add Post', 'framework') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>