<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'menu-main' =>   ( 'Menu Main' ),
            'menu-main-big' =>   ( 'Menu Full' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
function arphabet_widgets_init() {
    register_sidebar(
        array(
            'name' => 'Calendar',
            'id' => 'sidebar1',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'post-thumbnails' );//Добавление изображения к записям
add_action( 'after_setup_theme', function() {
    add_theme_support( 'pageviews' );
});
add_filter('the_content', 'do_shortcode');//Добавление шорткода в контент
add_filter('widget_text', 'do_shortcode');//Добавление шорткода в виджеты
//define( 'WPCF7_UPLOADS_TMP_DIR', '/your/file/path' );
//Новые размер миниатюр
add_image_size( 'blog-thumb', 255, 188, array( 'center', 'top' ) );
add_image_size( 'product', 300, 300, array( 'center', 'top' ) );
add_image_size( 'rewiev', 160, 160, true );
add_image_size( 'same-post', 185, 185, true );



function wp_corenavi() {
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;
    // $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
    $a['mid_size'] = 1; //сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
    $a['prev_text'] = '<img src="http://localhost:8888/medusha/wp-content/themes/medusha/build/images/prev.svg" alt=""><span>Назад</span>'; //текст ссылки "Предыдущая страница"
    $a['next_text'] = '<span>Вперед</span><img src="http://localhost:8888/medusha/wp-content/themes/medusha/build/images/next.svg" alt=""> '; //текст ссылки "Следующая страница"

    if ($max > 1) echo '<div class="pagination">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">' . $current . '' . $max . '</span>'."\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';
}


// add_action( 'after_setup_theme', 'woocommerce_support' );
// function woocommerce_support() {
//     add_theme_support( 'woocommerce' );
// }


/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
    global $product;
      
      $args['posts_per_page'] = 6;
      return $args;
  }
  add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
    function jk_related_products_args( $args ) {
      $args['posts_per_page'] = 4; // 4 related products
    //   $args['columns'] = 2; // arranged in 2 columns
      return $args;
  }


  add_filter( 'woocommerce_currencies', 'add_my_currency' );
 
  function add_my_currency( $currencies ) {
   
       $currencies['UAH'] = __( 'Українська гривня', 'woocommerce' );
   
       return $currencies;
   
  }
   
//   add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
   
//   function add_my_currency_symbol( $currency_symbol, $currency ) {
   
//        switch( $currency ) {
   
//            case 'UAH': $currency_symbol = 'грн'; break;
   
//        }
   
//        return $currency_symbol;
   
//   }

 
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});