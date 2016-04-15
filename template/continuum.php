<?php
/*
Template Name: Механика сплошных сред
*/
get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/template/css/continuum.css">

<?php if (have_posts()) : while (have_posts()) : the_post(); 

$include = '';
if( get_field('chief') ): 
    $include = get_field('chief'); 
else : 
    $include = '521,559,24,22,109'; 
endif;

$semterms = '';
if( get_field('semterms') ): 
    $semterms = get_field('semterms'); 
else : 
    $semterms = 'lectures'; 
endif;

$chief = array( 
    'post_type'=>'employees',
    'orderby'=> 'date',
    'include' => $include,   
    'order'=> 'DESC' );

$pictofon = '';
if( get_field('pictofon') ):
    $attachment_id = get_field('pictofon');
    $size = "full";
    $pictofon = wp_get_attachment_image_src( $attachment_id, $size );
else : 
$pictofon[0] = 'https://c2.staticflickr.com/2/1458/25937173862_f766f8650e_h.jpg';
endif;

?>

<style>
    .continuum_wrap { background-image: url('<?php echo $pictofon[0]; ?>');}  
</style>

<div class="continuum_wrap">
   <div class="block">
    <div class="continuum_page-header">
        <div class="continuum_page-title">
<a href="/science_categories/<?php echo $semterms; ?>/" class="backlink"><i class="icon-arrow-left-1"></i> Научный семинар</a>
        <h2>«<?php the_title(); ?>»</h2>         
        </div>
    </div>
    
<?php 
$futrep = array( 
    'post_type' => 'science',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'post_status' => 'future',
    
    'tax_query' => array(
		array(
			'taxonomy' => 'science_categories',
			'field' => 'slug',
			'terms' => $semterms,
		),
	),

);
   
$continuum = get_posts( $futrep );  
foreach ($continuum as $post) : 
       
$postdate = get_the_time( 'j F', $post->ID ); 
$posttime = get_the_time( 'G:i', $post->ID ); 


$cur_terms = get_the_terms( $post->ID, 'science_authors' );   
$autors = ' ';
foreach($cur_terms as $cur_term){
    $term_id = $cur_term->term_id;
    if( get_field('weblink', 'science_authors_'.$term_id) ) :
    $link = get_field('weblink', 'science_authors_'.$term_id);
    else : endif;   
    $posit = '';
    if( get_field('webpos', 'science_authors_'.$term_id) ) :
    $pos = get_field('webpos', 'science_authors_'.$term_id);
    $posit = '<span class="position">'.$pos.'</span> ';
    else : endif;
	$autors = '<span>'.$posit.'</span> <a href="'.$link.'" class="sc_aithors-link">'. $cur_term->name .'</a>' ;
}        
?>

    <div class="continuum_future" data-time="<?php echo $postdate; ?> в <?php echo $posttime; ?>">
        <div class="continuum_future-report">
             
            <div class="continuum_future-entitle"><?php the_title(); ?></div>
            <div class="continuum_future-excerpt"><?php the_excerpt(); ?></div>
            <div class="continuum_future-author"><span>докладчик:</span> <?php echo $autors; ?></div>
            
        <!--        
           <div class="continuum_future-date">
        Cостоится <?php echo $postdate; ?> в <?php echo $posttime; ?>    
           </div>
        -->
        </div>
    </div>

<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
   

    
    <div class="continuum_page-terms">
      
     <div class="pure-g">

<div class="pure-u-1-2  pure-u-sm-1">
       
        <h3>Условия участия</h3>
        <div class="continuum_page-content">
            <?php the_content(); ?>
        </div>
        
        <h4>Ученый секретарь:</h4>   
<div class="continuum_page-secretry">
<div class="pointed"></div>
<?php 
$args = array( 
    'post_type'=>'employees',
    'include' => 574,
    'posts_per_page' => 1,);
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>
    <div class="continuum_sec">
        <div class="pure-g">
            <div class="pure-u-1-4">
               
 <div class="continuum_sec_img id-<?php the_ID(); ?>">
<?php if( get_field('photo') ):
    $attachment_id = get_field('photo');
    $size = "medium";
    $image = wp_get_attachment_image_src( $attachment_id, $size );?>
<style>.continuum_sec_img.id-<?php the_ID();?> {background-image: url(<?php echo $image[0]; ?>);}</style>
<?php else : endif; ?>
</div>
                
            </div>   
           
            <div class="pure-u-3-4">

                <div class="continuum_sec_nameblock">
                  
                   <div class="continuum_sec_rank">
<?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?>
                   </div> 
                            
                   <div class="continuum_sec_name">
