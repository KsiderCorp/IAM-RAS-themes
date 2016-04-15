<?php 
$scienceblog = array( 
'post_type'=>'science',
'posts_per_page' => 1, 
'order'=> 'ASC', ); 

$postslist = get_posts( $scienceblog );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<style>
a.scienceblog {
    display: block;
    background:#2c3e50 url('https://c2.staticflickr.com/4/3919/15107215556_6b12f47dba_b.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    position: relative;
    }
    
.science-logo {
        width: 300px;
        margin: 0 auto;
        padding: 5% 0;
        text-align: center;
    }
a.scienceblog{
    color: #fff;
    text-decoration: none;
    font-size: 2em;
    }
    
a.scienceblog .shadow {
    position: absolute;
    top: 0;right: 0;left: 0;bottom: 0;
    background-color:#fff;
    opacity: 0.2;
    z-index: 1;
    
    background: #000;
    background-repeat: repeat;
    background-size: 4px;
    }
    
a.scienceblog:hover .shadow {
    opacity: 0.6;    
    }   
</style>


<a href="/science" id="scienceblog" class="scienceblog id-<?php the_ID(); ?>">
<div class="block">

    <div class="science-logo">
Научно-популярная деятельность
   </div>  

<div class="shadow animation"></div>
</div>
</a> 
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>