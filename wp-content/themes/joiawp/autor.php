<div class="autor">
<?php include(locate_template('autor-foto.php')); ?>

<?php $fi0 = get_field('bio', 'user_'. $aid ); ?>

<div class="autor-info">
<h2><a href="<?php echo get_author_posts_url( $aid ); ?>"><?php echo $user->display_name; ?></a></h2>

<?php if($fi0) { echo '<div class="descripcion">' . $fi0 . '</div>'; } ?>

<?php include(locate_template('autor-redes.php')); ?>

</div>

<div class="verposts"><a href="<?php echo get_author_posts_url( $aid ); ?>">Ver Posts &raquo;</a></div>

<div class="clear"></div>
</div><!-- .autor -->