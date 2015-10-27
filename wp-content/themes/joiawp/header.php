<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?> class="loading loading-dom">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?> class="loading loading-dom">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?> class="loading loading-dom">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="loading loading-dom">
<!--<![endif]-->
<head>

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php

	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=<?php echo rand(1, 99); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!-- Imágenes para iOS -->
	<link href="<?php bloginfo('template_url'); ?>/images/apple/icon.png" sizes="57x57" rel="apple-touch-icon" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/icon-72.png" sizes="72x72" rel="apple-touch-icon" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/icon-76.png" sizes="76x76" rel="apple-touch-icon" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/icon@2x.png" sizes="114x114" rel="apple-touch-icon" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/icon-120.png" sizes="120x120" rel="apple-touch-icon" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/icon-72@2x.png" sizes="144x144" rel="apple-touch-icon" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/icon-76@2x.png" sizes="152x152" rel="apple-touch-icon" />

	<link href="<?php bloginfo('template_url'); ?>/images/apple/touch-startup-image-320x480.png" sizes="320x480" media="(device-width: 320px)" rel="apple-touch-startup-image" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/touch-startup-image-640x960.png" sizes="640x960" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/touch-startup-image-640x1136.png" sizes="640x1136" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/touch-startup-image-768x1024.png" sizes="768x1024" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/touch-startup-image-1536x2048.png" sizes="1536x2048" media="(device-width: 768px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/touch-startup-image-1024x768.png" sizes="1024x768" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image" />
	<link href="<?php bloginfo('template_url'); ?>/images/apple/touch-startup-image-2048x1536.png" sizes="2048x1536" media="(device-width: 768px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

<!-- iOS webapp -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>" />
	<meta name = "viewport" content = "width = device-width, initial-scale=1, user-scalable = no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
    <style>html { -webkit-text-size-adjust: 100%; }</style>
	<meta name="format-detection" content="telephone=no" />

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />

<!-- NO BORRAR -->
<?php require_once (TEMPLATEPATH .'/js/mobile_detect.php');
$detect = new Mobile_Detect;
wp_head(); ?>

<script type="text/javascript">

function resizable() {

$w = $(window).width();
$mh = $('#main_header').outerHeight() + $('#statusbar').outerHeight();
//$mh = $('#main_header').outerHeight();
$fh = $('.al_filler').outerHeight();
//$mmh = $('#main_nav').parent().parent().parent().parent().outerHeight();
$mmh = $('#menu-header-menu').outerHeight();
setTimeout(function() {
$senh = $('#galeria').outerHeight();
console.log($senh);
if($senh != '0px') {
//$('#galeria .galeria_item, #galeria .galeria_item > .in, #galeria .galeria_item > .in > .inn').css('height', $senh);
}
}, 300);
if($w > 1000) {
<?php if(is_single()) { ?>
$('.latest_filler').css('height', '0');
<?php } ?>
$('#faux_header').outerHeight($mh-1);
$('#menu_holder').css({'top':$mh, 'height':'auto'});
$('#splashbanner').css('margin-top','20px');
$('#menu_holder').stick_in_parent({
parent: 'body',
offset_top: $mh-2
});
} else {
$('#splashbanner').css('margin-top','0');
$('#faux_header').outerHeight($mh+$mmh-1);
//$('#faux_header').outerHeight('54px');
$('#menu_holder').css({'top':'auto', 'height':'0'});
//$("#menu_holder").trigger("sticky_kit:detach");
<?php if(is_single()) { ?>
$('.latest_filler').css('height', $fh);
<?php } ?>
}

//$('.galeria_item > .in > .inn > *').css('height', $('.galeria_item > .in > .inn').css('padding-bottom'));

}

