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
?><!DOCTYPE html>
<!--[if lt IE 8 ]> <html lang="es" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js ie oldie"> <![endif]-->
<!--[if IE 8 ]> <html lang="es" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js ie oldie ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="es" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" class="no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="es" class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta charset="utf-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<title><?php bloginfo('name'); ?> | Blogs | TN.com.ar | Todo Noticias</title>

<meta content="TN en vivo, Todo Noticias en vivo, TN, Todo Noticias, Ver TN en vivo, TN en HD" name="keywords">
<meta content="width=device-width,initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

<meta name="og:title" content="<?php bloginfo('name'); ?>" />
<?php if (is_single() || is_page()): ?>
    <meta name="og:type" content="article" />
    <meta name="og:description" content="<?php echo get_the_title();?>" />
    <meta name="og:url" content="<?php the_permalink(); ?>" />
<?php else: ?>
    <meta name="og:type" content="website" />
    <meta name="og:description" content="<?php bloginfo( 'description'); ?>" />
    <meta name="og:url" content="<?php bloginfo('url'); ?>" />
<?php endif;?>
<meta content="http://cdn.tn.com.ar/sites/all/themes/dientuki/images/logo-tn.png" name="og:image">
<meta content="<?php bloginfo('name'); ?>" name="og:site_name">
<meta content="Buenos Aires" name="og:region">
<meta content="Argentina" name="og:country-name">

<?php if (is_single() || is_page()): ?>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="<?php the_permalink(); ?>" />
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
    <meta name="twitter:description" content="<?php echo get_the_title();?>" />
<?php else: ?>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="<?php bloginfo('url'); ?>" />

    <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
    <meta name="twitter:description" content="<?php bloginfo( 'description'); ?>" />
<?php endif;?>
<meta content="http://cdn.tn.com.ar/sites/all/themes/dientuki/images/logo-tn.png" property="og:image">
<meta content="@todonoticias" name="twitter:site">
<meta content="@todonoticias" name="twitter:creator">

<link rel="shortcut icon" href="http://cdn.tn.com.ar/favicon.ico" type="image/x-icon" />
<link href="<?php bloginfo('template_url');?>/css/normalize.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
<?php $wp_upload_dir = wp_upload_dir();?>
<?php if (file_exists($wp_upload_dir['basedir'] . '/custom-options.css')): ?>
<link rel="stylesheet" href="<?php echo $wp_upload_dir['baseurl']; ?>/custom-options.css" type="text/css" />
<?php endif;?>
<link href="<?php bloginfo('template_url');?>/css/mediaqueries.css" rel="stylesheet" type="text/css" >

<!--[if lte IE 8]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?php bloginfo('template_url');?>/js/libs/respond-min.js"></script>
<![endif]-->

