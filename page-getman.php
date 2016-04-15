<?php 
$args = array(
'page_id' => $_POST['getpost'],
'post_type'=>'employees',
);
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><?php the_title(); ?> <a href="<?php the_permalink(); ?>" class="pouplink">old</a></h2>

<div class="pure-g">
<div class="pure-u-2-3" >

<?php if( get_field('position') ): the_field('position'); else : echo 'Должность'; endif; ?>,<br>
<?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?><br>
<?php if( get_field('phone') ):?>
<a href="tel:<?php the_field('phone'); ?>" class="peepcontl"><?php the_field('phone'); ?></a>
<?php else : endif; ?>	

<?php if( get_field('email') ):?>
<a href="mailto:<?php the_field('email'); ?>" class="peepcontl"><?php the_field('email'); ?></a>
<?php else : endif; ?>	

<?php the_content(); ?>

</div>

<div class="pure-u-1-3" >

<?php if( get_field('photo') ):

$attachment_id = get_field('photo');
$size = "full";
$image = wp_get_attachment_image_src( $attachment_id, $size);?>

<img src="<?php echo $image[0]; ?>" class="peepimg">

<?php else :?>
<img src="<?php bloginfo("template_url");?>/img/emploers/yo.svg " class="peepimg">
<?php endif; ?>	


</div>
</div>


<?php endwhile; else : ?>
<?php endif; ?>

<?php if( current_user_can('administrator') ){ ?>
<div class="center"><h5><?php print_r($_POST);?></h5></div>
<?php } ?>