<?php get_header(); ?>

<div id="wrapper" class="maxwidth">

<?php get_template_part('main_nav'); ?>

<div class="delcontent">

<?php $aid = get_the_author_meta( "ID" ); include(locate_template('autor-foto.php')); ?>

<div class="autor-info"><h3 class="fonty">Posts por <?php echo '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( $aid ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>'; ?><?php if(is_paged()) { $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo ' <span class="pagedd">p/'.$paged . '</span>'; } ?></h3>

<?php include(locate_template('autor-redes.php')); ?>

</div>
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