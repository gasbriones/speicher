<?php
include("lang/prepend.php");
$_SESSION['active'] = "prensa";
/*
Template Name: prensa
*/
?>

<?php get_header(); ?>
<body class="prensa">
<?php get_template_part('header-part') ?>
<?php get_template_part('mobile-menu') ?>
<div class="main wrapper">
    <section class="content clearfix">
        <article class="col col-left">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();  ?>
                    <?php
                    if($_SESSION["lang"] == "es"){
                        the_content();
                    }else{
                        the_field('eng_text_pages');
                    }
                    ?>

        </article>
        <div class="news col col-right">
            <div class="top clearfix">
                <div class="pic-one">
                    <figure>
                        <img src="<?php echo the_field('image_1') ?>">
                    </figure>
                </div>
                <div class="pic-two">
                    <figure>
                        <img src="<?php echo the_field('image_2') ?>">
                    </figure>
                </div>
            </div>
            <div class="bottom clearfix">
                <div class="pic-tree">
                    <figure>
                        <img src="<?php echo the_field('image_3') ?>">
                    </figure>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif;?>
    </section>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</body>
</html>