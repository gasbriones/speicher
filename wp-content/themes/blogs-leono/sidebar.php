<?php
require_once(dirname(__FILE__) . '/simplepie.inc');
$feed = new SimplePie();
$feed->set_cache_location(dirname(__FILE__) . '/cache');
$feed->set_feed_url('http://tn.com.ar/rss.xml');
$feed->init();
$feed->handle_content_type();
$profile_id = get_option('tn_blog_owner');

?>


<aside id="blog-sidebar" class="clearfix">
    <h2 class="visuallyhidden">Siderbar</h2>
    <section class="author-profile">
        <figure class="author-img">
            <?php echo get_avatar($profile_id,'130'); ?>
        </figure>
        <div class="author-content">
            <h2 class="author-name"> <?php the_author_meta('display_name',$profile_id);?> </h2>
        </div>
        <p class="author-description">
            <?php the_author_meta('description',$profile_id);?>
        </p>
    </section>
    <div class="fb-like-button">
        <iframe src="http://www.facebook.com/plugins/like.php?locale=es_ES&amp;href=<?php echo rawurlencode(bloginfo('url')); ?>&amp;layout=standard&amp;show_faces=false&amp;width=440&amp;action=recommend&amp;colorscheme=light&amp;height=30" class="facebook-share-button" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
    </div>
    <?php
    include_once( ABSPATH . 'wp-admin/includes/plugin.php');
    if (is_plugin_active('sidebar-form/sidebar-form.php')): ?>
    <section class="contact-form">
        <h3 class="category-title">Contactanos</h3>
        <?php echo do_shortcode('[SIDEBAR-FORM]'); ?>
    </section>
    <?php endif; ?>
    <section class="last-post">
        <h3 class="category-title">Últimos posts</h3>
        <ul class="clearfix">
            <?php
                $op = Array('numberposts' => 6,
                    'post_status' => 'publish',
                    'suppress_filters' => false,
                    'post__not_in' => array($post->ID)
                    );

                $recent_posts = wp_get_recent_posts($op);

                foreach( $recent_posts as $recent ){
                    echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                }
            ?>
        </ul>
    </section>

    <section class="category-list">
        <h2 class="category-title">Categorías</h2>
        <ul class="clearfix content">
            <?php wp_list_categories('title_li=&depth=1'); ?>
        </ul>
    </section>
    <section class="tag-cloud">
        <h2 class="category-title">Temas</h2>
        <div class="tag-content">
        	<h3><?php wp_tag_cloud("smallest=10&largest=30&separator=" . '</h3>  <h3>'); ?></h3>
        </div>
    </section>
    <section class="last-news">
        <h3 class="category-title">Lo último en TN</h3>
        <ul class="clearfix">
            <?php
                $firstClass = ' first';
                $num = 100;
                date_default_timezone_set('America/Argentina/Buenos_Aires');
                foreach ($feed->get_items() as $item):
            ?>
                <li class="cat-item">
                    <a title="<?php echo $item->get_title(); ?>" href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a>
                </li>
            <?php
                $firstClass = '';
                $num -= 5;
                if ($num < 75){ break; }
                endforeach;
            ?>
        </ul>
    </section>
    <section class="fb-activity clearfix">
        <h3 class="category-title">Comunidad TN</h3>
        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Ftodonoticias&amp;&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=false&amp;height=395" style="border:none; overflow:hidden;height:395px;" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
    </section>
</aside>