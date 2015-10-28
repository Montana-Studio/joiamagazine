<?php $detect = new Mobile_Detect; if(!$detect->isMobile() || $detect->isTablet()) { ?>
<section id="sidebar" class="desaparece768">
<?php if(get_field('video_edicion', 'option') && is_home()) { ?>
<aside>
<!--<h2>En el último número</h2>-->
<div class="video_holder">
<iframe id="side_vimeo" class="vimeoo" src="//player.vimeo.com/video/<?php the_field('video_edicion', 'option'); ?>?title=0&byline=0&portrait=0&autoplay=0&loop=1&hd_off=1&color=ffffff&api=1&player_id=side_vimeo" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<script type="text/javascript" src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
  var iframe = $('#side_vimeo')[0],
      player = $f(iframe);
  player.addEvent(function() {
      player.api('setVolume', 0);
      player.api('play');
  });
});
</script>

<?php $lpgs = get_pages('child_of=97&sort_column=id&sort_order=desc'); ?>

<div class="fonty vimeocover"><span><span>
<!--<a href="<?php echo get_page_link($lpgs[0]->ID); ?>">Ver &uacute;ltimo n&uacute;mero</a><br />-->
<a style="font-size: 80%;" href="<?php echo get_page_link(97); ?>">Ver todas las Ediciones</a>
</span></span></div>
</div>
</aside>
<?php } ?>


<div style="width:300px;margin:5px auto;display:block;clear:both;">
  <script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
    googletag.pubads().definePassback('/92947493/300x300_JMAG_all', [300, 300]).display();
  </script>
</div>

<aside id="top">
  <?php if ( dynamic_sidebar('Widgets') ) : else : endif; ?>
</aside>

<script src="<?php bloginfo('template_url'); ?>/js/instagram.min.js"></script>

<script>
function createPhotoElement(photo) {
      var innerHtml = $('<img>')
        .addClass('instagram-image')
        .attr('src', photo.images.thumbnail.url);

      innerHtml = $('<a>')
        .attr('target', '_blank')
        .attr('href', photo.link)
        .append(innerHtml);

      return $('<div>')
        .addClass('instagram-placeholder')
        .attr('id', photo.id)
        .append(innerHtml);
    }

    function didLoadInstagram(event, response) {
      var that = this;

      $.each(response.data, function(i, photo) {
        $(that).append(createPhotoElement(photo));
      });
      $(that).append('<i class="clear"></i>');
    }

jQuery(document).ready(function($){
  $('.instagram-top').on('didLoadInstagram', didLoadInstagram).instagram({
      userId: 10319981,
      clientId: 'e717aa5b3deb4b9181fc758411e35964',
      accessToken: '233836804.1677ed0.ec82f44e8d9344158c7341c17bab52a0'
    });
});
</script>

<?php if(get_field('render_edicion', 'option')) { ?>

<aside id="ultima_portada">
  <?php if(get_field('link_edicion', 'option')) { ?>
    <a href="<?php the_field('link_edicion', 'option'); ?>">
  <?php } ?>
  <img src="<?php the_field('render_edicion', 'option'); ?>" alt="" />
  <?php if(get_field('link_edicion', 'option')) { ?>
    </a>
  <?php } ?>
</aside>

<?php } ?>

<?php if(function_exists('drawAdsPlace')) {
drawAdsPlace(array('id' => 10), array('before' => '<div class="ad banner_holder">', 'after' => '</div>')); ?><?php } ?>

<?php if(function_exists('drawAdsPlace')) {
drawAdsPlace(array('id' => 6), array('before' => '<div class="ad banner_holder">', 'after' => '</div>')); ?><?php } ?>

<aside id="tumblr">

<h4 style="margin-bottom: 15px; margin-bottom: 1.5rem;"><a href="http://joiamagazine.tumblr.com" target="_blank">JOIA Tumblr &raquo;</a></h4>
<?php if ( dynamic_sidebar('Widgets 2') ) : else : endif; ?>

</aside>

<?php if(function_exists('drawAdsPlace')) {
drawAdsPlace(array('id' => 4), array('before' => '<div class="ad banner_holder">', 'after' => '</div>')); ?><?php } ?>

<!--<aside class="banner b300x250" style="background-image: url('<?php bloginfo('template_url'); ?>/images/head4.jpg');"><div class="in"><a href="#"></a></div></aside>



<aside class="banner b220x800" style="background-image: url('<?php bloginfo('template_url'); ?>/images/head3.jpg');"><div class="in"><a href="#"></a></div></aside>-->


</section>
<?php } ?>
