<?php
// loading styles and scripts
function load_style_script(){
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700', array(), null);
    wp_enqueue_style('font-awesome.min', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');
	wp_enqueue_style('font-awesome-5', '//use.fontawesome.com/releases/v5.0.6/css/all.css', array(), '5.0.6');
	wp_enqueue_style('swiper.min', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css', array(), '4.1.6');
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css', array(), null );
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), null );
    wp_enqueue_style('style', get_stylesheet_uri(), array(), null );

//    wp_enqueue_script('modernizr.min', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3', false );
    wp_enqueue_script('smooth-scroll.min', get_template_directory_uri() . '/js/smooth-scroll.min.js', array(), '10.2.0', true );
    wp_enqueue_script('swiper.min', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js', array(), '4.1.6', true );
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );
}
add_action('wp_enqueue_scripts', 'load_style_script');


// loading styles and scripts for admin panel
function load_admin_style_script(){
    wp_enqueue_style('custom-wp-admin-style', get_template_directory_uri() . '/css/custom-wp-admin-style.css', array('acf-input') );
    wp_enqueue_script('custom-wp-admin-script', get_template_directory_uri() . '/js/custom-wp-admin-script.js', array('jquery'), null, true );
}
add_action('admin_enqueue_scripts', 'load_admin_style_script');


// add ie conditional html5 shiv to header
function add_ie_html5_shiv () {
    global $is_IE;
    if ($is_IE) {
        echo '<!--[if lt IE 9]>';
        echo '<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>';
        echo '<![endif]-->';
    }
}
add_action('wp_head', 'add_ie_html5_shiv');


// logo at the entrance to the admin panel
function my_custom_login_logo(){
    echo '<style type="text/css">
    h1 a {height:61px !important; width:244px !important; background-size:contain !important; background-image:url('.get_bloginfo("template_url").'/img/logo@2x.png) !important;}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');

add_filter( 'login_headerurl', create_function('', 'return get_home_url();') );
add_filter( 'login_headertitle', create_function('', 'return false;') );


// когда введены неправильный логин или пароль, никакой информации, объясняющей ситуацию, не появится!
add_filter('login_errors',create_function('$a', "return null;"));


// delete unnecessary items in wp_head
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );


// удаление оборачиваемого тега <p> из картинок в контенте
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


// automatic generation of the tag <title>
add_theme_support( 'title-tag' );
// adding html5 markup
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// support custom logo
add_theme_support( 'custom-logo', array(
    'flex-height' => true,
    'flex-width'  => true
) );
add_theme_support( 'custom-logo' );


// support thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}


// support menus
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(array(
        'main-menu'     => 'Main Menu',
        'footer-menu'   => 'Footer Menu'
    ));
}


// for excerpts
function new_excerpt_more( $more ) {
    return '&nbsp;&hellip;';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function new_excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');


// register widget panels
function register_my_widgets(){
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'class'         => 'sidebar',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => "</section>\n",
        'before_title'  => '<h4>',
        'after_title'   => "</h4>\n",
    ) );
}
add_action( 'widgets_init', 'register_my_widgets' );


// pagination function
function my_pagenavi() {
    global $wp_query;

    $big = 999999999;

    $args = array(
        'base'          => str_replace( $big, '%#%', get_pagenum_link( $big ) )
        ,'format'       => '?paged=%#%'
        ,'current'      => max( 1, get_query_var('paged') )
        ,'total'        => $wp_query->max_num_pages
        ,'end_size'     => 0
        ,'mid_size'     => 2
        ,'type'         => 'list'
        ,'prev_text'    => '<'
        ,'next_text'    => '>'
    );

    $result = paginate_links( $args );
    $result = str_replace( '/page/1/', '', $result );

    echo $result;
}


/* Хак на перезапись параметра guid при публикации или обновлении поста в админке (записывается пермалинк в текущей структуре)
--------------------------------------------------------------------------------------------------------------------------------- */
function guid_write( $id ){
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение

    global $wpdb;

    if( $id = (int) $id )
        $wpdb->query("UPDATE $wpdb->posts SET guid='". get_permalink($id) ."' WHERE ID=$id LIMIT 1");
}
add_action ('save_post', 'guid_write', 100);



