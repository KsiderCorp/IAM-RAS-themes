<div class="pure-g">
<div class="pure-u-1" >
<h4>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h4>

<!--
class="post-link" rel="<?php the_ID(); ?>"  data-link="<?php echo home_url();?>/ajaxloader/"
-->

<div class="newsexcerpt">
<?php the_excerpt(); ?>
</div>

</div>
</div>
<div class="helpline">
<div class="pure-g">


<div class="pure-u-1-5">
<div class="comments">
<?php comments_popup_link('0  <i class="icon-chat"></i>', '1 <i class="icon-chat"></i>', '% <i class="icon-chat-2"></i>'); ?>
</div>
</div>
<div class="pure-u-1-5 ">
<div class="date"><?php the_time('d.m.Y '); ?></div>
</div>

<div class="pure-u-3-5">
<?php the_category(' / '); ?>
</div>

</div>
</div>

<hr>