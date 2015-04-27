<?php
include("lang/prepend.php");
$_SESSION['active'] = "contacto";
/*
Template Name: contacto
*/
?>

<?php get_header(); ?>
<body class="contacto">
<?php get_template_part('header-part') ?>
<?php get_template_part('mobile-menu') ?>
<div class="main wrapper">
    <section class="content clearfix">
        <article>
            <div class="contact-main">
                <h4><?php echo CONTACTO_TITULO;?></h4>
                <div>
                    E-mail:<br/> <a href="mailto:franciscospeicher@hotmail.com">franciscospeicher@hotmail.com</a>
                </div>
                <ul class="social-micro">
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

                <form class="contact-form" id="contact-form">
                    <h4><?php echo CONTACTO_FORMULARIO;?></h4>
                    <label><?php echo CONTACTO_NOMBRE;?>:</label>
                    <input type="text" name="nombre" />
                    <label><?php echo CONTACTO_APELLIDO;?>:</label>
                    <input type="text" name="apellido" />
                    <label>E-mail:</label>
                    <input type="text"  name="email"/>
                    <input type="submit" value="<?php echo CONTACTO_ENVIAR;?>" />
                </form>
            </div>

        </article>
    </section>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</body>
</html>