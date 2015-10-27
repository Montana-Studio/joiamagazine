<?php get_header(); $detect = new Mobile_Detect; ?>

<div id="wrapper" class="maxwidth">

<?php if( !is_paged() ) { ?>

<?php if(get_field('destacados_home', 'option') && get_field('prim', 'option')) {
$losprimarios = get_field('prim', 'option'); $cavv = 0; ?>

<!-- Slider -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle2.min.js"></script>
<!-- Gestos de deslizar en móviles -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle2.swipe.min.js"></script>

<?php if(get_field('banners', 'option')) { ?>
	<div id="secondary_feature" class="desaparece768">
		<?php if (get_field('destacados_secundarios', 'option') == 'banner') { ?>
			<aside class="banner externo b300x368">
				<div class="in">
					<?php if(function_exists('drawAdsPlace')) { drawAdsPlace(array('id' => 8), true); } ?>
				</div>
			</aside>
		<?php } elseif (get_field('destacados_secundarios', 'option') == 'banners' || get_field('destacados_secundarios', 'option') == 'banner_div') { ?>
			<aside class="banner externo b300x200 contituloalmedio">
				<div class="in">
					<?php if(function_exists('drawAdsPlace')) { drawAdsPlace(array('id' => 2), true); } ?>
				</div>
			</aside>
		<?php } elseif(get_field('destacados_secundarios', 'option') == 'div_banner' || get_field('destacados_secundarios', 'option') == 'div' || get_field('destacados_secundarios', 'option') == 'divs') { ?>
			<?php $top_posts = get_field('destacado', 'option');
				if($top_posts) : ?>
					<?php foreach( $top_posts as $post):
						setup_postdata($post);
						$ctchvid = catch_video($post->ID); $imo = get_field('imagen_destacado'); $imog = wp_get_attachment_image_src( $imo, 'thumbnail');  $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
						if($imog) { $lapic = $imog[0]; } elseif($img) { $lapic = $img[0]; } elseif($ctchvid && ($ctchvid != '1')) { $lapic = $ctchvid; } else { $lapic = primera_imagen(); } ?>
			<aside class="banner
				<?php if (get_field('destacados_secundarios', 'option') == 'div') { ?>b300x368
				<?php } else { ?>
					b300x200
				<?php } ?> contituloalmedio" style="background-image: url(<?php echo $lapic; ?>);">
				<div class="in">
					<h3>
						<div class="inn">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</h3>
				</div>
			</aside>
			<?php endforeach; wp_reset_postdata(); endif; ?>
<?php } ?>

<?php if ((get_field('destacados_secundarios', 'option') == 'banners') || (get_field('destacados_secundarios', 'option') == 'div_banner')) { ?>
<aside class="banner externo b300x150 contituloalmedio">
	<div class="in">
		<?php if(function_exists('drawAdsPlace')) { drawAdsPlace(array('id' => 3), true); } ?>
	</div>
</aside>
<?php } elseif (get_field('destacados_secundarios', 'option') == 'banner_div' || get_field('destacados_secundarios', 'option') == 'divs') { ?>
<?php $topp_posts = get_field('destacado_2', 'option');
if($topp_posts) : ?>
<?php foreach( $topp_posts as $post): ?>
<?php setup_postdata($post); ?>
<?php $ctchvid = catch_video($post->ID); $imo = get_field('imagen_destacado'); $imog = wp_get_attachment_image_src( $imo, 'thumbnail');  $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
if($imog) { $lapic = $imog[0]; } elseif($img) { $lapic = $img[0]; } elseif($ctchvid && ($ctchvid != '1')) { $lapic = $ctchvid; } else { $lapic = primera_imagen(); } ?>
<aside class="banner b300x150 contituloalmedio" style="background-image: url(<?php echo $lapic; ?>);">
	<div class="in">
		<h3>
			<div class="inn">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		</h3>
	</div>
</aside>
<?php endforeach; wp_reset_postdata(); endif; ?>
<?php } ?>
</div>
<?php } ?>

<!--<div class="separator"></div>-->
<section id="latest" class="cycle-slideshow"
	data-cycle-slides="> .latest"
	data-cycle-pause-on-hover="true"
	data-cycle-timeout="5000"
	data-cycle-pager="> .pager"
	data-cycle-pager-template="<li><a></a></li>"
	data-cycle-speed="600"
	data-cycle-log="false"
	data-cycle-swipe="true"
	data-cycle-fx="scrollHorz"
	data-cycle-easing="easeOutExpo"
	data-cycle-prev=".larr.f"
	data-cycle-next=".rarr.f"
	data-cycle-update-view="1">

<?php foreach( $losprimarios as $post):
setup_postdata($post); $cavv++; ?>
<?php $ctchvid = catch_video($post->ID); $imo = get_field('imagen_destacado'); $imog = wp_get_attachment_image_src( $imo, 'large');  $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
if($imog) { $lapic = $imog[0]; } elseif($img) { $lapic = $img[0]; } elseif($ctchvid && ($ctchvid != '1')) { $lapic = $ctchvid; } else { $lapic = primera_imagen(); } ?>
<div class="latest contituloalmedio" style="background-image: url('<?php echo $lapic; ?>');">
<a href="<?php the_permalink(); ?>" class="in">
<h3><?php the_title(); ?></h3>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>

<ul class="pager"></ul>
</section>
<?php } ?>

<div class="clear"></div>
<i class="latest_filler"></i>

<?php if( !$detect->isMobile() && get_field('destacados_secundarios_home', 'option') && get_field('secun', 'option') ) { $cualespo = get_field('secun', 'option'); $cav = 0; ?>
<div class="clear separator desaparece768"></div>
<!--<div class="separator medio"></div>-->

<div id="sub_dest_holder" class="desaparece768">

<div class="separator"></div>
<!--<div class="separator medio"></div>-->

<div id="sub_dest" class="cycle-slideshow"
	data-cycle-slides="> .sub_div"
	data-cycle-pause-on-hover="true"
	data-cycle-timeout="0"
	data-cycle-allow-wrap="true"
	data-cycle-pager="> .pager"
	data-cycle-pager-template="<li><a></a></li>"
	data-cycle-speed="750"
	data-cycle-log="false"
	data-cycle-swipe="true"
	data-cycle-fx="scrollHorz"
	data-cycle-easing="easeOutExpo"
	data-cycle-prev="#sub_dest_holder .larr"
	data-cycle-next="#sub_dest_holder .rarr"
	data-cycle-update-view="1">
<?php foreach( $cualespo as $post):
setup_postdata($post); $cav++; ?>
<article id="featured-<?php the_ID(); ?>" class="sub_dest">
<?php $ctchvid = catch_video($post->ID); $imo = get_field('imagen_destacado'); $imog = wp_get_attachment_image_src( $imo, 'thumbnail');  $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
if($imog) { $lapic = $imog[0]; } elseif($img) { $lapic = $img[0]; } elseif($ctchvid && ($ctchvid != '1')) { $lapic = $ctchvid; } else { $lapic = primera_imagen(); } ?>
<figure><a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $lapic; ?>);"><img src="<?php echo $lapic; ?>" alt="<?php the_title(); ?>" /></a>
<figcaption><?php the_title(); ?></figcaption></figure>
<h3 class="fonty"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>

<div class="separator"></div>
<!--<div class="separator medio"></div>-->

<?php if($cav > 4) { ?>
<a class="larr"></a>
<a class="rarr"></a>
<?php } ?>
</div>
<!--<div class="separator medio"></div>-->
<?php } ?>

<div class="clear separator desaparece768"></div>

<?php } ?>

<?php get_template_part('main_nav'); ?>

<h2 class="fonty">News<?php if(is_paged()) { $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo ' <span class="pagedd">p/'.$paged . '</span>'; } ?></h2>
<div class="separator"></div>

<section id="content" class="boxy considebar">

<?php while(have_posts()) : the_post(); ?>
<?php get_template_part('loop'); ?>
<?php endwhile; ?>

<?php wp_pagenavi(); ?>

</section>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
