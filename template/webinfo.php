<?php
/*
Template Name: Поддержка
*/
get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/template/css/webinfo.css">
<?php
$today=date("Ymd");
$y_ago=date('Y-m-d', strtotime('2014-10-16'));
    
$metr_ID = "26645817";
$token ="e8abdd6746504c9b9ff3cbe58b99c1f0";
$metrika_url = "http://api-metrika.yandex.ru/stat/traffic/summary.json?id=$metr_ID&pretty=1&date1=$y_ago&date2=$today&oauth_token=$token";	
		
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL,$metrika_url);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
// curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$metrika = curl_exec ($ch);
curl_close($ch);
 
$metrika_o = json_decode($metrika);

$visits =  $metrika_o->totals->visits;    
$views =  $metrika_o->totals->page_views;
$new_visitors =  $metrika_o->totals->new_visitors; 
?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>    

<div class="web-info">
    <div class="web-info_header">
       
       <div class="block">
        <div class="info-titel">
        <h1><?php the_title(); ?></h1>
        </div>

    </div>
   </div>
    
    <div class="web-info_cheif hide">
       <div class="block">
        <div class="cheif-photo"></div>
        

        
<?php 
$editors = get_users('blog_id=1&orderby=nicename&order=DESC&role=bigboss'); 

foreach($editors as $user) :
    $user_pic = $user->user_login;
    $the_user = get_user_by('login', $user_pic);
    $the_user_id = $the_user->ID;
    $the_user_url = $the_user->user_url;
   ?> 

    
  <div class="cheif-text">
     
      <div class="cheif-contact">
      
<a class="web_info-card" href="<?php echo $the_user_url; ?>"><i class="icon-nuclear"></i></a>
     
      </div>
      
      <div class="cheif-name">
    <a href="<?php echo $the_user_url; ?>"> 
  <?php 
    $string = $user->display_name;
    $tok = strtok($string, " ");
    $cunt=0;                     
		while ($tok) {
			$cunt++;
		echo "<span class='id-".$cunt."'>".$tok."</span>";
    $tok = strtok(" ");} ?>  
        </a>    
      </div>
      <div class="cheif-posit">
      
      <?php echo get_user_meta($the_user_id, 'position', true); ?>
      
      </div>

      
 </div>  
 

   

  

<?php endforeach;?>
        
       </div> 
    </div>
    
    <div class="web-info_content">
        <div class="block">
            <?php the_content(); ?>
        </div>
    </div>
    
    <div class="web-info_board">
        
        <div class="block">
            <div class="pure-g">
               
<?php 
$editors = get_users('blog_id=1&orderby=nicename&order=DESC&role=iam-editors'); 

foreach($editors as $user) :
    $user_pic = $user->user_login;
    $the_user = get_user_by('login', $user_pic);
    $the_user_id = $the_user->ID;
    $the_user_url = $the_user->user_url;
    $avatar = get_wp_user_avatar_src($the_user_id, 'full'); ?> 
  <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-4 pure-u-lg-1-4 pure-u-xl-1-4 persone"> 
       
  <div class="web_info-block">

    <a class="web_info-card" href="<?php echo $the_user_url; ?>">
               <div class="web_info-img id<?php echo $the_user_id; ?>">
<style>   
.web_info-img.id<?php echo $the_user_id; ?>
    {background-image:url('<?php echo $avatar;?>' );}             
</style>    
              </div>
               <div class="web_info-description">
                   <div class="web_info-name">
<?php 
    $string = $user->display_name;
    $tok = strtok($string, " ");
    $cunt=0;                     
while ($tok) {
    $cunt++;
echo "<span class='id-".$cunt."'>".$tok."</span>";
    $tok = strtok(" ");} ?>   
                    
                   </div>
 <div class="web_info-position">
  <?php echo get_user_meta($the_user_id, 'position', true); ?>
    </div>               
                </div>
           </a>
</div>
        
    </div> 
<?php endforeach;?>
                
            </div>
        </div>
        
    </div>
    
    <div class="web-info_special">
       <div class="block">
          <div class="info-stat">
          <div class="statistics" >

            <div class="pure-g">
             <div class="pure-u-1-2">
                 <i class="icon-user"></i> <?php echo $visits; ?>
             </div>
             <div class="pure-u-1-2">
                 <i class="icon-eye"></i> <?php echo $views; ?>
             </div>
            </div> 

        </div> 
        </div>
        
        <div class="banners center">
        <h3>Special cases</h3>
        <a href="/science" class="plashka" style="color:#fff; display:inline-block; background-color:#16a085; background-image:url("");"><span>Блог</span></a>    
        <a href="http://mkmk.ras.ru" class="plashka" style="color:#fff; display:inline-block; background-color:#16a085; background-image:url("");"><span>Журнал</span></a>    
        </div>
      </div> 
     </div>
    
</div>

<?php endwhile; else : ?>
<?php endif; ?> 


<?php get_footer(); ?>