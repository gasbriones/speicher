<?php
/*
Template Name: splash
*/
?>
<!DOCTYPE html>
<?php include 'layout/head.php' ?>
<body class="splash">
<div class="main wrapper-splash">
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
        <a href="home.php">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" />
        </a>
    </section>
    <section class="letters clearfix">
        <a href="?page_id=9">
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