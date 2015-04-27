<?php
include("lang/prepend.php");
$_SESSION['active'] = "resena";
/*
Template Name: resena
*/
?>

<?php get_header(); ?>
<body class="resena">
<?php get_template_part('header-part') ?>
<?php get_template_part('mobile-menu') ?>
<div class="main wrapper">
    <section class="content">
        <article>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();  ?>
                    <?php
                        if($_SESSION["lang"] == "es"){
                            the_content();
                        }else{
                            the_field('eng_text_pages');
                        }
                    ?>
                <?php endwhile; ?>
            <?php endif;?>
        </article>
    </section>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</body>
</html>