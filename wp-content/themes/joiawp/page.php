<?php get_header(); ?>

<div id="wrapper" class="maxwidth">

<?php get_template_part('main_nav'); ?>

<?php while(have_posts()) : the_post(); ?>

<?php if(!get_field('galeria_superior') && get_field('tiene_cabecera') && get_field('imagen_cabecera')) { ?>
<section id="latest">
<?php $imo = get_field('imagen_cabecera'); $imog = wp_get_attachment_image_src( $imo, 'large');
$lapic = $imog[0]; ?>
<div class="latest contituloalmedio" style="background-image: url('<?php echo $lapic; ?>');">
<div class="in">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>
</div>
</section>
<i class="latest_filler"></i>
<div class="separator"></div>
<div class="separator"></div>

<?php } elseif(get_field('galeria_superior')) { ?>
<?php if(get_field('galeria')): ?>
<?php  $cuantasfotos = get_post_meta($post->ID, 'galeria', true);
if ($cuantasfotos != '1') { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle2.swipe.min.js"></script>
<?php } ?>

<div id="full_holder" style="position: relative;">
<section id="galeria" class="cycle-slideshow"
	data-cycle-slides="> .galeria_item"
	data-cycle-pause-on-hover="true"
	data-cycle-timeout="0"
	data-cycle-pager="> .pager"
	data-cycle-pager-template="<li><a></a></li>"
	data-cycle-speed="600"
	data-cycle-swipe="true"
	data-cycle-easing="easeOutExpo"
	data-cycle-fx="scrollHorz"
	data-cycle-prev=".gal.larr"
	data-cycle-next=".gal.rarr"
	data-cycle-auto-height="calc"
	data-cycle-loader=wait
	data-cycle-update-view="1">

<?php while(has_sub_field('galeria')): $cmn = get_sub_field('comentario');
if($cmn != '') { $haycomentarios = '1'; $hayeste = '1'; } else { $hayeste = '0'; } ?>
<div class="galeria_item"><div class="in"><div class="inn">
<?php $laimg = get_sub_field('imagen');
$vimeo = get_sub_field('vimeo');
$youtube = get_sub_field('youtube');
$soundcloud = get_sub_field('soundcloud');
if($soundcloud) {
the_sub_field('soundcloud');
} elseif($vimeo) { ?>
<div class="video_holder"><iframe src="//player.vimeo.com/video/<?php the_sub_field('vimeo'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
<?php } elseif($youtube) { ?>
<div class="video_holder"><iframe src="//www.youtube.com/embed/<?php the_sub_field('youtube'); ?>?rel=0" frameborder="0" allowfullscreen></iframe></div>
<?php } elseif($laimg) { $limg = wp_get_attachment_image_src($laimg, 'large'); ?><a href="<?php echo $limg[0]; ?>"><img src="<?php echo $limg[0]; ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
</div></div></div>
<?php endwhile; ?>
</section>
<?php if ($cuantasfotos != '1') { ?>
<a class="gal larr"></a>
<a class="gal rarr"></a>
<?php } ?>
<?php if ($haycomentarios) { ?>
<a class="gal veropinion open" title="Ver opiniones del autor"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-comment fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
</div>
<div class="separator"></div>
<!--<div class="separator" style="border-top: 1px solid #eee;"></div>-->

<section id="opinion" class="cycle-slideshow relative open"
	data-cycle-slides="> .maino"
	data-cycle-pause-on-hover="true"
	data-cycle-timeout="0"
	data-cycle-speed="300"
	data-cycle-easing="linear"
	data-cycle-fx="fade"
	data-cycle-prev=".gal.larr"
	data-cycle-next=".gal.rarr"
	data-cycle-update-view="1">
<?php while(has_sub_field('galeria')):
$cmn = get_sub_field('comentario');
if($cmn != '') { $haycomentarios = '1'; $hayeste = '1'; } else { $hayeste = '0'; } ?>
<div class="maino<?php if($hayeste == '1') { ?> concom<?php } ?>"><div class="in"><?php echo get_sub_field('comentario'); ?>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="autor_img" style="background-image: url(<?php $author_id = get_the_author_meta( 'ID' ); $author_badge = get_field('avatar', 'user_'. $author_id ); $avatar = wp_get_attachment_image_src( $author_badge, 'thumbnail' ); echo $avatar[0]; ?>);"></a></div></div>
<?php endwhile; ?>
<?php if($haycomentarios) { ?><div class="separator"></div><?php } ?>
</section>
<?php endif; } ?>


<?php if(!get_field('tiene_cabecera')) { ?>
<header class="info">
<div class="delcontent">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>
</header>
<?php } ?>



<?php if(get_field('ancho_completo')) { ?><div class="ancho_completo"><?php } ?>

<?php if(!get_field('ancho_completo')) { ?>
<?php get_sidebar(); ?>
<?php } ?>

<section id="content" class="<?php if(!get_field('ancho_completo')) { ?>considebar<?php } ?>">

<article>

<div class="content">
<?php the_content(); ?>
</div><!-- .content -->

</article>

</section>

<?php if(get_field('ancho_completo')) { ?></div><?php } ?>

<?php endwhile; ?>

<?php get_footer(); ?>