$(document).ready(function(){

$('.popular-posts li .wpp-category').text($('.popular-posts li .wpp-category').text().replace('bajo ', ''));

$('#tumblr a').attr('href', 'http://joiamagazine.tumblr.com');

$blurl = '<?php bloginfo("url"); ?>';
$('a:not([href]), a[href^="'+$blurl+'"], a[href^="mailto"]').addClass('internal');
$('a[href$="jpg"], a[href$="jpeg"], a[href$="gif"], a[href$="png"]').removeClass('internal');
$('a:not(.internal)').addClass('external');
$('#suscripciones a').removeClass('external');
$('a.external').attr('target', '_blank');

// si tienen, le quitamos la altura y ancho a todas las imágenes del sitio para "responsivizar".
$('img').removeAttr('height width');

if(navigator.userAgent.match(/(iPad|iPhone|iPod touch);.*CPU.*OS 7_\d/i) && window.navigator.standalone) {
	$('body').addClass('ios7');
}

$("#main_nav").naver({
    animated: true,
	labelClosed: 'Categor&iacute;as',
	labelOpen: 'Categor&iacute;as&nbsp;&nbsp;&uarr;'
});

$("#menu-header-menu").naver({
    animated: true,
	labelClosed: 'Men&uacute;',
	labelOpen: 'Men&uacute;&nbsp;&nbsp;&uarr;'
});

$('.category-joiafan .post header a, .category-joiafan .post figure a').removeAttr('href');

$('#imagen_cabecera').prev('.separator').remove();

$('.veropinion').click(function() {
$(this).toggleClass('open');
$('#opinion').toggleClass('open');
});

$('#content p:not(.clear)').filter(function() {
    return $(this).html() === "&nbsp;";
}).remove();

$('#content p:not(.clear)').filter(function() {
    return $(this).html() === "";
}).remove();

$('figure').each(function() {
	var alt = $('figcaption', this).text();
	$('img', this).attr('alt', alt);
	$('a', this).attr('title', alt);
});

<?php if(is_front_page() && !is_paged()) { ?>
var hmany = $('.sub_dest').length;
if(hmany < 5) { $('#sub_dest_holder .larr, #sub_dest_holder .rarr').remove(); }
var slide = $("#sub_dest .sub_dest");
for(var i = 0; i < slide.length; i+=4) {
  slide.slice(i, i+4).wrapAll('<div class="sub_div"></div>');
}
$('#sub_dest .sub_div').append('<i class="clear"></i>');

$('#sub_dest.cycle-slideshow').cycle('reinit');
$("#menu_holder").trigger("sticky_kit:recalc");
<?php } ?>

resizable();
$("#menu_holder").trigger("sticky_kit:recalc");

	$('html').removeClass('loading-dom');

<?php if(is_single()) { ?>
$('.galeria_item iframe').parent().css({'width':'100%','height':'0', 'padding-bottom':'56.25%'});
$('.galeria_item iframe').removeAttr('width height').css({'width':'100%','height':'100%'});
<?php } ?>

});

$(window).load(function() {
	$('html').removeClass('loading');
	setTimeout(function() {
		resizable();
	}, 100);
});

$(window).resize(function() {
resizable();
$("#menu_holder").trigger("sticky_kit:recalc");
});

</script>

<?php if (is_single() || is_page()) { ?>
<?php while (have_posts()) : the_post(); ?>
<?php if(is_single() || is_page()) {
$ctchvid = catch_video($post->ID);
$imo = get_field('imagen_destacado');
$imog = wp_get_attachment_image_src( $imo, 'large');
$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
if($img) { $lapic = $img[0]; }
elseif($ctchvid && ($ctchvid != '1')) { $lapic = $ctchvid; }
elseif($imog) { $lapic = $imog[0]; }
else { $lapic = primera_imagen(); }
if($lapic) { ?>
<link rel="image_src" href="<?php echo $lapic; ?>" />
<?php } else { ?>
<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/logofb.jpg" />
<?php } } ?>
<?php endwhile; wp_reset_postdata(); ?>
<?php } else { ?>
<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/logofb.jpg" />
<?php } ?>


