<?php if( get_field('photo') ):

$attachment_id = get_field('photo');
$size = "medium"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );
?>

<style>
.cat-it.id-<?php the_ID(); ?> {
background-image: url(<?php echo $image[0]; ?>);}
</style>

<?php else :?>
<style>
.cat-it.id-<?php the_ID(); ?> {
background-image: url(<?php bloginfo("template_url"); ?>/img/emploers/yo.svg);}
</style>
<?php endif; ?>	


<!-- popup-with-move-anim  -->
<div class="ncp">
<div class="hed">
<a href="<?php the_permalink(); ?>" class="post-link" rel="<?php the_ID(); ?>"  data-link="<?php echo home_url();?>/ajaxloader/">
<div class="cat-it id-<?php the_ID(); ?>"></div>
<div class="blc">
<?php the_title(); ?> <?php if( current_user_can('administrator') ){ ?>
(<?php the_ID(); ?>)
<?php } ?>
</div>
</a>
</div>
<div class="name">

<div class="staff">
<?php if( get_field('position') ): the_field('position'); else : echo 'Должность'; endif; ?><br>
<?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?><br>
</div>
</div>
</div>

<div class="zoom-anim-dialog white-popup mfp-hide" id="cont-<?php the_ID(); ?>">
<div id="single-post-container">

</div>
</div>

