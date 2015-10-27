<?php

add_action( 'init', 'my_deregister_heartbeat', 1 );
function my_deregister_heartbeat() {
	global $pagenow;

	if ( 'post.php' != $pagenow && 'post-new.php' != $pagenow )
		wp_deregister_script('heartbeat');
}

show_admin_bar(false);


if (!is_page(54645654)) {

function curl_get($url) {
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	$return = curl_exec($curl);
	curl_close($curl);
	return $return;
}

function exclude_post_categories($excl=''){
   $categories = get_the_category($post->ID);
      if(!empty($categories)){
        $exclude=$excl;
        $exclude = explode(",", $exclude);
        $thecount = count(get_the_category()) - count($exclude);
        foreach ($categories as $cat) {
            $html = '';
            if(!in_array($cat->cat_ID, $exclude)) {
                $html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
                $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
            $thecount--;
            echo $html;
            }
          }
      }
}






function my_acf_result_query( $args, $field, $post )
{
    // eg from https://codex.wordpress.org/Class_Reference/WP_Query#Custom_Field_Parameters
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';
 
    return $args;
}

add_filter('acf/fields/relationship/query', 'my_acf_result_query', 10, 3);







function catch_video($ala) {
$content_post = get_post($ala);
$cntnt = $content_post->post_content;
$vimeoarray = array();
$youtubearray = array();
$galeria = get_field('galeria', $ala);
if(is_array($galeria)) {
	foreach($galeria as $gall) {
		$vv = $gall['vimeo']; $yy = $gall['youtube'];
		if( $vv != '') { $vimeoarray[] = $vv; }
		if( $yy != '') { $youtubearray[] = $yy; }
	}
$vmmm = $vimeoarray[0] . '[/vimeo]';
$ymmm = $youtubearray[0] . '[/youtube]';
$contento = $vmmm . $ymmm . $cntnt;
} else {
$contento = $cntnt;
}

$matches = array();
$output = preg_match_all('/(.youtube.com)|(.vimeo.com)|(\[youtube\])|(\[vimeo\])/', $contento, $matches);
if ($output >= '1' || $galeria) {
	$matchesyt = array();
	$youtube = preg_match_all('/([A-Za-z0-9_-])+(\[\/youtube\])/', $contento, $matchesyt);
	$matchesvi = array();
	$vimeo = preg_match_all('/([A-Za-z0-9_-])+(\[\/vimeo\])/', $contento, $matchesvi);
	if($youtube >= '1') {
		$yt = $matchesyt[0][0];
		$ytt = explode('[', $yt);
		$ytimg = 'http://img.youtube.com/vi/' . $ytt[0] . '/0.jpg';
		return $ytimg;
	} elseif($vimeo >= '1') {
		$vi = $matchesvi[0][0];
		$vii = explode('[', $vi);
$vixml = simplexml_load_string(curl_get('http://vimeo.com/api/v2/video/'.$vii[0].'.xml'));
//$vixml = simplexml_load_file('http://vimeo.com/api/v2/video/'.$vii[0].'.xml');
		$viimg = $vixml->video[0]->thumbnail_large;
		return $viimg;
	} else {
	//	return '1';
	}
}
}

function primera_imagen() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = '';
  }
  return $first_img;
}

function toda_imagen() {
  global $post, $posts;
  $toda_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $toda_img = $matches[1];

  if(empty($toda_img)) {
    $toda_img = '';
  }
  return $toda_img;
}


} // is_admin





if (!is_admin()) add_action( 'wp_enqueue_scripts', 'wpcandy_load_javascript_files', 0 );