<meta property="fb:app_id" content="306580476098751"/>
<meta property="og:title" content="<?php if(is_home()) { echo 'JOIA Magazine'; } else { wp_title('|', true, 'right'); ?>JOIA Magazine<?php } ?>" />
<?php if(is_single()) { ?>

<?php if(in_category('joiamixtapes')) {
if(get_field('galeria')):
while(has_sub_field('galeria')) :
$soundcloud = get_sub_field('soundcloud');
if($soundcloud) { ?>
<?php }
endwhile;
endif;
} ?>

  <meta property="article:publisher" content="10713226317" />

<?php while(have_posts()) : the_post();
$aid = get_the_author_meta( "ID" );
$fi5 = get_field('facebook', 'user_'. $aid );
if ($fi5) { ?>

<meta property="article:author" content="https://www.facebook.com/<?php echo $fi5; ?>" />

<?php } $laid = get_the_id();
$categoryy = get_the_category();
$mcs = array();
foreach($categoryy as $gyy) {
$mcs[] = $gyy->term_id;
}
$caty = implode(',', $mcs);
$excp = array($laid);
$argus = array(
'cat'	=>		$caty,
'post__not_in' =>	$excp
);
// The Query
$la_query = new WP_Query( $argus );

// The Loop
if ( $la_query->have_posts() ) {
	while ( $la_query->have_posts() ) {
		$la_query->the_post();
echo '<meta property="og:see_also" content="' . get_permalink() . '" />';
	}
}
/* Restore original Post Data */
wp_reset_postdata(); ?>


  <meta property="article:section" content="<?php
echo $categoryy[0]->cat_name;
?>" />
<?php endwhile; } else { ?>
  <meta property="og:type" content="website" />
<?php } ?>

<meta property="og:url" content="<?php
    $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    echo $url;
?>" />
<meta property="og:site_name" content="JOIA Magazine" />
<meta property="fb:admins" content="1248003622" />

<meta property="fb:profile_id" content="10713226317" />

<?php if (is_single() || is_page()) { ?>
<?php while (have_posts()) : the_post(); global $stringno; ?>
<?php $ctchvid = catch_video($post->ID);
$gale = get_field('galeria');
$tienegale = get_field('galeria_superior');
$imo = get_field('imagen_destacado');
$imog = wp_get_attachment_image_src( $imo, 'large');
$imp = get_field('imagen_cabecera');
$impo = wp_get_attachment_image_src( $imp, 'large');
$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
$primera = primera_imagen();
$todas = toda_imagen(); ?>


<?php if($ctchvid && ($ctchvid != '1')) { ?>
<meta property="og:image" content="<?php echo $ctchvid; ?>" />
<?php } if($imog) { ?>
<meta property="og:image" content="<?php echo $imog[0]; ?>" />
<?php } if($impo) { ?>
<meta property="og:image" content="<?php echo $impo[0]; ?>" />
<?php } if($todas) {
$todass = array_reverse($todas);
foreach($todass as $cada) { ?>
<meta property="og:image" content="<?php echo $cada; ?>" />
<?php } } if($tienegale && $gale) {
while(has_sub_field('galeria')): $laimg = get_sub_field('imagen'); $limg = wp_get_attachment_image_src($laimg, 'large'); if($limg) { ?>
<meta property="og:image" content="<?php echo $limg[0]; ?>" />
<?php } endwhile; } if($img) { ?>
<meta property="og:image" content="<?php echo $img[0]; ?>" />
<?php } ?>

    <meta property="og:description" content="<?php remove_filter ('the_excerpt', 'wpautop'); ?><?php $stringno1 = get_the_excerpt();
$autor = get_the_author_meta( 'display_name' );
$stringno = strip_tags($stringno1);
if($stringno) {
	if(is_single()) {
		echo 'Por ' . $autor . '.– ';
	} echo $stringno;
} else { echo 'JOIA Magazine es una revista de diseño y artes visuales que se dedica a seleccionar trabajos de todo el mundo para mostrarlos al público chileno y latino en general. En sus 7 años de trayectoria, se ha instituido como una enciclopedia del arte de vanguardia, reseñando en sus páginas la obra de más de 300 artistas y diseñadores de los 5 continentes, además de actualizar todos los días su sitio web con lo más fresco en música, eventos, cine, animación y, por supuesto, artes visuales.'; }
 ?>" />

<?php endwhile; wp_reset_postdata(); ?>

<?php } else { ?>
    <meta property="og:description" content="JOIA Magazine es una revista de diseño y artes visuales que se dedica a seleccionar trabajos de todo el mundo para mostrarlos al público chileno y latino en general. En sus 7 años de trayectoria, se ha instituido como una enciclopedia del arte de vanguardia, reseñando en sus páginas la obra de más de 300 artistas y diseñadores de los 5 continentes, además de actualizar todos los días su sitio web con lo más fresco en música, eventos, cine, animación y, por supuesto, artes visuales." />
<?php } ?>