// neighbor posts
function neighbor_posts($post_id) {
    global $wpdb;

    // Нам нужна категория поста. Если у поста несколько категорий, будет взята первая
    $category = get_the_category($post_id);
    $cat_id = $category[0]->cat_ID;

    // Узнаём сколько записей добавлено до
    $all_left_num = $wpdb->get_var("select count($wpdb->posts.ID) from $wpdb->posts join $wpdb->term_relationships on  " .
                           "($wpdb->term_relationships.object_id = $wpdb->posts.ID) where ($wpdb->posts.ID < $post_id) " .
                           "and ($wpdb->term_relationships.term_taxonomy_id = $cat_id) and ($wpdb->posts.post_status='publish')");
    // А сколько после
    $all_right_num = $wpdb->get_var("select count($wpdb->posts.ID) from $wpdb->posts join $wpdb->term_relationships on  " .
                           "($wpdb->term_relationships.object_id = $wpdb->posts.ID) where ($wpdb->posts.ID > $post_id) " .
                           "and ($wpdb->term_relationships.term_taxonomy_id = $cat_id) and($wpdb->posts.post_status='publish')");

    $num_left = 1;
    $num_right = 2; // Нам нужно по две записи с каждой стороны от нашей

    if ($all_left_num < 1) // Если слева нет 1 записи, компенсируем правыми
        $num_right += (1 - $all_left_num);
    if ($all_right_num < 2) // Если справа нет 2 записей, компенсируем левыми
        $num_left += (2 - $all_right_num);

    // Теперь можно запросить сами записи. Для левых (предыдущих) задаём сортировку по ID по убыванию
    // Таким образом гарантируем, что это будут именно ближайшие записи
    $left = $wpdb->get_results("select $wpdb->posts.* from $wpdb->posts join $wpdb->term_relationships on  " .
                           "($wpdb->term_relationships.object_id = $wpdb->posts.ID) where ($wpdb->posts.ID < $post_id) " .
                           "and ($wpdb->term_relationships.term_taxonomy_id = $cat_id) and ($wpdb->posts.post_status='publish') " .
                           "order by $wpdb->posts.ID desc limit $num_left");

    // Для правых сортировку можно было не задавать, но так, по образу и подобию
    $right = $wpdb->get_results("select $wpdb->posts.* from $wpdb->posts join $wpdb->term_relationships on  " .
                           "($wpdb->term_relationships.object_id = $wpdb->posts.ID) where ($wpdb->posts.ID > $post_id) " .
                           "and ($wpdb->term_relationships.term_taxonomy_id = $cat_id) and($wpdb->posts.post_status='publish') " .
                           "order by $wpdb->posts.ID asc limit $num_right");
    // здесь будут все посты, заголовки которых нам надо отобразить
    $posts = array ();

    // Левые отсортированы по убыванию, поэтому добавляем каждый следующий в начало $posts
    // Таким образом в $posts они будут отсортированы по возрастанию
    foreach ($right as $post)
        array_unshift($posts, $post);

    $posts[] = get_post($post_id);

    foreach ($left as $post)
        $posts[] = $post;

    // Выводим ссылки на всю эту фигню
    echo "<ul class='portfolio-list'>";
    foreach ($posts as $post) {
        if ($post->ID != $post_id) {
            $p_thumb = get_post_meta($post->ID, 'wpcf-proj-thumb', true);
            $p_title = get_post_meta($post->ID, 'wpcf-proj-title', true);
            $title = $post->post_title;
            echo "<li>";
            echo "<a href='". get_permalink($post->ID) ."'>";
            if ($p_thumb) { echo "<img src='$p_thumb' width='194' height='152' alt='$p_title' title='$title' >"; };
            echo "<div class='mask'><h4>$p_title</h4></div>";
            echo "</a>";
            echo "</li>";
        } else {
            // echo $post->post_title;
        };
    }
    echo "</ul>";
}


// Запрещаем доступ к редактору файлов по прямой ссылке wp-admin/theme-editor.php:
function disable_editing_theme() {
    if (stripos($_SERVER['PHP_SELF'], '/wp-admin/theme-editor.php')) :
        wp_redirect(admin_url());
        exit;
    endif;
}
add_action('admin_init', 'disable_editing_theme', 999);

// Удаляем пункт меню Редактор из меню админки:
function remove_theme_editor_page() {
    remove_submenu_page('themes.php', 'theme-editor.php');
}
add_action('admin_menu', 'remove_theme_editor_page', 999);


// for Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Theme Options');
}
//if (function_exists('acf_set_options_page_menu') && empty($GLOBALS['admin_page_hooks']['acf-options-theme-options']) ){
//	acf_set_options_page_menu('Theme Options');
//}

