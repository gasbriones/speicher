<?php
/*
Template Name: Splash
*/
?>
<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="Arte pop, latinoamérica-Arte, pop, Argentina-Art pop, Argentina-Arte pop, Salta-Art pop, Salta-Pintura pop, Argentina-Pintura pop, Buenos Aires-Pintura pop, Salta-Cuadros pop, Argentina-Dibujos pop, Argentina-artista, plástico, Argentina-artista plástico, Buenos Aires-artista, plástico Salta-artista, visual, Argentina-artista visual, Buenos Aires-Artista visual, Salta-pop, drawing-pop, painting-Arte, contemporaneo, Argentina-Arte contemporaneo, Salta-Estilo, pop-Serie, Pop-Muestra, pop-Exposición, arte, pop-Mural, pop-Mural Buenos Aires-colores, saturados-dibujo, oriental-oriental, drawing-dibujo, zen-Dibujo, geisha-objetos, intervenidos, pop-Contraste-arte, mujer-arte, imagen mujer-arte, extravagante-arte, geisha" name="keywords">
    <meta content="width=device-width,initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="<?php bloginfo('description'); ?>" name="description">
    <!-- Facebook -->
    <meta name="og:type" content="website"/>
    <meta name="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta name="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta name="og:url" content="<?php bloginfo('url'); ?>"/>
    <meta content="<?php bloginfo('name'); ?>" name="og:site_name">
    <meta content="Buenos Aires" name="og:region">
    <meta content="Argentina" name="og:country-name">
    <!-- twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content="<?php bloginfo('url'); ?>"/>
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>"/>
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>"/>
    <meta content="@franspeicher" name="twitter:site">
    <meta content="@gasbriones" name="twitter:creator">
    <!-- Links -->
    <link rel="shortcut icon" href="http://cdn.tn.com.ar/favicon.ico" type="image/x-icon"/>
    <link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/css/animations.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/css/splash.css" rel="stylesheet" type="text/css">

    <title><?php bloginfo('name'); ?></title>
</head>
<body class="splash">
<div class="main wrapper">
    <section class="pictures clearfix">
        <ul class="pics">
            <li class="frames frame-1"><img src="<?php bloginfo('template_url'); ?>/images/art-1.jpg"></li>
            <li class="frames frame-2"><img src="<?php bloginfo('template_url'); ?>/images/art-2.jpg"></li>
            <li class="frames frame-3"><img src="<?php bloginfo('template_url'); ?>/images/art-3.jpg"></li>
            <li class="frames frame-4"><img src="<?php bloginfo('template_url'); ?>/images/art-4.jpg"></li>
            <li class="frames frame-4"><img src="<?php bloginfo('template_url'); ?>/images/art-5.jpg"></li>
            <li class="frames frame-6"><img src="<?php bloginfo('template_url'); ?>/images/art-6.jpg"></li>
            <li class="frames frame-7"><img src="<?php bloginfo('template_url'); ?>/images/art-7.jpg"></li>
        </ul>
    </section>
    <section class="logo clearfix">
        <a href="#">
            <span class="name">Francisco</span>
            <span class="last-name">Speicher</span>
        </a>
    </section>
</div>
<footer class="footer clearfix">
    <ul class="social">
        <li>
            <a href="#" class="fb"></a>
        </li>
        <li>
            <a href="#" class="tw"></a>
        </li>
        <li>
            <a href="#" class="ins"></a>
        </li>
    </ul>
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-2.1.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.parallax.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/splash.js"></script>
</body>
</html>