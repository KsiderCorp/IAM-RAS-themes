<?php 
$award = 'reward';
$patents = 'patent';
$book = 'book-1';
$awardlink	= 'gift';
$booklink	= 'book';
$patentlink	= 'patents';

	if( has_term('gift', 'bookgift')  ): 
	$icon = $award;
	$link = $awardlink; 
	elseif ( has_term('book', 'bookgift')  ):  
	$icon = $book; 
	$link = $booklink; 
	else :
	$icon = $patents; 
	$link = $patentlink; 
	endif; ?>
	

<div class="pure-g">
<div class="pure-u-1-5">
<div class="result-cover id-<?php the_ID(); ?>">
<h1><a href="/bookgift/<?php echo $link; ?>/"><i class="icon-<?php echo $icon; ?>"></i></a></h1>
</div>
</div>

<div class="pure-u-4-5">
<div class="result-content">
<div class="auth">
<?php echo get_the_term_list( $post->ID, 'authors', '', ', ', '' ); ?>
</div>

<div class="result-ttl">
<a href="#gift-<?php the_ID(); ?>" class="popup-with-move-anim gift-link">
<?php the_title(); ?></a>
</div>

<div class="result-excerpt">
<?php the_excerpt(); ?>
</div>
</div>
</div>


<div class="bookcontent zoom-anim-dialog white-popup mfp-hide" id="gift-<?php the_ID(); ?>">

<div class="pure-g">
<div class="pure-u-2-3" >
<h3><strong><?php the_title(); ?></strong></h3>
<h4><?php echo get_the_term_list( $post->ID, 'authors', '', ', ', '' ); ?></h4>
<?php the_content(); ?>
</div>

<div class="pure-u-1-3" >
<div class="cover">
<?php if( get_field('cover') ):?>
<img src="<?php the_field('cover'); ?>" class="">
<?php else : ?>

<div class="emptygift id-<?php the_ID(); ?>  <?php if( has_term('book', 'bookgift') ): echo 'book'; elseif( has_term('patents', 'bookgift') ): echo 'patent'; else : echo 'gift'; endif; ?>">
</div>

<?php endif; ?>	
</div>
</div>
</div>
</div>

</div>