function wpcandy_load_javascript_files() {

  wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', '', '', false );

   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);

  wp_register_script( 'jeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '', false );
  wp_register_script( 'picturefill', get_template_directory_uri() . '/js/picturefill.js', array('jquery'), '', false );
  wp_register_script( 'prefixfree', get_template_directory_uri() . '/js/prefixfree.min.js', array('jquery'), '', false );
  wp_register_script( 'prefixfree-jquery', get_template_directory_uri() . '/js/prefixfree.jquery.js', array('jquery'), '', false );
  wp_register_script( 'ioslinks', get_template_directory_uri() . '/js/ios.webapp.links.js', array('jquery'), '', false );
  wp_register_script( 'naver', get_template_directory_uri() . '/js/jquery.fs.naver.min.js', array('jquery'), '', false );
  wp_register_style( 'navercss', get_template_directory_uri() . '/js/jquery.fs.naver.css');
  wp_register_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky-kit.min.js', array('jquery'), '', false );

   wp_enqueue_script('modernizr');
   wp_enqueue_script('jquery');
  wp_enqueue_script( 'prefixfree' );
  wp_enqueue_script( 'prefixfree-jquery' );
  wp_enqueue_script( 'jeasing' );
  wp_enqueue_script( 'picturefill' );
  wp_enqueue_script( 'ioslinks' );
  wp_enqueue_script( 'naver' );
  wp_enqueue_style( 'navercss' );
  wp_enqueue_script( 'sticky' );

}


//define('WOOCOMMERCE_USE_CSS', true);
//add_theme_support( 'woocommerce' );


/**
 * Optimize WooCommerce Scripts
 * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
 */
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
 
function child_manage_woocommerce_styles() {
    //remove generator meta tag
    remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
 
    //first check that woo exists to prevent fatal errors
    if ( function_exists( 'is_woocommerce' ) ) {
        //dequeue scripts and styles
        if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
			wp_dequeue_style( 'woocommerce-layout' );
			wp_dequeue_style( 'woocommerce-smallscreen' );
			wp_dequeue_style( 'woocommerce-general' );
			wp_dequeue_style( 'wc-bto-styles' ); //Composites Styles
			wp_dequeue_script( 'wc-add-to-cart' );
			wp_dequeue_script( 'wc-cart-fragments' );
			wp_dequeue_script( 'woocommerce' );
			wp_dequeue_script( 'jquery-blockui' );
			wp_dequeue_script( 'jquery-placeholder' );
        }
    }
 
}
remove_action('wp_head', 'wc_generator_tag');


add_filter('excerpt_more','__return_false');


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('sub-menu',__( 'Sub Menu' ));
}
add_action( 'init', 'register_my_menu' );



function the_widgets_init() {

	register_sidebar( array(
		'name' => 'Widgets',
		'id' => 'widgets_1',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
	) );

	register_sidebar( array(
		'name' => 'Widgets 2',
		'id' => 'widgets_2',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
	) );
}
add_action( 'widgets_init', 'the_widgets_init' );




function featured_image_requirement() {
if( is_admin() ) {
    global $pagenow;
    if( 'edit.php' == $pagenow ) {
     if(!has_post_thumbnail()) {
          wp_die( 'Olvidaste subir una miniatura (imagen destacada) para tu post. Vuelve atrás y súbela.' ); 
     } 
}
}
}
//add_action( 'pre_post_update', 'featured_image_requirement' );




if ( ! function_exists( 'page_to_pag' ) && is_page('3444534534453') )
{
    register_activation_hook(   __FILE__ , 'pag_flush_rewrite_on_init' );
    register_deactivation_hook( __FILE__ , 'pag_flush_rewrite_on_init' );
    add_action( 'init', 'page_to_pag' );

    function page_to_pag()
    {
        $GLOBALS['wp_rewrite']->pagination_base = 'pag';
    }

    function pag_flush_rewrite_on_init()
    {
        add_action( 'init', 'flush_rewrite_rules', 11 );
    }
}






add_action('do_meta_boxes', 'wpse33063_move_meta_box');

function wpse33063_move_meta_box(){
    remove_meta_box( 'postimagediv', 'post', 'side' );
//    add_meta_box('postimagediv', __('Featured Image'), 'post_thumbnail_meta_box', 'post', 'normal', 'high');
}





?>