<?php $fi1 = get_field('sitio_web', 'user_'. $aid );
$fi2 = get_field('twitter', 'user_'. $aid );
$fi3 = get_field('tumblr', 'user_'. $aid );
$fi4 = get_field('instagram', 'user_'. $aid );
$fi5 = get_field('facebook', 'user_'. $aid );
$fi6 = get_field('flickr', 'user_'. $aid );
$fi7 = get_field('soundcloud', 'user_'. $aid );
$fi8 = get_field('vimeo', 'user_'. $aid );
$fi9 = get_field('sitio_web_2', 'user_'. $aid );
$fi10 = get_field('behance', 'user_'. $aid );
?>
<?php if($fi1 || $fi2 || $fi3 || $fi4 || $fi5 || $fi6 || $fi7 || $fi8 || $fi9 || $fi10) { ?>
<div class="redes">
<?php if($fi1) { ?>
<a href="http://<?php echo $fi1; ?>" title="Sitio Web"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-external-link fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi9) { ?>
<a href="http://<?php echo $fi9; ?>" title="Sitio Web"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-external-link fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi5) { ?>
<a href="https://www.facebook.com/<?php echo $fi5; ?>" title="Facebook"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi2) { ?>
<a href="http://twitter.com/<?php echo $fi2; ?>" title="Twitter"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi4) { ?>
<a href="http://instagram.com/<?php echo $fi4; ?>" title="Instagram"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi3) { ?>
<a href="http://<?php echo $fi3; ?>.tumblr.com" title="Tumblr"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi10) { ?>
<a href="http://behance.net/<?php echo $fi10; ?>" title="Behance"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-behance fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi6) { ?>
<a href="http://www.flickr.com/photos/<?php echo $fi6; ?>" title="Flickr"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-flickr fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi7) { ?>
<a href="http://soundcloud.com/<?php echo $fi7; ?>" title="Soundcloud"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
<?php if($fi8) { ?>
<a href="http://soundcloud.com/<?php echo $fi8; ?>" title="Vimeo"><span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-vimeo-square fa-stack-1x fa-inverse"></i>
</span></a>
<?php } ?>
</div>
<?php } ?>