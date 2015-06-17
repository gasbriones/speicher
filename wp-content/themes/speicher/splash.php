<?php
/*
Template Name: splash
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="Arte pop, latinoamérica-Arte, pop, Argentina-Art pop, Argentina-Arte pop, Salta-Art pop, Salta-Pintura pop, Argentina-Pintura pop, Buenos Aires-Pintura pop, Salta-Cuadros pop, Argentina-Dibujos pop, Argentina-artista, plástico, Argentina-artista plástico, Buenos Aires-artista, plástico Salta-artista, visual, Argentina-artista visual, Buenos Aires-Artista visual, Salta-pop, drawing-pop, painting-Arte, contemporaneo, Argentina-Arte contemporaneo, Salta-Estilo, pop-Serie, Pop-Muestra, pop-Exposición, arte, pop-Mural, pop-Mural Buenos Aires-colores, saturados-dibujo, oriental-oriental, drawing-dibujo, zen-Dibujo, geisha-objetos, intervenidos, pop-Contraste-arte, mujer-arte, imagen mujer-arte, extravagante-arte, geisha" name="keywords">
    <meta content="Descripcion" name="description">
    <!-- Facebook -->
    <meta name="og:type" content="website"/>
    <meta name="og:title" content="Francisco Speicher"/>
    <meta name="og:description" content="Descripcion"/>
    <meta name="og:url" content="url"/>
    <meta content="Francisco Speicher" name="og:site_name">
    <meta content="Buenos Aires" name="og:region">
    <meta content="Argentina" name="og:country-name">
    <!-- twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content="url"/>
    <meta name="twitter:title" content="Francisco Speicher"/>
    <meta name="twitter:description" content="Descripcion"/>
    <meta content="@franspeicher" name="twitter:site">
    <meta content="@gasbriones" name="twitter:creator">
    <!-- Links -->

    <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/splash.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/mediaqueries.css" rel="stylesheet" type="text/css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body class="splash">
<div class="main wrapper-splash clearfix">
    <section class="pictures clearfix">
        <ul class="pics">
            <li class="frames" id="frame-1"><img src="<?php echo get_template_directory_uri(); ?>/images/art-1.jpg"></li>
            <li class="frames" id="frame-2"><img src="<?php echo get_template_directory_uri(); ?>/images/art-2.jpg"></li>
            <li class="frames" id="frame-3"><img src="<?php echo get_template_directory_uri(); ?>/images/art-3.jpg"></li>
            <li class="frames" id="frame-4"><img src="<?php echo get_template_directory_uri(); ?>/images/art-4.jpg"></li>
            <li class="frames" id="frame-5"><img src="<?php echo get_template_directory_uri(); ?>/images/art-5.jpg"></li>
            <li class="frames" id="frame-6"><img src="<?php echo get_template_directory_uri(); ?>/images/art-6.jpg"></li>
            <li class="frames" id="frame-7"><img src="<?php echo get_template_directory_uri(); ?>/images/art-7.jpg"></li>
        </ul>
    </section>
    <section class="logo">
        <a href="?page_id=2&lang=es">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" />
        </a>
    </section>
    <section class="letters clearfix">
        <a href="?page_id=2&lang=es">
            <span class="name">Francisco</span>
            <span class="last-name">Speicher</span>
        </a>
    </section>
</div>
<footer class="footer clearfix">
    <ul class="social">
        <li>
            <a href="https://www.facebook.com/pages/FRANCISCO-SPEICHER-Artista-Plastico/110291662394677" target="_blank" class="fb"></a>
        </li>
        <li>
            <a href="https://twitter.com/franspeicher" class="tw" target="_blank"></a>
        </li>
        <li>
            <a href="https://instagram.com/speicherfrancisco" target="_blank" class="ins"></a>
        </li>
    </ul>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-2.1.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/splash.js"></script>
</body>
</html>