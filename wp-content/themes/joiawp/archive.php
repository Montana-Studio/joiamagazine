<?php get_header(); ?>

<div id="wrapper" class="maxwidth">

<?php get_template_part('main_nav'); ?>

<div class="ancho_completo">

<?php if(have_posts()) : ?>

<div class="delcontent">
<div class="autor-info"><h3 class="fonty"><?php if ( is_day() ) : ?>
							<?php printf( __( '<span class="desaparece768">Archivos del </span>%s' ), '<span>' . get_the_date() . '</span>' ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( __( '<span class="desaparece768">Archivos de </span>%s' ), '<span>' . get_the_date( _x( 'F \d\e\l Y', 'monthly archives date format' ) ) . '</span>' ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( __( '<span class="desaparece768">Archivos del </span>%s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format' ) ) . '</span>' ); ?>
						<?php else : ?>
							<?php _e( 'Archivos' ); ?>
						<?php endif; ?><?php if(is_paged()) { $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo ' <span class="pagedd">p/'.$paged . '</span>'; } ?></h3></div>
</div>
<div class="separator"></div>

<section id="content" class="boxy">

<?php while(have_posts()) : the_post(); ?>
<?php get_template_part('loop'); ?>
<?php endwhile; ?>

<?php wp_pagenavi(); ?>

</section>

<?php else : ?>

<div class="delcontent">
<div class="autor-info"><h3 class="fonty">Nada encontrado. Por favor vuelve <a href="<?php bloginfo('url'); ?>">al inicio</a>.</h3></div>
</div>

<?php endif; ?>

</div>

<?php get_footer(); ?>