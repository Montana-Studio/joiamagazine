<?php get_header(); ?>

<div id="wrapper" class="maxwidth">

<?php get_template_part('main_nav'); ?>

<?php if(get_field('tiene_cabecera', 'category_' . $cat)) {
$imgid = get_field('imagen_cabecera', 'category_' . $cat);
	$imagemedium = wp_get_attachment_image_src( $imgid, 'medium' );
	$imagelarge = wp_get_attachment_image_src( $imgid, 'large' ); ?>

<div id="imagen_cabecera" class="contituloalmedio">
<div data-picture data-alt="<?php the_title(); ?>">
    <div data-src="<?php echo $imagemedium[0]; ?>"></div>
    <div data-src="<?php echo $imagelarge[0]; ?>" data-media="(min-width: 691px)"></div>
    <noscript>
        <img src="<?php echo $imagemedium[0]; ?>" alt="<?php single_cat_title( '', true ); ?>">
    </noscript>
</div>
<div class="absolute">
<div class="in"><h3><div class="inn"><?php single_cat_title( '', true ); ?></div></h3></div>
</div>
</div>
<?php } ?>

<?php if(get_field('ancho_completo', 'category_' . $cat)) { ?><div class="ancho_completo"><?php } ?>

<div class="delcontent">
<?php if(!get_field('tiene_cabecera', 'category_' . $cat)) { ?>
<div class="autor-info"><h3 class="fonty"><span class="desaparece768">Categorizados bajo </span><span class="dorado"><?php single_cat_title( '', true ); ?></span><?php if(is_paged()) { $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo ' <span class="pagedd">p/'.$paged . '</span>'; } ?></h3></div>
<?php } ?>
<?php $catdesc = category_description(); if($catdesc) { echo '<div class="autor-info"><h3 class="textcenter fonty" style="font-size: 140%; line-height: 1.6; padding-top: 2%;">' . $catdesc . '</span></h3></div>'; } ?>
</div>
<div class="separator"></div>

<section id="content" class="boxy<?php if(!get_field('ancho_completo', 'category_' . $cat)) { ?> considebar<?php } ?>">

<?php while(have_posts()) : the_post(); ?>
<?php get_template_part('loop'); ?>
<?php endwhile; ?>

<?php wp_pagenavi(); ?>

</section>

<?php if(!get_field('ancho_completo', 'category_' . $cat)) { ?><?php get_sidebar(); ?><?php } ?>

<?php if(get_field('ancho_completo', 'category_' . $cat)) { ?></div><?php } ?>

<?php get_footer(); ?>