<?php if(is_page('ediciones')) { ?>
<?php $args = array(
'post_type' => 'page',
'post_parent__in' => array('97'),
'posts_per_page' => '-1',
'order' => 'ASC'
);
$ediiquery = new WP_Query( $args );

if ( $ediiquery->have_posts() ) :
while($ediiquery->have_posts()) : $ediiquery->the_post(); $imo = get_field('foto_portada'); $imog = wp_get_attachment_image_src( $imo, 'large');
if($imog) { ?>
<meta property="og:image" content="<?php echo $imog[0]; ?>" />
<?php } endwhile; endif; wp_reset_postdata(); wp_reset_query();
?>
<?php } ?>

<?php if(is_page_template( 'edicion.php' )) { ?>
<?php while(have_posts()) : the_post();
$portada = get_field('portada'); $port = wp_get_attachment_image_src( $portada, 'large');
$fportada = get_field('foto_portada'); $fport = wp_get_attachment_image_src( $fportada, 'large');
if(get_field('artistas')) {
while(has_sub_field('artistas')) {
$imgg = get_sub_field('imagen');
$img = wp_get_attachment_image_src( $imgg, 'large');
if($img) { ?>
<meta property="og:image" content="<?php echo $img[0]; ?>" />
<?php } } } if($port) { ?>
<meta property="og:image" content="<?php echo $port[0]; ?>" />
<?php } if($fport) { ?>
<meta property="og:image" content="<?php echo $fport[0]; ?>" />
<?php }
endwhile; wp_reset_postdata(); }

if(is_author()) {
$author = get_user_by( 'slug', get_query_var( 'author_name' ) );
$aid = $author->ID;
$autori = get_field('avatar', 'user_' . $aid); $aimg = wp_get_attachment_image_src( $autori, 'large');
if($aimg) { ?>
<meta property="og:image" content="<?php echo $aimg[0]; ?>" />
<?php } } ?>
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/logofb.jpg" />

</head>

<body <?php if($detect->isMobile()) { body_class('mobile top-banner'); } else { body_class('desktop'); } ?>>

<div style="width:320px;position:fixed;bottom:0;margin:0 auto;left:0;right:0;z-index:999999;">
<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
  googletag.pubads().definePassback('/92947493/320x50_JMAG_LL', [320, 50]).display();
</script>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=306580476098751";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="nubody">

<header id="main_header" class="fonty">
<div class="in"><div class="inn maxwidth">
<div id="statusbar"></div>
<a id="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" /></a>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

<form id="searchform" class="right" method="get" action="<?php bloginfo('url'); ?>">
				<fieldset>
					<input type="text" class="fonty" name="s" value="" placeholder="Buscar" required="required" /><button type="submit" value="">Buscar</button>
				</fieldset>
			</form>

<div class="clear"></div>
</div></div>
</header>

<div id="faux_header"></div>

<?php if(!$detect->isMobile() && get_field('banner_fondo', 'option')) {
if(!is_page_template('edicion.php') && !is_page('ediciones')) {
if(function_exists('drawAdsPlace')) {
drawAdsPlace(array('id' => 7), array('before' => '<div id="splashbanner">', 'after' => '</div>')); ?><?php }
} } ?>

<?php if(!is_page('ediciones')) { ?><div class="maxwidth desaparece768" style="background: #fff; position: relative; z-index: 200;"><div class="separator"></div></div><?php } ?>

<?php if(get_field('banner_grande', 'option')) {
if(!is_page_template('edicion.php') && !is_page('ediciones')) {
if(function_exists('drawAdsPlace')) {
drawAdsPlace(array('id' => 1), array('before' => '<div class="ad banner_holder"><div id="banner_header" class="maxwidth"><div class="banner"><div class="in">', 'after' => '</div></div><div class="separator"></div></div></div>')); ?><?php }
} }

remove_filter( 'the_excerpt', 'wpautop' ); ?>
