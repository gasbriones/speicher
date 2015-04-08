<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta charset="utf-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<title><?php bloginfo('name'); ?> </title>

<meta content="Arte pop, latinoamérica-Arte, pop, Argentina-Art pop, Argentina-Arte pop, Salta-Art pop, Salta-Pintura pop, Argentina-Pintura pop, Buenos Aires-Pintura pop, Salta-Cuadros pop, Argentina-Dibujos pop, Argentina-artista, plástico, Argentina-artista plástico, Buenos Aires-artista, plástico Salta-artista, visual, Argentina-artista visual, Buenos Aires-Artista visual, Salta-pop, drawing-pop, painting-Arte, contemporaneo, Argentina-Arte contemporaneo, Salta-Estilo, pop-Serie, Pop-Muestra, pop-Exposición, arte, pop-Mural, pop-Mural Buenos Aires-colores, saturados-dibujo, oriental-oriental, drawing-dibujo, zen-Dibujo, geisha-objetos, intervenidos, pop-Contraste-arte, mujer-arte, imagen mujer-arte, extravagante-arte, geisha">
<meta content="width=device-width,initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta content="<?php bloginfo( 'description'); ?>" name="description">
<meta name="og:type" content="website" />
<meta name="og:title" content="<?php bloginfo('name'); ?>" />
<meta name="og:description" content="<?php bloginfo( 'description'); ?>"/>
<meta name="og:url" content="<?php bloginfo('url'); ?>" />

<meta content="<?php bloginfo('name'); ?>" name="og:site_name">
<meta content="Buenos Aires" name="og:region">
<meta content="Argentina" name="og:country-name">

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php bloginfo('url'); ?>" />
<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
<meta name="twitter:description" content="<?php bloginfo( 'description'); ?>" />
<meta content="@franspeicher" name="twitter:site">
<meta content="@gasbriones" name="twitter:creator">

<link rel="shortcut icon" href="http://cdn.tn.com.ar/favicon.ico" type="image/x-icon" />
<link href="<?php bloginfo('template_url');?>/css/normalize.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url');?>/css/mediaqueries.css" rel="stylesheet" type="text/css" >


<?php
    /*
     * Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
</head>
<body>

<header>

</header>
