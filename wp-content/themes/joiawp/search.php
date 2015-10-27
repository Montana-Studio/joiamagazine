<?php get_header(); ?>

<div id="wrapper" class="maxwidth">

<?php get_template_part('main_nav'); ?>

<div class="delcontent">

<?php global $wp_query; ?>
<div class="autor-info"><h3 class="fonty"><?php echo $wp_query->found_posts; ?> resultados para <span class="dorado"><?php echo get_search_query(); ?></span></h3></div>
</div>
<div class="separator"></div>

<div class="ancho_completo">

<section id="content" class="boxy">

<?php while(have_posts()) : the_post(); ?>
<?php get_template_part('loop'); ?>
<?php endwhile; ?>

<?php wp_pagenavi(); ?>

</section>

</div>

<?php get_footer(); ?>