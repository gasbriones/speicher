<section id="blog-main" class="clearfix">
    <h2 class="visuallyhidden">Contenido principal</h2>

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post();  ?>

            <article class="hnews clearfix wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 ><a class="entry-title" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

            <footer class="footer-flow">
                <div class="author vcard">Por <span class="fn"><?php the_author() ?></span></div>
                <time class="published" datetime="<?php echo the_time('c'); ?>"><?php echo the_time('j \d\e F \d\e Y'); ?> <span><?php the_time() ?></span></time>
            </footer>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <?php if(get_the_tag_list()): ?>
                <div class="tags clearfix">
                    <i class="icon-tags"></i>
                    <?php
                        echo get_the_tag_list('<h2>',', ','</h2>');
                    ?>
                </div>
            <?php endif;?>

            <div class="share clearfix">
                <div class="social">
                    <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title());?>&url=<?php echo get_permalink();?>&via=todonoticias" target="_new" class="share-item icon tw"></a>
                    <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>" target="_new" class="share-item icon fb"></a>
                    <a href="https://plus.google.com/share?url=<?php echo get_permalink();?>" target="_new" class="share-item icon gp"></a>
                </div>
            </div>
            <div class="comments">
                <?php comments_template(); ?>
            </div>
        </article>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="neg-search wrapper">
            <h1>Resultado de búsqueda</h1>
            <p>No se encontaron coincidencias. Intentá nuevamente</p>
        </div>
    <?php endif;?>

    <footer class="pager wrapper clearfix wrapper">
        <?php previous_posts_link( 'Anterior' ); ?>
         <?php next_posts_link( 'Siguiente' ); ?>
    </footer>
</section>