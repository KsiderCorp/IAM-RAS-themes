<div class="giftb">

<div class="pure-g">

<div class="pure-u-1-5 cover">

<?php if( get_field('cover') ):?>
<style>
.emptygift.id-<?php the_ID(); ?> {background-image: url(<?php the_field('cover'); ?>);}
</style>
<?php else : ?>
<?php endif; ?>	

<div class="emptygift id-<?php the_ID(); ?> <?php if( has_term('book', 'bookgift') ): echo 'book'; elseif( has_term('patents', 'bookgift') ): echo 'patent'; else : echo 'gift'; endif; ?>">
</div>

</div>

<div class="pure-u-4-5">
<div class="auth">
<?php echo get_the_term_list( $post->ID, 'authors', '', ', ', '' ); ?>
</div>

<div class="booktitle">
<a href="#gift-<?php the_ID(); ?>" rel="<?php the_ID(); ?>" class="popup-with-move-anim gift-link post-link"  data-link="<?php echo home_url();?>/ajaxloader/">
<?php the_title(); ?></a>
</div>
</div>

</div>

<div class="bookcontent zoom-anim-dialog white-popup mfp-hide" id="gift-<?php the_ID(); ?>">
<div id="single-post-container">

</div>
</div>


</div>