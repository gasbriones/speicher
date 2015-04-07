<footer id="footer" class="clearfix">
    <section class="wrapper">
        <h2 class="visuallyhidden">Pie de pagina</h2>
        <div class="logo-tn"></div>
        <div class="blog-tn"></div>
        <div class="more-links clearfix">
            <?php

                $more_links = getMoreLiks();

                foreach($more_links as $row ){
                    echo '<div class="block">';
                    echo '  <ul class="block-list">';
                    foreach($row['list'] as $links){
                        echo '<li>';
                        echo '<h3><a href="'.$links['href'].'">'.$links['title'].'</a></h3>';
                        echo '<p class="tag-line">'.$links['tag'].'</p>';
                        echo '</li>';
                    }
                    echo '  </ul>';
                    echo '</div>';
                }
            ?>
        </div>

    </section>
    <div class="legal">
        <?php $tn_url = 'http://tn.com.ar' ?>
        <p class="wrapper">
            Copyright 1996 - 2014 ARTEAR.
            <a href="mailto:info@tn.com.ar">Contacto</a>
            |
            <a href="<?php echo $tn_url ?>/terminos-y-condiciones">Términos y Condiciones</a>
            |
            <a href="<?php echo $tn_url ?>/proteccion-de-datos-personales">Protección de Datos Personales</a>
        </p>
        <p class="wrapper">
            <span class="label">Dirección:</span>
            Lima 1261 |
            <span class="label">Número de teléfono:</span>
            4999-0000 |
            <span class="label">Correo electrónico:</span>
            <a href="mailto:mensajes@tn.com.ar">mensajes@tn.com.ar</a>
            |
            <a title="Mediakit de productos" target="_blank" href="http://mediakit.cmd.com.ar">Mediakit de productos</a>
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript">

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4436008-40', 'auto');

    ga('send', 'pageview');

</script>
<script src="http://connect.facebook.net/es_LA/all.js#xfbml=1"></script>
<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1-10-2-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/libs/cookie.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/init.js"></script>
</body>
</html>

