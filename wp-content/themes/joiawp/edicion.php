<?php get_header(); $detect = new Mobile_Detect; /* Template Name: Edición */ ?>

<?php if( !$detect->isMobile() ) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollstop.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollsnap.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.inview.min.js"></script>
<?php } ?>

<script type="text/javascript">

function resizable() {
	$w = $(window).outerWidth();
	$h = $(window).outerHeight();
	$mh = $('#main_header').outerHeight();
	$('#slides').outerWidth($w).outerHeight($h);
}

$(document).ready(function(){
	
    window.scrollTo(0,0);
	
	resizable();

<?php if( !$detect->isMobile() ) { ?>
$(document).scrollsnap({
        snaps: '.section',
        proximity: 2000,
	duration: 600,
	easing: 'easeOutExpo',
	onSnap: function($snappedElement) {
		$('.section:not(.portada)').removeClass('inview');
		$snappedElement.addClass('inview');
	}
    });
	
	$('.vercontenidos').click(function(e) {
		e.preventDefault();
		$('.section').each(function() {
            var pos = $(this).offset().top;   
            if ($window.scrollTop() < pos) {
                $('html, body').animate({
                    scrollTop: pos
                }, 1200, 'easeOutExpo');
                return false;
            }
        });
	});
<?php } ?>

});

<?php if( !$detect->isMobile() ) { ?>

var $window = $(window);

var ar=new Array(33,34,35,36,37,38,39,40);

$(document).keydown(function(e) {
     var key = e.which;
      //console.log(key);
      //if(key==35 || key == 36 || key == 37 || key == 39)
      if($.inArray(key,ar) > -1) {
          e.preventDefault();
          return false;
      }
      return true;
});

$(document).keyup(function(e) {
    if (e.keyCode == 40) {
		e.preventDefault();
		$('.section').each(function() {
            var pos = $(this).offset().top;   
            if ($window.scrollTop() < pos) {
                $('html, body').animate({
                    scrollTop: pos
                }, 600, 'easeOutExpo');
                return false;
            }
        });
    } else if (e.keyCode === 38) {
		e.preventDefault();
		$($('.section').get().reverse()).each(function() {
            var pos = $(this).offset().top;   
            if ($window.scrollTop() > pos) {
                $('html, body').animate({
                    scrollTop: pos
                }, 600, 'easeOutExpo');
                return false;
            }
        });
    }




$('.section').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
var $this = $(this);
  if (isInView) {
		$('.section:not(.portada)').removeClass('inview');
		$this.addClass('inview');
  }
});





});
<?php } ?>

$(window).resize(function() {
	resizable();
});
</script>


<?php while(have_posts()) : the_post(); ?>

<?php $color = get_field('color');
$nucolor = str_replace('#', '', $color); ?>

<style type="text/css">
#searchform button {
background-color: #<?php echo $nucolor; ?>;
}
</style>

<section id="slides">
<?php $portada = get_field('portada'); if($portada) {
$port = wp_get_attachment_image_src( $portada, 'full'); ?>

<div class="section inview portada" style="background-image: url(<?php echo $port[0]; ?>);"><div class="in">
<img class="imgob" src="<?php echo $port[0]; ?>" alt="<?php the_title(); ?>" />
<div class="info">
<h2><?php the_title(); ?>
<?php $specs = get_field('specs'); if($specs) { ?>
<span>/ <?php the_field('specs'); ?></span><?php } ?>
</h2><br />
<?php if(get_field('subtitulo')) { ?><h3><?php the_field('subtitulo'); ?></h3><br /><?php } ?>
<div class="descripcion">
<?php the_content(); ?>
</div>
<a class="vercontenidos">Ver contenidos &darr;</a>
</div>
</div></div>
<?php } ?>

<?php if(get_field('artistas')): ?>
<?php while(has_sub_field('artistas')): ?>
<?php $imgg = get_sub_field('imagen');
$img = wp_get_attachment_image_src( $imgg, 'full'); ?>
<div class="section" style="background-image: url(<?php echo $img[0]; ?>);"><div class="in">
<img class="imgob" src="<?php echo $img[0]; ?>" alt="<?php echo get_sub_field('nombre'); ?>" />
<div class="info">
<?php if(get_sub_field('nombre')) { ?><h2><?php echo get_sub_field('nombre'); ?></h2><br /><?php } ?>
<?php if(get_sub_field('profesion')) { ?><h3><?php echo get_sub_field('profesion'); ?></h3><br /><?php } ?>
<?php if(get_sub_field('origen')) { ?><div class="origen"><?php echo get_sub_field('origen'); ?></div><br /><?php } ?>
<?php if(get_sub_field('link')) { ?><a class="link" href="http://<?php echo get_sub_field('link'); ?>" target="_blank"><?php echo get_sub_field('link'); ?></a><?php } ?>
</div>
<?php if(get_sub_field('cita')) { ?>
<blockquote>“<?php echo get_sub_field('cita'); ?>”</blockquote>
<?php } ?>
</div></div>

<?php endwhile; endif; ?>

<?php if(get_field('vimeo')) { ?>
<div class="section video"><div class="cont">
<iframe src="//player.vimeo.com/video/<?php the_field('vimeo'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=<?php echo $nucolor; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div></div>
<?php } ?>

<?php $posts = get_field('productos_asociados'); if( $posts ): ?>
	<?php foreach( $posts as $p ): ?>
	    	<a class="comprar-numero" style="background-color: #<?php echo $nucolor; ?>;" href="<?php echo get_permalink( $p->ID ); ?>">Comprar esta edici&oacute;n &raquo;</a>
	<?php endforeach; ?>
<?php endif; ?>

</section>

<i class="loading-text pulse montserrat">Cargando...</i>

<?php endwhile; ?>

<?php get_footer(); ?>