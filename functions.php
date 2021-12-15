<?php 

add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

function btax1_title_tag() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_image_size('index-thumb', 360, 230, true);
  add_image_size('post-thumb', 751, 400, true);
}

add_action('after_setup_theme', 'btax1_title_tag');

if (!function_exists('wp_render_title_tag')){
    function btax1_render_title() {
        ?>
        <title><?php wp_title('-', true, 'right'); ?></title>
        <?php
    }

add_action('wp_head', 'btax1_render_title');

}

register_nav_menus( array(
    'menu-principal' => __('Menu Principal', 'ab'),
    'menu-produtos' => __('Menu Produtos', 'ab'),
    'menu-footer-1' => __('Menu Footer 1', 'ab'),
    'menu-footer-2' => __('Menu Footer 2', 'ab'),
    'menu-footer-3' => __('Menu Footer 3', 'ab'),
    'menu-paginas' => __('Menu Páginas', 'ab')
));

function tn_custom_excerpt_length( $length ) {
	return 25 ;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

function pagination() {

	global $wp_query;
	
	if ( $wp_query->max_num_pages <= 1 ) return; 
	
	$big = 999999999; // need an unlikely integer
	
	$pages = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type'  => 'array',
		) );
		if( is_array( $pages ) ) {
			$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
			echo '<div class="pagination-wrap"><ul class="pagination">';
			foreach ( $pages as $page ) {
					echo "<li class='pagination-item'>$page</li>";
			}
		   echo '</ul></div>';
			}
}

function search_url_rewrite_rule() {
	if ( is_search() && !empty($_GET['s'])) {
		wp_redirect(home_url("/search/") . urlencode(get_query_var('s')));
		exit();
	}	
}
add_action('template_redirect', 'search_url_rewrite_rule');

function excerpt_readmore($more) {
	return '...';
  }
add_filter('excerpt_more', 'excerpt_readmore');

function wpshout_theme_script_and_style_includer( ) {
  wp_enqueue_style( 
    'bootstrap.min',
    get_theme_file_uri( '/assets/css/bootstrap.min.css' )
    );
  wp_enqueue_style( 
    'preloader',
    get_theme_file_uri( '/assets/css/preloader.css' )
  );
	wp_enqueue_style( 
		'main',
		get_theme_file_uri( '/assets/css/main.css' )
    );
	wp_enqueue_style( 
		'responsive',
		get_theme_file_uri( '/assets/css/responsive.css' )
	);

  wp_enqueue_script(
		'jquery-slim.min',
		get_template_directory_uri() . '/assets/js/jquery-slim.min.js', array(), false, true );
    
  wp_enqueue_script(
    'popper.min',
    get_template_directory_uri() . '/assets/js/popper.min.js', array(), false, true );    

  wp_enqueue_script(
    'bootstrap.min',
    get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true );    

    wp_enqueue_script(
      'modernizr',
      get_template_directory_uri() . '/assets/js/modernizr.js', array(), false, true );    

    wp_enqueue_script(
      'custom',
      get_template_directory_uri() . '/assets/js/custom.js', array(), false, true );    
}
add_action( 'wp_enqueue_scripts', 'wpshout_theme_script_and_style_includer' );

add_filter( 'nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1 );
add_filter( 'page_css_class', 'wp_nav_menu_attributes_filter', 100, 1 );
add_action( 'init', 'wp_nav_menu_attributes_filter' );
function wp_nav_menu_attributes_filter( $var ) {
    return is_array( $var ) ? array_intersect( $var, array( 'current-menu-item' ) ) : '';
}

add_filter( 'nav_menu_link_attributes', 'add_class_anchor_nav_primary', 10, 3 );
function add_class_anchor_nav_primary( $atts, $item, $args ) {
    if ( (int) $item->menu_item_parent === 0 ) {
        $class         = 'nav-link';
        $atts['class'] = $class;
    }
    return $atts;
}

add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4 );

function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-item';
  return $classes;
}


