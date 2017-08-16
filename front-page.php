<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Longevity
 */

get_header(); 
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>
<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<div class="container">
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-4">
            <div class="card panels amor-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title">Amor</h3>
                    <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card panels respeto-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title">Respeto</h3>
                    <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card panels benedicencia-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
                <div class="card-block">
                    <h3 class="card-title">Benedicencia</h3>
                    <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
                </div>
            </div>
        </div>        
    </div>
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-4">
            <div class="card panels honestidad-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
            <div class="card-block">
                <h3 class="card-title">Honestidad</h3>
                <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card panels responsabilidad-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
            <div class="card-block">
                <h3 class="card-title">Responsabilidad</h3>
                <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card panels generosidad-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
            <div class="card-block">
                <h3 class="card-title">Generosidad</h3>
                <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
            </div>
            </div>
        </div>        
    </div>
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-4">
            <div class="card panels union-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
            <div class="card-block">
                <h3 class="card-title">Unión</h3>
                <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card panels vive-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
            <div class="card-block">
                <h3 class="card-title">Vive los valores</h3>
                <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card panels noticias-panel">
                <img class="card-img-top" src="<?php echo get_theme_file_uri( '/img/alumnos.png' )?>" alt="Card image cap">
            <div class="card-block">
                <h3 class="card-title">Noticias</h3>
                <p class="card-text">Descripcion del valor.</p>
                    <a href="#" class="btn btn-primary">Vamos</a>
            </div>
            </div>
        </div>        
    </div>

<?php get_footer(); ?>
