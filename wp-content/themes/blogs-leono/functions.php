<?php
/**
 * Created by PhpStorm.
 * User: gaston briones
 * Date: 1/8/14
 * Time: 4:47 PM
 */

function is_blog($blog){
    $thisBlog = $blogname;
    if ($blog == $thisBlog) {
        return true;
    } else {
        return false;
    }
}

function custom_excerpt($id){
    $text = wp_strip_all_tags(get_post_field('post_content', $id));
    $text = wp_trim_words($text, $num_words = 55, $more = null);
    return esc_attr($text);
}

function getMoreLiks(){

    $data = array(
        array('list' =>
            array(
                //array('title' => 'Pocas Pulgas','tag' => 'Un blog de Mascotas', 'href' => 'http://blogs.tn.com.ar/mascotas/' ),
                array('title' => 'El Ojo Arbitrario', 'tag' => 'Por Mario Mactas', 'href' => 'http://blogs.tn.com.ar/mariomactas/'),
                array('title' => 'Tod@s', 'tag' => 'Gays, bisexuales y trans', 'href' => 'http://blogs.tn.com.ar/todxs/'),
                //array('title' => 'Conste en Actas','tag' => 'Por Ricardo Canaletti', 'href' => 'http://blogs.tn.com.ar/ricardocanaletti/'),
                //array('title' => 'El Desagradable','tag' => 'Un blog de Humor', 'href' => 'http://blogs.tn.com.ar/eldesagradable/')
                //array('title' => 'Viaje a las Estrellas','tag' => 'Por Catalina Dlugi', 'href' => 'http://blogs.tn.com.ar/show/'),
                array('title' => 'Periplos', 'tag' => 'Un blog de Viajes', 'href' => 'http://blogs.tn.com.ar/viajes/'),

            )
        ),
        array('list' =>
            array(
                array('title' => 'Saborama', 'tag' => 'Un blog de Gastronomía', 'href' => 'http://blogs.tn.com.ar/gastronomia/'),
                //array('title' => 'El Rincón de Parnaso','tag' => 'Un blog de Cultura' ,'href' => 'http://blogs.tn.com.ar/cultura/'),
                array('title' => 'Todos Nerds', 'tag' => 'El blog de los geeks', 'href' => 'http://blogs.tn.com.ar/nerds/'),
                array('title' => 'Todos Nerds', 'tag' => 'El blog de los geeks', 'href' => 'http://blogs.tn.com.ar/nerds/'),

            )
        ),
        array('list' =>
            array(
                array('title' => 'Saborama', 'tag' => 'Un blog de Gastronomía', 'href' => 'http://blogs.tn.com.ar/gastronomia/'),
                //array('title' => 'El Rincón de Parnaso','tag' => 'Un blog de Cultura' ,'href' => 'http://blogs.tn.com.ar/cultura/'),
                array('title' => 'Todos Nerds', 'tag' => 'El blog de los geeks', 'href' => 'http://blogs.tn.com.ar/nerds/'),
                array('title' => 'Creer o reventar', 'tag' => 'Un blog paranormal', 'href' => 'http://blogs.tn.com.ar/creeroreventar/'),

            )
        ),
        array('list' => array(
            array('title' => 'Videos de Risa', 'tag' => 'Un blog para ver y reir', 'href' => 'http://blogs.tn.com.ar/videosderisa/'),
            //array('title' => 'Cientificos Trabajando','tag' => 'Un blog de ciencia', 'href' => 'http://blogs.tn.com.ar/cientificos/'),
            array('title' => 'El desmitificador', 'tag' => 'Bajo la lupa de la ciencia', 'href' => 'http://blogs.tn.com.ar/desmitificador/'),
            //array('title' => 'Homo Post Gutenberg','tag' => 'Un blog de cultura digital', 'href' => 'http://blogs.tn.com.ar/culturadigital/')
            array('title' => 'Varieté', 'tag' => 'Todas las tradiciones', 'href' => 'http://blogs.tn.com.ar/variete/'),
            //array('title' => 'Pope Francis','tag' => 'News of the Pope', 'href' => 'http://blogs.tn.com.ar/pope-francis/'),
            //array('title' => 'Dev','tag' => 'Ideas y experiencias digitales de TN', 'href' => 'http://blogs.tn.com.ar/dev/')
        )
        ),
        array('list' => array(
            array('title' => 'Dev', 'tag' => 'Ideas y experiencias digitales de TN', 'href' => 'http://blogs.tn.com.ar/dev/')
        )
        )
    );
    return $data;
}

add_filter('next_posts_link_attributes', 'next_arrow');
add_filter('previous_posts_link_attributes', 'prev_arrow');

function next_arrow(){
    return 'class="btn arrow-right"';
}

function prev_arrow(){
    return 'class="btn arrow-left"';
}

add_action('admin_menu', 'custom_colors');