function unregister_default_widgets(){
  unregister_widget('WP_Widget_Pages');
  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Archives');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Search');
  unregister_widget('WP_Widget_Categories');
  unregister_widget('WP_Widget_Recent_Posts');
  unregister_widget('WP_Widget_Recent_Comments');
  unregister_widget('WP_Widget_RSS');
  unregister_widget('WP_Widget_Text');
  unregister_widget('WP_Widget_Tag_Cloud');
  unregister_widget('WP_Widget_Custom_HTML');
  unregister_widget('WP_Widget_Media_Video');
  unregister_widget('WP_Widget_Media_Image');
  unregister_widget('WP_Widget_Media_Audio');
  unregister_widget('WP_Widget_Media_Gallery');
  unregister_widget('WP_Nav_Menu_Widget');
}

add_action( 'widgets_init', 'unregister_default_widgets' );

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_action( 'wp_enqueue_scripts', 'bs_dequeue_dashicons' );
function bs_dequeue_dashicons() {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}

function get_the_post_thumbnail_src($img)
{
  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function sharing_post($content) {
    global $post;
    if(is_single()){
    
        $sb_url = urlencode(get_permalink());
        $sb_title = str_replace( ' ', '%20', get_the_title());
        $sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());
 
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;
        $whatsappURL = 'https://api.whatsapp.com/send?text='.$sb_title.' - '.$sb_url.'';
 
        $content .= '<div class="share">';
        $content .= '<hr>';
        $content .= '<h5 class="pull-left flip">Compartilhe:</h5>';
        $content .= '<ul class="styled-icons icon-circled icon-sm">';

        $content .= '<li><a href="'.$facebookURL.'" target="_new" alt="Compartilhar no Facebook"><i class="fa fa-facebook"></i></a></li>';
        $content .= '<li><a href="'. $linkedInURL .'" target="_new" alt="Compartilhar no Facebook"><i class="fa fa-linkedin"></i></a></li>';
        $content .= '<li><a href="'. $whatsappURL .'" target="_new" alt="Compartilhar no Facebook"><i class="fa fa-whatsapp"></i></a></li>';
		    $content .= '</ul>';
		    $content .= '</div>';
        
        return $content;
    }else{
        return $content;
    }
};

add_filter( 'the_content', 'sharing_post');
//add_shortcode('social','sharing_post');

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_single() || is_tag()) && 'post' == get_post_type();
}

function custom_pre_get_posts($query)
{
   if ($query->is_main_query() && !$query->is_feed() && !is_admin() && is_category()) {
    $query->set('page_val', get_query_var('paged'));
    $query->set('paged', 0);
   }
}

add_action('pre_get_posts', 'custom_pre_get_posts');

function max_title_length( $title ) {
  $max = 30;
  if( strlen( $title ) > $max ) {
  return substr( $title, 0, $max ). "&hellip;";
  } else {
  return $title;
  }
  }
  
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown" /',$menu);    
    return $menu;          
}

add_filter('wp_nav_menu','new_submenu_class'); 

function new_submenu_class2($menu) {    
  $menu = preg_replace('/ class="current-menu-item"/','/ class="current-menu-item active" /',$menu);    
  return $menu;          
}

add_filter('wp_nav_menu','new_submenu_class2'); 

function custom_search_form( $form, $value = "Search", $post_type = 'post' ) {
  $form_value = (isset($value)) ? $value : attribute_escape(apply_filters('the_search_query', get_search_query()));
  $form = '<form method="get" id="searchform" action="' . get_option('home') . '/" >
  <div>
      <input type="hidden" name="post_type" value="'.$post_type.'" />
      <input type="text" value="' . $form_value . '" name="s" id="s" />
      <input type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" />
  </div>
  </form>';
  return $form;
}

function remove_editor() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if ($post_id == '7' || $post_id == '76' || $post_id == '78' || $post_id == '80' || $post_id == '97'){
      remove_post_type_support('page', 'editor');
  }
  
}
add_action('admin_init','remove_editor');

function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

?>