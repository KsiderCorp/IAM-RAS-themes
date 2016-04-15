<?php if( get_field('photo') ):
$attachment_id = get_field('photo');
$size = "large"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );

else : endif; ?>	

<div class="fbposition">Руководитель отдела, <?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?> <a href="#cont-<?php the_ID(); ?>" class="popup-with-move-anim"><?php the_title(); ?></a></div>


<div class="zoom-anim-dialog white-popup mfp-hide" id="cont-<?php the_ID(); ?>">
<h2><?php the_title(); ?> <a href="<?php the_permalink(); ?>" class="pouplink"><i class="icon-link"></i></a></h2>

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
<img src="<?php if( get_field('photo') ): echo $image[0]; else : echo '' . bloginfo("template_url") .'/img/emploers/yo.svg';  endif; ?>" class="peepimg">
</div>
</div>

</div>