function custom_colors(){
    //add_submenu_page( 'themes.php', 'Custom Colores', 'Custom Colores', 'manage_options', 'http://localhost/blogs/wp-content/themes/blogs-leono/admin/custom-color.php' );
    require(dirname(__FILE__) . '/admin/custom-color.php');
    $slug = 'custom-color';
    add_theme_page('Custom Colors', 'Custom Colors', 'manage_options', $slug, 'custom_color');
    add_action('admin_print_styles-appearance_page_' . $slug, 'blogs_leono_admin_enqueue_scripts');
}

add_action('admin_menu', 'custom_headers');

function custom_headers(){
    //add_submenu_page( 'themes.php', 'Custom Colores', 'Custom Colores', 'manage_options', 'http://localhost/blogs/wp-content/themes/blogs-leono/admin/custom-color.php' );
    require(dirname(__FILE__) . '/admin/custom-header.php');
    $slug = 'custom-header';
    add_theme_page('Custom Header', 'Custom Header', 'manage_options', $slug, 'custom_header');
    add_action('admin_print_styles-appearance_page_' . $slug, 'blogs_leono_admin_enqueue_scripts');
}


add_action('admin_menu', 'dax_metrixs');

function dax_metrixs(){
    //add_submenu_page( 'themes.php', 'Custom Colores', 'Custom Colores', 'manage_options', 'http://localhost/blogs/wp-content/themes/blogs-leono/admin/custom-color.php' );
    require(dirname(__FILE__) . '/admin/dax-metrix.php');
    $slug = 'dax-metrix';
    add_theme_page('Dax Metrix', 'Dax Metrix', 'manage_options', $slug, 'dax_metrix');
    add_action('admin_print_styles-appearance_page_' . $slug, 'blogs_leono_admin_enqueue_scripts');
}

add_action('admin_menu', 'developer_tools');

function developer_tools(){
    //add_submenu_page( 'themes.php', 'Custom Colores', 'Custom Colores', 'manage_options', 'http://localhost/blogs/wp-content/themes/blogs-leono/admin/custom-color.php' );
    require(dirname(__FILE__) . '/admin/dev-tools.php');
    $slug = 'developer-tools';
    add_theme_page('Developer Tools', 'Developer Tools', 'manage_options', $slug, 'developer_tool');
    add_action('admin_print_styles-appearance_page_' . $slug, 'blogs_leono_admin_enqueue_scripts');
}

function blogs_leono_admin_enqueue_scripts($hook_suffix){
    wp_enqueue_style('blogs-leono-theme-options', get_template_directory_uri() . '/admin/theme-options.css', false);
}

function make_custom_file($settings){
    $css = file_get_contents('admin/custom-options.css', true);

    //Colors
    foreach ($settings['uses'] as $use => $color) {
        $css = str_replace('$' . $use, $settings['colors'][$color], $css);
    }

    //$pattern = bloginfo('template_url') /admin/images/pattern-sample-<?php echo $i;
    //Pattern
    if ($settings['header-pattern'] != null) {
        $url = "url('" . get_template_directory_uri() . '/images/pattern-' . $settings['header-pattern'] . ".svg');";

        switch ($settings['header-pattern']) {
            case 3:
                $css = $css . "#blog-header{background-image: " . $url . "; background-position: left top; background-repeat: no-repeat;}";
                break;
            default:
                $css = $css . "#blog-header{background-image: " . $url . "}";
        }


        //Avatar BG
        if ($settings['use-pattern-avatar'] == true) {
            switch ($settings['header-pattern']) {
                case 3:
                    $css = $css . "#blog-sidebar .author-profile{background-image: " . $url . "; background-position: left top; background-repeat: no-repeat;}";
                    break;
                default:
                    $css = $css . "#blog-sidebar .author-profile{background-image: " . $url . "}";
            }
        }
    }

    switch ($settings['header-gradient']) {
        case 0:
            $css = $css . '.blog-gradient {background: rgba(0,0,0,.5); background: -moz-linear-gradient(top, rgba(0,0,0,.5) 0%, transparent 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,.5)), color-stop(100%,transparent)); background: -webkit-linear-gradient(top, rgba(0,0,0,.5) 0%,transparent 100%); background: -o-linear-gradient(top, rgba(0,0,0,.5) 0%,transparent 100%); background: -ms-linear-gradient(top, rgba(0,0,0,.5) 0%,transparent 100%); background: linear-gradient(top, rgba(0,0,0,.5) 0%, transparent 100%); }';
            break;
        case 1:
            $css = $css . '.blog-gradient {background: rgba(0,0,0,.5); background: -moz-linear-gradient(right, rgba(0,0,0,.5) 0%, transparent 100%); background: -webkit-gradient(linear, right top, right top, color-stop(0%,rgba(0,0,0,.5)), color-stop(100%,transparent)); background: -webkit-linear-gradient(right, rgba(0,0,0,.5) 0%,transparent 100%); background: -o-linear-gradient(right, rgba(0,0,0,.5) 0%,transparent 100%); background: -ms-linear-gradient(right, rgba(0,0,0,.5) 0%,transparent 100%); background: linear-gradient(right, rgba(0,0,0,.5) 0%, transparent 100%); }';
            break;
        case 2:
            //no!!!
            break;
    }

    //Header Image
    if ($settings['header-image'] != null) {
        $css = $css . "#blog-header .blog-logo{background-image: url('" . $settings['header-image'] . "');}";
    }

    $wp_upload_dir = wp_upload_dir();
    file_put_contents($wp_upload_dir['basedir'] . '/custom-options.css', $css);
}

