<?php get_header(); ?>

<style>
#navig.gettop,
#navig.gettop #searchform,
#navig.gettop #searchform input[type=search]
		{background:transparent; color:#fff;} 
#navig.gettop a { color:#fff;}		
	
	#vote {
	background: #7f8c8d;
	padding:10% 0;
	-webkit-box-shadow: 0 10px 10px #fff;
	box-shadow: 0 10px 10px #fff;}
	
.vote {
	padding-bottom:1em;
	text-align: center;
	font-size:4em;
	color:#fff;
	font-family:'Roboto Slab', Helvetica Narrow, Arial, sans-serif;
    font-weight: 800;
	}
    .vote p {
        font-size: 0.3em;
        font-family:'PT Sans', Helvetica Narrow, Arial, sans-serif;
        font-weight: 400;
    }      
.vote .sec_line {
        font-size: 0.7em;
    font-weight: 300;
    }    

.exerpt {
	background:#fff;
	padding:2em;
    margin:1em;
-webkit-box-shadow:1px 2px 10px 0 rgba(0, 0, 0, .5);
	box-shadow:1px 2px 10px 0 rgba(0, 0, 0, .5);
}
.exerpt a {
    display: block;
	color:#313131;
	font-size:1.3em; 
	font-weight:bold;
  }	
.years_ttl {
        color: #fff;
    text-align: center;
    }
</style>

<div id="vote" class="voter">
	
<div class="vote">
	
<div class="block">
<div class="pure-g">
	<div class="pure-u-1">

		Публикации 
		<div class="sec_line">сотрудников Института</div>
		<p>в рецензируемых отечественных и ведущих зарубежных периодических изданиях</p>
		<a id="navline"></a>

	</div>
	
</div>

</div>

</div>
	
<div class="block">
    
<?php  
function posts_by_year() {
  // array to use for results
  $years = array();

  // get posts from WP
  $posts = get_posts(array(
    'numberposts' => -1,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name'  => 'reports',
  ));

  // loop through posts, populating $years arrays
  foreach($posts as $post) {
    $years[date('Y', strtotime($post->post_date))][] = $post;
  }

  // reverse sort by year
  krsort($years);

  return $years;
}
        ?>

<?php foreach(posts_by_year() as $year => $posts) : ?>
  <div class="years_ttl"><h2><?php echo $year; ?></h2></div>
<div class="pure-g">
    <?php foreach($posts as $post) : setup_postdata($post); ?>
      
<div class="pure-u-1-4">
<div class="exerpt center">


<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>


	
</div>
</div>
      
    <?php endforeach; ?>
    </div>
<?php endforeach; ?>
        
    
		
		
	
</div>
</div>

	
<?php get_footer(); ?>