<style>
.result-cover.id-<?php the_ID(); ?> {
	color:#c0392b;}</style>

<div class="pure-g">
<div class="pure-u-1-5">
<div class="result-cover id-<?php the_ID(); ?>">
<h1><i class="icon-information-circle"></i></h1>
</div>
</div>

<div class="pure-u-4-5">
<div class="result-content"><div class="result-ttl">
<a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a>
</div>

<div class="result-excerpt">
<?php the_excerpt(); ?>
</div></div>
</div>
</div>