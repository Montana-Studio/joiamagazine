<?php get_header(); ?>

<div id="wrapper" class="maxwidth">

<?php get_template_part('main_nav'); ?>

<div class="delcontent">
<div class="autor-info"><h3 class="fonty">Etiquetados bajo <span class="dorado"><?php single_tag_title( '', true ); ?></span><?php if(is_paged()) { $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo ' <span class="pagedd">p/'.$paged . '</span>'; } ?></h3></div>
</div>
<div class="separator"></div>

<section id="content" class="boxy considebar">

<?php while(have_posts()) : the_post(); ?>
<?php get_template_part('loop'); ?>
<?php endwhile; ?>

<?php wp_pagenavi(); ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>