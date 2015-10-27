<?php /* Template Name: Ediciones */ get_header(); ?>

<div id="wrapper" style="background: #333;">

<?php $args = array(
'post_type' => 'page',
'post_parent__in' => array('97'),
'posts_per_page' => '-1'
);
$ediquery = new WP_Query( $args );

if ( $ediquery->have_posts() ) :
while($ediquery->have_posts()) : $ediquery->the_post(); $imo = get_field('foto_portada'); $art = get_field('artistas');
if($imo) { ?>
<div class="portada_edicion">
<?php $imo = get_field('foto_portada'); $imog = wp_get_attachment_image_src( $imo, 'thumbnail'); ?>
<?php if($art) { ?>
<img class="puntita" src="<?php bloginfo('template_url'); ?>/images/puntita.png" alt="" />
<a class="mms" href="<?php the_permalink(); ?>">
<?php } else { ?>
<div class="mms">
<?php } ?>

<img src="<?php echo $imog[0]; ?>" alt="<?php the_title(); ?>" />
<div class="overlay"><div class="in">
<h3<?php if($art) { echo ' style="font-size: 24px; font-size: 2.4rem;"'; } ?>><?php the_title(); ?><br />
<?php if($art) { echo '<span>Ver contenidos &raquo;</span>'; } else { echo '<span>Pronto</span>'; } ?></h3>
</div></div>

<?php if($art) { ?>
</a>
<?php } else { ?>
</div>
<?php } ?>

</div>
<?php } endwhile; endif; wp_reset_postdata();
?>


<div class="portada_edicion">
<div class="mms">

<img src="<?php bloginfo('template_url'); ?>/images/portadafake.gif" alt="Pronto" />
<div class="overlay" style="opacity: 1 !important;"><div class="in">
<h3 style="font-size: 24px; font-size: 2.4rem;">Pronto m&aacute;s ediciones</h3>
</div></div>

</div>

</div>


<div class="clear"></div>

<?php get_footer(); ?>