<a href="" class="post-link" rel="<?php the_ID(); ?>" data-link="<?php echo home_url();?>/ajaxloader/"><?php the_title(); ?></a>
                   </div>
                   <div class="continuum_sec_cont">
<?php if( get_field('email') ):?>
<a href="mailto:<?php the_field('email'); ?>" class="peepcontl"><?php the_field('email'); ?></a>
<?php else : endif; ?>	
                   </div>      

                </div>

            </div>

        </div>
    </div>

    <?php wp_reset_postdata(); ?>
    <?php endforeach; ?> 
</div> 
 
        
    </div>
<div class="pure-u-1-2  pure-u-sm-1">

    <div class="continuum_page-form" id="page-form">
<?php // echo do_shortcode( '[contact-form-7 id="1779" title="continuum"]' ); ?>
<?php echo do_shortcode( '[contact-form-7 id="2054" title="mech of cont"]' ); ?>
    </div>
            <!-- likely-small -->
    <div class="likely  likely-light" data-single-title="Поделиться">
		<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
		<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
		<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
		<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
    </div>
    
</div>     
                  
     </div> 
          
    </div>
  </div> 
  
<div class="continuum_page-grad"></div>  
</div>
<?php endwhile; else : ?>
<?php endif; ?> 

<div class="continuum_page-chiefs">
    <div class="block">
        <div class="continuum_chief-list center">

            <h3>Сопредседатели</h3>

            <div class="pure-g">

<?php $chiefs = get_posts( $chief );  
      foreach ($chiefs as $post) :  setup_postdata($post);?>
        <div class="pure-u-1-5  pure-u-sm-1">
    <?php include(TEMPLATEPATH . '/tp/peep.php'); ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<div class="block">
<div class="continuum_archive">

<h3 class="center">Семинары:</h3>

<?php 
$do_not_duplicate = array(); 
$month = '';   
$arg = array( 
    'post_type' => 'science',
    'posts_per_page'=> 15,
    'post__not_in' => $do_not_duplicate,
    'order' => 'DESC',
    'post_status' => array( 'publish', 'future' ),
    'tax_query' => array(
		array(
			'taxonomy' => 'science_categories',
			'field' => 'slug',
			'terms' => $semterms
        )
    ),

);
$query = new WP_Query( $arg );
if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); 
$postdate = get_the_time( 'j F, Y', $post->ID ); 
$posttime = get_the_time( 'G:i', $post->ID ); 
$status = get_post_status();
$do_not_duplicate[] = $post->ID; 
 
$cur_terms = get_the_terms( $post->ID, 'science_authors' );   
$autors = ' ';
foreach($cur_terms as $cur_term){
    $term_id = $cur_term->term_id;
  if( get_field('weblink', 'science_authors_'.$term_id) ) :
    $link = get_field('weblink', 'science_authors_'.$term_id);
  else : endif;   
    $posit = '';
  if( get_field('webpos', 'science_authors_'.$term_id) ) :
    $pos = get_field('webpos', 'science_authors_'.$term_id);
    $posit = '<span class="position">'.$pos.'</span> ';
  else : endif;
	$autors = $posit.'<a href="'.$link.'" class="sc_aithors-link">'. $cur_term->name .'</a>';
}    
    
$current_month = get_the_date( 'F' ); 
if ( $month != $current_month ) echo '<div class="breakup"></div>';   
    ?>
 
<div class="science-term_archive <?php echo $status; ?> ">
   <div class="science-term_date">
       <div class="futures_date">
         <?php echo $postdate; ?>  
       </div>
   </div>
    <div class="science-term_exerpt">
       <div class="science-term_title">
        <a href="<?php the_permalink(); ?>">
           <span class="title">
<?php if(has_post_format( 'video' ) ) : ?>
<i class="icon-video"></i>
<?php elseif( has_post_format( 'aside' ) ) : ?>
    <i class="icon-news"></i>
<?php else : ?>
    <i class="icon-news"></i>
<?php endif; ?> <?php the_title(); ?>:</span>
<span class="discription"><?php the_excerpt(); ?></span>
        </a>
       </div>
       <div class="science-term_dicript">
           <div class="pure-g">
               <div class="pure-u-4-5">
  <?php echo $autors; ?>	           
              </div>
 
           </div>
       </div> 
    </div>
</div> 
    

<?php $month = $current_month;  
 wp_reset_postdata(); ?>
<?php endwhile; else : ?>
<div class="continuum_archive-nonfound">
    Еще не было ни одного семинара. <a href="#page-form" class="scrollto">Регистрация.</a>
</div>
<?php endif; ?> 
    
</div>
</div>

<?php get_footer(); ?>