<?php
    /*
     * We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    /*
     * Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>

</head>
<body <?php body_class('default-theme'); ?>>

<?php $wp_upload_dir = wp_upload_dir();?>
<?php
    if (file_exists($wp_upload_dir['basedir'] . '/dax.php')){
        $dax = file_get_contents($wp_upload_dir['basedir'] . '/dax.php');
        echo stripslashes($dax);
    }
?>

<header>
    <div id="blog-header" class="clearfix">
        <div class="blog-gradient"></div>
        <div class="wrapper clearfix">
            <div class="header-content">
                <h2 class="blog-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
                <span class="blog-tagline"><?php bloginfo('description')?></span>
            </div>
            <ul class="clearfix social">
                <li>
                    <div class="shares touch-menu">
                        <span class="icon-share"></span>
                        <span class="text">Compartir</span>
                        <div class="share hide-menu">
                            <a href="https://twitter.com/intent/tweet?text=Estoy leyendo <?php bloginfo('name'); ?> &url=<?php bloginfo('url'); ?>&via=todonoticias" class="tw share-item" target="_new">
                                <div class="button">
                                    <span class="icon"></span>
                                    Twitter
                                </div>
                            </a>
                            <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>" class="fb share-item" target="_new">
                                <div class="button">
                                    <span class="icon"></span>
                                    Facebook
                                </div>
                            </a>
                            <a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" class="gp share-item" target="_new">
                                <div class="button">
                                    <span class="icon"></span>
                                    Google +
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="shares">
                        <?php
                            require_once(dirname(__FILE__) . '/simplepie.inc');
                            $feed = new SimplePie();
                            $feed->set_cache_location(dirname(__FILE__) . '/cache');
                            $feed->set_feed_url('http://tn.com.ar/rss.xml');
                            $feed->init();
                            $feed->handle_content_type();
                        ?>
                        <a class="icon-rss" href="<?php bloginfo('rss2_url'); ?>"></a>
                        <a class="text" href="<?php bloginfo('rss2_url'); ?>">RSS</a>
                    </div>
                </li>
                <li>
                    <form id="search_top_form" class="search" name="search_top_form" action="<?php bloginfo('home'); ?>">
                        <input type="text" name="s" placeholder="Buscar en este blog"/>
                        <button class="visuallyhidden" type="submit">Buscar</button>
                    </form>
                </li>

            </ul>
            <div class="blog-logo"></div>
        </div>
    </div>
    <div id="header" class="wrapper-sticky">
        <nav id="menu-sections">
            <h2 class="visuallyhidden">Barra de navegación</h2>
            <div class="wrapper">
                <ul id="sections-menu">
                    <li class="sticky-logo-tn">
                        <a class="logo-tn" href="/" title="Todo Noticias">Todo Noticias</a>
                    </li>
                    <li class="has-submenu touch-menu" data-name="null" id="sections-item">
                        <span class="title-item">Secciones</span>
                        <section class="sub-menu hide-menu">
                            <div class="menu-content wrapper">
                                <div class="block microsites">
                                    <h3>categorías</h3>

                                    <?php $tn_url = 'http://tn.com.ar' ?>

                                    <ul class="block-list">
                                        <li>
                                            <a href="<?php echo $tn_url ?>/todapasion" title="toda pasión">toda pasión</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/laviola" title="la viola">la viola</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/famosos" title="famosos">famosos</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tecno" title="tn tecno">tn tecno</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tnylagente" title="tn y la gente">tn y la gente</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/videos" title="tn videos">tn videos</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block">
                                    <h3>secciones</h3>
                                    <ul class="block-list">
                                        <li>
                                            <a href="<?php echo $tn_url ?>/politica">Política</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/policiales">Policiales</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/espectaculos">Espectáculos</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/internacional">Internacional</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/sociedad">Sociedad</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/secciones">más secciones</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block">
                                    <h3>servicios</h3>
                                    <ul class="block-list">
                                        <li>
                                            <a href="<?php echo $tn_url ?>/clima">clima</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/transito">transito</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/loterias">quinielas</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/deportes/resultados">resultados deportivos</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/cine">cartelera de cine</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/teatro">cartelera de teatro</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/feriados">feriados</a>
                                        </li>
                                        <li>
                                            <a href="http://interactivo.tn.com.ar/">tn interactivo</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block">
                                    <h3>programas</h3>
                                    <ul class="block-list">
                                        <li>
                                            <a href="<?php echo $tn_url ?>/programas/a-dos-voces">A dos voces</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/programas/agenda-nacional">Agenda Nacional</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/programas/argentina-para-armar">Argentina para armar</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/programas/codigo-politico">Código Polí­tico</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/programas/colectivo-imaginario">Colectivo Imaginario</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/programas/desde-el-llano">Desde el Llano</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/programas/208060">Diarios de motoneta</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/programas">más programas</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block no-right">
                                    <h3>temas</h3>
                                    <ul class="block-list">
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tags/libro-de-morrissey">libro de morrissey</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tags/instagram-de-zaira-nara">Instagram de Zaira Nara</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tags/zaira-nara-sin-maquillaje">Zaira Nara sin maquillaje</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tags/cirugias-de-las-famosas">cirugías de las famosas</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tags/fotos-de-lara-flynn-boyle">fotos de Lara Flynn Boyle</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tags/cirugias-cirugia">cirugías  cirugia</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tags/medida-gremial">medida  gremial</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $tn_url ?>/tags">más temas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </li>
                    <li class="alive">
                        <a class="title-item" href="<?php echo $tn_url ?>/envivo/24hs">En vivo</a>
                    </li>
                    <li class="social-menu-item">
                        <ul class="social-menu">
                            <li class="social-item right-border">
                                <a class="weather-icons title-item" href="<?php echo $tn_url ?>/clima" id="time-item" title="Clima">
                                    <img alt="Clima" src="<?php bloginfo('template_url');?>/images/weather.png" title="Clima" width="47">
                                    <span class="wheather-content">Clima</span>
                                </a>
                            </li>
                            <li class="social-item has-border" id="traffic-item">
                                <a class="title-item" href="<?php echo $tn_url ?>/transito" title="Tránsito"><span class="icon"></span>Transito
                                </a>
                            </li>
                            <li class="social-item has-border has-submenu touch-menu" data-name="null" id="search-item">
                                <a class="title-item" href="#" title="Buscar en TN"><span class="icon"></span>Buscar</a>
                                <section class="sub-menu hide-menu">
                                    <div class="menu-content wrapper">
                                        <form action="/buscar" method="post">
                                            <input class="input-text" maxlength="100" name="keys" placeholder="Buscar" required="required" type="input">
                                            <input class="submit button red" type="submit" value="Buscar">
                                        </form>
                                    </div>
                                </section>
                            </li>
                            <li class="social-item left-border" id="user-item">
                                <a class="title-item" data-url="ajax/user_image" href="http://tn.com.ar/user" id="user-image" title="Conectate a TN y la Gente">
                                    <img alt="usuario" class="small-avatar" src="<?php bloginfo('template_url');?>/images/usertnylgt.png">
                                    Usuario
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
