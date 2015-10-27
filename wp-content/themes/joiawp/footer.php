<?php $detect = new Mobile_Detect; if(!is_page_template('edicion.php') && !is_page('ediciones')) { ?>

<div class="clear separator"></div>
<div class="separator desaparece768"></div>
<div class="separator desaparece768"></div>

</div><!-- #wrapper -->

<?php if(!is_page_template('edicion.php') && !is_page('ediciones') && (!$detect->isMobile() || $detect->isTablet() ) ) { ?>
<div class="ad banner_holder"><div id="banner_footer" class="maxwidth"><div class="banner special"><div class="in">
<a href="http://joiaestudio.com"><img src="<?php bloginfo('template_url'); ?>/images/joiaestudio.jpg" alt="Joia Estudio" /></a></div></div></div></div>
<?php } ?>

<footer id="main_footer"><div class="in maxwidth">
<div class="tabla">

<div class="tr">
<div class="tc first">
<img src="<?php bloginfo('template_url'); ?>/images/logo_fff.png" alt="JoiaMag" />
<img class="url" src="<?php bloginfo('template_url'); ?>/images/url_fff.png" alt="JoiaMagazine.com" />
<div id="texto_footer"><?php the_field('texto_footer', 'option'); ?></div>
<?php the_field('direccion', 'option'); ?>
</div><!-- .tc -->
<div class="tc">
<span id="redes_footer" class="redes">
<a href="https://www.facebook.com/pages/JOIA_MAGAZINE/10713226317" title="Facebook"><span class="fa-stack">
  <i class="fa fa-facebook fa-stack-1x"></i>
</span></a>
<a href="https://twitter.com/joiamagazine" title="Twitter"><span class="fa-stack">
  <i class="fa fa-twitter fa-stack-1x"></i>
</span></a>
<a href="http://joiamagazine.tumblr.com/" title="Tumblr"><span class="fa-stack">
  <i class="fa fa-tumblr fa-stack-1x"></i>
</span></a>
<a href="http://instagram.com/joiamagazine" title="Instagram"><span class="fa-stack">
  <i class="fa fa-instagram fa-stack-1x"></i>
</span></a>
<a href="http://joiaestudio.com" title="JOIAestudio">
<img src="<?php bloginfo('template_url'); ?>/images/joiaestudio_fff.png" alt="JOIAestudio" />
</a>
</span>
</div><!-- .tc -->
</div><!-- .tr -->

</div><!-- .tabla -->
</div></footer>

<?php } ?>

</div><!-- #nubody -->

<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'joiamagazine'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
var s = document.createElement('script'); s.async = true;
s.type = 'text/javascript';
s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>

<?php wp_footer(); ?>

</body>
</html>