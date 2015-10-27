<?php  ?><article id="post-<?php the_ID(); ?>" class="post">
<?php $ctchvid = catch_video($post->ID); $minidevideo = ''; ?>
<?php $imo = get_field('imagen_destacado'); $imog = wp_get_attachment_image_src( $imo, 'medium');
$postthumbnail = get_post_thumbnail_id();
if($postthumbnail) {
$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
} elseif(get_field('imagen_destacada')) {
$img = wp_get_attachment_image_src( get_field('imagen_destacada'), 'thumbnail');
}
if($img) { $lapic = $img[0]; } elseif($ctchvid && ($ctchvid != '1')) { $lapic = $ctchvid; $minidevideo = ' minidevideo'; } elseif($imog) { $lapic = $imog[0]; } else { $lapic = primera_imagen(); } ?>
<figure><a href="<?php the_permalink(); ?>">
<div class="laimg<?php echo $minidevideo; ?>" style="background-image: url(<?php echo $lapic; ?>);"><img src="<?php echo $lapic; ?>" alt="<?php the_title(); ?>" /></div>
<?php if($ctchvid) { echo '<span class="video_icn"></span>'; } ?></a>
<figcaption><?php the_title(); ?></figcaption></figure>
<div class="info">
<header>
<h3 class="fonty"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php if(!is_category('joiafan')) { ?><div class="cats"><?php the_category(', '); ?></div>
<div class="meta"><a class="autor_img" style="background-image: url(<?php $author_id = get_the_author_meta( 'ID' ); $author_badge = get_field('avatar', 'user_'. $author_id ); $avatar = wp_get_attachment_image_src( $author_badge, 'thumbnail' ); echo $avatar[0]; ?>);"></a><span class="veremos">&nbsp;|&nbsp;</span> Por <?php the_author_posts_link(); ?><span class="veremos">&nbsp;hace <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></span>.<?php edit_post_link( ' <strong style="font-size: 85%;">(e)</strong>' ); ?></div><?php } ?>
<div class="clear bordecillo"></div>
</header>
<div class="description" <?php if(is_category('joiafan')) { ?>style="max-height: none;"<?php } ?>>
<?php if(is_category('joiafan')) { $content = get_the_content(); $postOutput = preg_replace('/<img[^>]+./','', $content); echo $postOutput; } else { $excrpt = get_the_excerpt(); $excrpt1 = strip_tags($excrpt); echo substr($excrpt1, 0, 210); ?><a href="<?php the_permalink(); ?>"> ... Leer m&aacute;s &raquo;</a><?php } ?>
</div>
<?php if(!is_category('joiafan')) { ?>
<ul class="sociales-single">
<li><a class="comentar" href="<?php the_permalink(); ?>#disqus_thread"><span>Comentar &raquo;</span></a></li>
<li class="fb"><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
<li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="es">Twittear</a></li>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</ul>
<?php } ?>
</div>
<div class="clear"></div>
</article>