function make_dax_file($settings){
    $wp_upload_dir = wp_upload_dir();
    file_put_contents($wp_upload_dir['basedir'] . '/dax.php', $settings);
}

function get_dax_file(){
    $wp_upload_dir = wp_upload_dir();
    return file_get_contents($wp_upload_dir['basedir'] . '/dax.php', true);
}


/**
 * Provides activation/deactivation hook for wordpress theme.
 *
 * Usage:
 * ----------------------------------------------
 * Include this file before this line.
 * ----------------------------------------------
 * function my_theme_activate() {
 *    // code to execute on theme activation
 * }
 * wp_register_theme_activation_hook('mytheme', 'my_theme_activate');
 *
 * function my_theme_deactivate() {
 *    // code to execute on theme deactivation
 * }
 * wp_register_theme_deactivation_hook('mytheme', 'my_theme_deactivate');
 * ----------------------------------------------
 *
 * @author Krishna Kant Sharma (http://www.krishnakantsharma.com)
 */

/**
 *
 * @desc registers a theme activation hook
 * @param string $code : Code of the theme. This can be the base folder of your theme. Eg if your theme is in folder 'mytheme' then code will be 'mytheme'
 * @param callback $function : Function to call when theme gets activated.
 */
function wp_register_theme_activation_hook($code, $function){
    $optionKey = "theme_is_activated_" . $code;
    if (!get_option($optionKey)) {
        call_user_func($function);
        update_option($optionKey, 1);
    }
}

/**
 * @desc registers deactivation hook
 * @param string $code : Code of the theme. This must match the value you provided in wp_register_theme_activation_hook function as $code
 * @param callback $function : Function to call when theme gets deactivated.
 */
function wp_register_theme_deactivation_hook($code, $function){
    // store function in code specific global
    $GLOBALS["wp_register_theme_deactivation_hook_function" . $code] = $function;

    // create a runtime function which will delete the option set while activation of this theme and will call deactivation function provided in $function
    $fn = create_function('$theme', ' call_user_func($GLOBALS["wp_register_theme_deactivation_hook_function' . $code . '"]); delete_option("theme_is_activated_' . $code . '");');

    // add above created function to switch_theme action hook. This hook gets called when admin changes the theme.
    // Due to wordpress core implementation this hook can only be received by currently active theme (which is going to be deactivated as admin has chosen another one.
    // Your theme can perceive this hook as a deactivation hook.)
    add_action("switch_theme", $fn);
}

function blogs_leono_custom(){
    return array(
        'colors' => array('#CC3399', '#FF7087', '#FFE336', '#E34A66', '#FFF'),
        'uses' => array(
            'header-border-bottom' => 1, //done
            'header-background-color' => 0, //done
            'blog-tagline' => 2, //done
            'entry-title' => 0, //done
            'post-icon-tag' => 1, //done
            'pager-background-normal' => 1, //done
            'pager-background-hover' => 3, //done
            'pager-color' => 2, //done
            'author-profile-background' => 1, //done
            'author-profile-color' => 4, //done
            'author-img-border' => 2, //done
            'widget-category-background' => 0, //done
            'widget-category-disc' => 2, //done
            'widget-tagcloud-background' => 1,
            'widget-tagcloud-color' => 0, //done
            'error-404-background' => 1, //done
            'error-404-icon' => 2 //done
        ),
        'header-pattern' => 1,
        'header-gradient' => 0,
        'use-pattern-avatar' => true,
        'header-image' => null
    );
}

function blogs_leono_activate() {
    // code to execute on theme activation
    add_option('blogs_leono_custom', blogs_leono_custom());
}

wp_register_theme_activation_hook('mytheme', 'blogs_leono_activate');

function blogs_leono_deactivate(){
    // code to execute on theme deactivation
    delete_option('blogs_leono_custom');
}

wp_register_theme_deactivation_hook('mytheme', 'blogs_leono_deactivate');

function add_my_media_button(){
    echo '<a href="#" id="insert-my-media" class="button" onclick="open_media_window();"><span class="dashicons dashicons-video-alt2"></span>Subir Video</a>';
}

add_action('media_buttons', 'add_my_media_button', 15);

function include_media_button_js_file(){
    wp_enqueue_script('media_button', get_template_directory_uri() . '/js/media_button.js', true);
}

add_action('wp_enqueue_media', 'include_media_button_js_file');