<?php
include("lang/prepend.php");
$_SESSION['active'] = "obras";

/*
Template Name: obras
*/

$args1 = array(
    'cat' => $_GET['cat'],
    'tag' => $_GET['tag'],
    'orderby' => 'ASC' // Sort by this meta ke
);

$query1 = new WP_Query($args1);
?>
<?php get_header(); ?>
<body class="obras">
<?php get_template_part('header-part') ?>
<?php get_template_part('mobile-menu') ?>
<div class="main wrapper">
    <section class="content">
        <div class="col col-left clearfix">
            <article class="clearfix">
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

            <div class="gallery-menu clearfix">
                <ul class="gallery-type">
                    <li><span class="<?php echo $active = $_GET["cat"]== '3' ? 'active' : ''; ?>">+ <?php echo OBRAS_PINTURAS;?></span>
                        <ul>
                            <?php
                            $tags = get_tags();
                            foreach ( $tags as $tag ):
                                $tag_link = get_tag_link( $tag->term_id );
                            ?>
                                <li class="<?php echo $active = $_GET["tag"]== $tag->name && $_GET["cat"]== '3' ? 'active' : ''; ?>">
                                    <a href="?page_id=18&cat=3&tag=<?php echo $tag->name ?>"><?php echo $tag->name ?></a>
                                </li>
                            <?php endforeach?>

                        </ul>
                    </li>
                    <li><span class="<?php echo $active = $_GET["cat"]== '7' ? 'active' : ''; ?>">+ <?php echo OBRAS_DIBUJOS;?></span>
                        <ul class="years">
                            <?php
                                $tags = get_tags();
                                foreach ( $tags as $tag ):
                                    $tag_link = get_tag_link( $tag->term_id );
                            ?>
                                <li class="<?php echo $active = $_GET["tag"]== $tag->name && $_GET["cat"]== '7' ? 'active' : ''; ?>">
                                    <a href="?page_id=18&cat=7&tag=<?php echo $tag->name ?>"><?php echo $tag->name ?></a>
                                </li>
                            <?php endforeach?>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="thumb-container clearfix">
                <ul class="thumb">
                    <?php
                    $i = 0;
                    if ($query1->have_posts()) :
                        while ($query1->have_posts()) : $query1->the_post();
                        ?>
                            <li><a data-slide-index="<?php echo $i;?>"><img src="<?php echo the_field('image') ?>" title="" width="74" height="74" /></a></li>
                        <?php $i++;endwhile; endif;
                    ?>
                </ul>
            </div>
        </div>
        <div class="col col-right">
            <ul class="slider">
                <?php
                if ($query1->have_posts()) :
                    while ($query1->have_posts()) : $query1->the_post(); ?>
                        <li><img src="<?php echo the_field('image') ?>" title="<?php global $more; $more = 1; $_SESSION["lang"] == "es" ? the_content() : the_field('eng_text_pages'); ?>" /></li>
                    <?php endwhile;
                else:
                    echo '<li class="emty">No se encontraron obras</li>';
                endif;?>

            </ul>
        </div>
    </section>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</body>
</html>