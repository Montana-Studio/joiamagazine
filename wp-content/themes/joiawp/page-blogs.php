<?php /* Template Name: Blogs */ get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

<div id="wrapper" class="maxwidth">

<?php get_template_part('main_nav'); ?>

<?php if(get_field('tiene_cabecera')) {
$imgid = get_field('imagen_cabecera');
	$imagemedium = wp_get_attachment_image_src( $imgid, 'medium' );
	$imagelarge = wp_get_attachment_image_src( $imgid, 'large' ); ?>

<div id="imagen_cabecera" class="contituloalmedio">
<div data-picture data-alt="<?php the_title(); ?>">
    <div data-src="<?php echo $imagemedium[0]; ?>"></div>
    <div data-src="<?php echo $imagelarge[0]; ?>" data-media="(min-width: 691px)"></div>
    <noscript>
        <img src="<?php echo $imagemedium[0]; ?>" alt="<?php the_title(); ?>">
    </noscript>
</div>
<div class="absolute">
<div class="in"><h3><div class="inn"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></h3></div>
</div>
</div>
<?php } ?>

<div class="separator"></div>

<?php if(!get_field('ancho_completo')) { ?>
<?php get_sidebar(); ?>
<?php } ?>

<section id="content">

<article>

<div class="content">
<?php the_content(); ?>
</div><!-- .content -->

<?php $allUsers = get_users('orderby=display_name&order=ASC&exclude=1');
$joiauser = get_users('include=1');
$alUsers = array_merge($allUsers,$joiauser);

$uusers = array();

foreach($alUsers as $currentUser)
{
	if(in_array( 'author', $currentUser->roles ))
	{
		$uusers[] = $currentUser;
	}
}

foreach($uusers as $uuser)
{
$user_post_count = count_user_posts( $uuser->ID );
	if($user_post_count != 0)
	{
		$users[] = $uuser;
	}
}

echo '<div id="blogs">'; ?>
<i class="separator"></i>
<i class="separator" style="border-top: 1px solid #eee;"></i>

<?php foreach($uusers as $user) { ?>

<?php $aid = $user->ID; include(locate_template('autor.php')); ?>

<?php } echo '</div>'; ?>

</article>

</section>
<?php endwhile; ?>

<script>
$(document).ready(function() {
	$('.autor:nth-of-type(even)').after('<i class="clear"></i>');
});
</script>

<?php get_footer(); ?>