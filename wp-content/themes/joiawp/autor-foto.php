<?php $fba = get_field('fb_avatar', 'user_'. $aid ); ?>
<?php if($fba) {
$imag = 'https://graph.facebook.com/' . get_field('fb_id', 'user_'. $aid ) . '/picture?type=large';

} else { $author_badge = get_field('avatar', 'user_'. $aid ); $avatar = wp_get_attachment_image_src( $author_badge, 'thumbnail' );
if($avatar) { $imag = $avatar[0]; } else { $imag = get_bloginfo("wpurl") . '/wp-content/uploads/2014/04/no-thumb.png'; }
}
echo '<a class="foto" style="background-image: url(' . $imag . ');" href="' . get_author_posts_url( $aid ) . '"><img src="' . $imag . '" alt="' . $user->display_name . '" /></a>'; ?>