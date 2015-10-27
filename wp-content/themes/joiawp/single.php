<?php get_header(); $detect = new Mobile_Detect; ?>

<div id="wrapper" class="maxwidth">

<?php get_template_part('main_nav'); ?>

<?php while(have_posts()) : the_post(); ?>

<?php if(!get_field('galeria_superior') && get_field('imagen_destacado')) { $concabecera = true; ?>
<section id="latest" class="al_filler">
<?php $imo = get_field('imagen_destacado'); $imog = wp_get_attachment_image_src( $imo, 'large');
$lapic = $imog[0]; ?>
<div class="latest contituloalmedio" style="background-image: url('<?php echo $lapic; ?>');">
<a href="<?php the_permalink(); ?>" class="in">
<h3><?php the_title(); ?></h3>
</a>
</div>
</section>
<div class="clear"></div>
<i class="latest_filler"></i>
<div class="separator"></div><!--<div class="separator"></div>-->

<?php } elseif(get_field('galeria_superior')) { ?>
<?php if(get_field('galeria')): ?>
<div class="cargando pulse">Cargando galer&iacute;a...</div>
<?php  $cuantasfotos = get_post_meta($post->ID, 'galeria', true); ?>


<?php if ($cuantasfotos != '1') { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle2.swipe.min.js"></script>
<?php } ?>

<div id="full_holder" class="al_filler" style="position: relative;">
<section id="galeria" class="<?php if ($cuantasfotos != '1') { ?>cycle-slideshow<?php } ?>"
	data-cycle-slides="> .galeria_item"
	data-cycle-timeout="0"
	data-cycle-pager="> .pager"
	data-cycle-pager-template="<li><a></a></li>"
	data-cycle-speed="800"
	data-cycle-swipe="true"
	data-cycle-caption=".gal.cuantos"
	data-cycle-easing="easeOutExpo"
	data-cycle-fx="scrollHorz"
	data-cycle-prev=".gal.larr"
	data-cycle-next=".gal.rarr"
	data-cycle-auto-height="calc"
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
<iframe src="//player.vimeo.com/video/<?php the_sub_field('vimeo'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<?php } elseif($youtube) { ?>
<iframe src="//www.youtube.com/embed/<?php the_sub_field('youtube'); ?>?rel=0" frameborder="0" allowfullscreen></iframe>
<?php } elseif($laimg) { $limg = wp_get_attachment_image_src($laimg, 'large'); $limgmed = wp_get_attachment_image_src($laimg, 'large'); ?><a style="background-image: url(<?php echo $limgmed[0]; ?>);" href="<?php echo $limg[0]; ?>"><img src="<?php echo $limgmed[0]; ?>" alt="<?php the_title(); ?>" /></a>
<?php } ?>
</div></div></div>
<?php endwhile; ?>
</section>
<?php if ($cuantasfotos != '1') { ?>
<a class="gal larr"></a>
<a class="gal rarr"></a>
<div class="gal cuantos"></div>
<?php } ?>
<?php if ($haycomentarios) { ?>
<a class="gal veropinion open desaparece768" title="Ver opiniones del autor"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-comment fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
</div>
<i class="single_filler latest_filler"></i>
<div class="separator desaparecee768"></div>
<!--<div class="separator" style="border-top: 1px solid #eee;"></div>-->

<?php if(!$detect->isMobile()) { ?>
<section id="opinion" class="cycle-slideshow relative open desaparece768"
	data-cycle-slides="> .maino"
	data-cycle-timeout="0"
	data-cycle-speed="300"
	data-cycle-easing="linear"
	data-cycle-fx="fade"
	data-cycle-auto-height="calc"
	data-cycle-prev=".gal.larr"
	data-cycle-next=".gal.rarr"
	data-cycle-update-view="1">
<?php while(has_sub_field('galeria')):
$cmn = get_sub_field('comentario');
if($cmn != '') { $haycomentarios = '1'; $hayeste = '1'; } else { $hayeste = '0'; } ?>
<div class="maino<?php if($hayeste == '1') { ?> concom<?php } ?>"><div class="in"><?php echo get_sub_field('comentario'); ?>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="autor_img" style="background-image: url(<?php $author_id = get_the_author_meta( 'ID' ); $author_badge = get_field('avatar', 'user_'. $author_id ); $avatar = wp_get_attachment_image_src( $author_badge, 'thumbnail' ); echo $avatar[0]; ?>);"></a></div></div>
<?php endwhile; ?>
<?php if($haycomentarios) { ?><div class="clear separator"></div><?php } ?>
</section>
<?php } ?><!-- !mobile -->
<?php endif; } ?>

<header class="info<?php if(get_field('ancho_completo')) { ?> textcenter<?php } ?>">
<div class="delcontent">
<?php if(!$concabecera) { ?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php } ?>
<div class="por" <?php if($concabecera) { ?>style="margin-top: 0;"<?php } ?>><?php the_category(', '); ?> | Por <?php the_author_posts_link(); ?> hace <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ); ?>.<?php edit_post_link( ' <strong style="font-size: 85%;">Editar</strong>' ); ?></div>
</div>

<?php if(!$concabecera) { ?>
<ul class="sociales-single">
<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="es">Twittear</a></li>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</ul>
</header>
<?php } ?>


<?php if(get_field('ancho_completo')) { ?><div class="ancho_completo"><?php } ?><!-- empieza ancho_completo -->


<?php $date1 = "2014-05-04"; //2014 mayo 05
      $date2 = $post->post_date;
if ($date1 < $date2) {} else { ?>
<div id="viejito">Este contenido viene de la versi&oacute;n anterior de nuestro sitio. Puede que no se vea 100% correcto ;)</div>
<?php } ?>

<section id="content" class="<?php if(!get_field('ancho_completo')) { ?>considebar<?php } ?>">

<article>

<?php if(!$detect->isMobile()) { ?>
<ul class="sociales-single">
<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="es">Twittear</a></li>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</ul>
<?php } ?>

<div class="content">

<?php the_content(); ?>
<i class="clear"></i>
</div><!-- .content -->

<ul class="sociales-single">
<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="es">Twittear</a></li>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</ul>

<?php if(!get_field('no_tiene_relacionados')) {
/*wp_related_posts();*/
} ?>

<div id="comentarios">
<?php comments_template(); ?> 
</div>

</article>

</section>

<?php if(!get_field('ancho_completo')) { get_sidebar(); } ?><!-- aqui va el get_sidebar -->

<?php if(get_field('ancho_completo')) { ?></div><?php } ?><!-- ancho_completo -->

<?php endwhile; ?>

<?php get_footer(); ?>
