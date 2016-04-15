<?php get_header(); ?>
<style>

    .finside {
  padding: 1em 0;
  border-bottom: 1px solid #ddd;
}

.finside .conf {
  background: #fff;
  padding: 1em;
}

.finside:nth-child(even) .conf {
  background: #ecf0f1;
}

.conf .dates {
  font-size: 0.8em;
  color: #7f8c8d;
}

.conf .conftitle {
  font-size: 1.6em;
  padding: 0.3em 0;
}

.conf .conftitle a {
}

.conf .conftype {
  font-size: 0.8em;
}

.conf .conftype a {
}

.archdownload {
}

.archdownload ul {
  margin: 0.5em 0;
  padding: 0;
}

.archdownload ul li {
  display: inline-block;
}

.archdownload ul li a {
  font-size: 0.8em;
  color: #7f8c8d;
}	
		
		/* subscribe */
.mailchimp {
  padding-left: 1em;
}

.mailchimp form input {
  width: 100%;
  margin: 0.5em auto;
  padding: 1em;
  border: 1px solid #ccc;
}

.mailchimp form input[type="submit"] {
  background: #3498db;
  border: 1px solid #7f8c8d;
  color: #fff;
  outline: 0;
}

.mailchimp form input:focus {
  outline: 0;
  color: rgba(0,0,0,0.7);
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -ms-transition: all 0.4s;
  transition: all 0.4s;
  border: 1px solid #34495e;
}

.mchwhy {
  font-size: 0.8em;
  color: #7f8c8d;
}	
    
</style>

<!-- TTL -->
<div class="block">
<div class="pure-g">
<div class="pure-u-1">
<div class="singttl"><h1>Архив конференций ИПРИМ РАН</h1></div>
<hr>
<a id="navline"></a>
</div>
</div>
</div>


<div class="archconf">

<div class="block"><div class="pure-g">
<div class="pure-u-3-4">
<?php 
$args = array( 
	'post_type'=>'conference',
	'posts_per_page' => 20, 
	'order'=> 'DESC',
	'orderby' =>'date', );
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="finside">

<div class="conf ">


<div class="dates">
<?php if( get_field('dates') ):?>
<?php the_field('dates'); ?>
<?php else :?>
<?php endif; ?>	
</div>
<div class="conftitle">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a>
</div>
<div class="conftype">
<?php the_terms( $post->ID, 'typeconf', ''); ?>
</div>




<div class="adown">
<div class="archdownload"><?php the_field('download'); ?></div>
</div>
</div>
</div>


<?php endwhile; else : ?>
<?php endif; ?>
</div>

<div class="pure-u-1-4">

<div class="mailchimp">

<?php echo do_shortcode( '[mc4wp_form]' ); ?>

<div class="mchwhy">
<p>После подтверждения подписки вы будете получать информацию о всех проводимых в ИПРИМ РАН конференциях.</p>

<p>Подписка осуществляется через сервис <a href="http://mailchimp.com"><img src="<?php bloginfo("template_url"); ?>/img/mailchimps.svg" height="30px"></a>.</div>
</div>

</div>
</div></div>

</div>


<?php if (function_exists('wp_corenavi')) :?> 
<div class="block"><div class="pure-g">
<div class="pure-u-1" >

<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>

</div>
</div></div>
<?php else : endif; ?>


<?php get_footer(); ?>