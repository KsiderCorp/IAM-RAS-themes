<?php
  function icon($atts) {
   extract(shortcode_atts(array(
      'class' => 'icon-phone-sign',
      ), $atts));
return '<i class="'. $class .'" /></i>';
}
add_shortcode('i', 'icon');  



function plashka( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
			'color' => '#fff',
			'bgc' => '#16a085',
            'bgi'=> '',
            'url'=> '',
            'display'=> 'inline-block',
		), $atts )
	);
 $plashka = "<a href='".$url."' class='plashka' style='color:".$color."; display: ".$display."; background-color:".$bgc."; background-image:url(".$bgi.");'><span>".$content."</span></a>";   
return $plashka;
}
add_shortcode( 'plashka', 'plashka' );



function employ_add( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'id' => '',
			'pp' => 'extend',
		), $atts )
	);

	// Code
$post_link = get_permalink($id); 
$addemp = '<a href="'.$post_link.'" class="post-link" rel="'.$id.'"  data-link="/ajaxloader/">'.$content.'</a>';
$addemp .= "<script>var element = document.createElement('div'); 
element.innerHTML = '<div id=\"single-post-container\"></div>', element.className = 'zoom-anim-dialog white-popup mfp-hide', element.id = '".$pp."'; 
document.body.appendChild(element);</script>";

return $addemp;
}
add_shortcode( 'pep', 'employ_add' );

function timeline_add( $date ) {
	// Attributes
	extract( shortcode_atts(
		array(
			'd' => '',
			't' => '',
			'e' => '',
			'col' => 'green'
		), $date )
	);

	// Code
   
$datet = '<div class="tline-date '.$col.'">'.$d.'</div>
		<div class="tline-head">'.$t.'</div>
		<div class="tline-descript">'.$e.'</div>';   
return $datet;
}
add_shortcode( 'date', 'timeline_add' );


function sc_liste($atts) {
extract(shortcode_atts(array(
"id" => '5',
"grid" => '5',
), $atts));
global $post;
$myposts = get_posts('include='.$id.'&post_type=employees');
$retour='<div class="pure-g">';
foreach($myposts as $post) :
setup_postdata($post);

if( get_field('photo') ):
$attachment_id = get_field('photo');
$size = "thumbnail"; 
$image = wp_get_attachment_image_src( $attachment_id, $size );
else : endif; 

if( get_field('rank') ): 
    $rank = get_field('rank'); 
    else : 
	$rank = ''; 
	endif; 
    
$ttele = the_title("","",false);
$post_links = get_permalink();
$pagid = get_the_ID();    
$addition = '
<div class="pure-u-1-'.$grid.'">
<div class="addcard">
<a href="'.$post_links.'" class="post-link" rel="'.$pagid.'"  data-link="/ajaxloader/">
<div class="addpic" style="background-image: url('. $image[0] .');}"></div>

<div class="addname center">
<div class="addstaff center">'.$rank.'</div>
'.$ttele.'</div></a>
</div>
</div>
<div class="zoom-anim-dialog white-popup mfp-hide" id="cont-'.$pagid.'">
<div id="single-post-container"></div></div>';

$retour.= $addition;
wp_reset_postdata();
endforeach;
$retour.='</div>';
return $retour;
}
add_shortcode("be", "sc_liste");


function floate_block( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
			'fl' => 'left',
			'w' => '33%',
		), $atts )
	);
$br = '<div class="insideblock" style="float:'.$fl.'; width:'.$w.';">'.$content.'</div>';   
return $br;}
add_shortcode( 'bfl', 'floate_block' );



function emp_insert($eid) {
global $post;
$myposts = get_posts('include='.$eid.'&post_type=employees');
foreach($myposts as $post) :
setup_postdata($post);

if( get_field('rank') ): 
    $rank = get_field('rank'); 
    else : endif; 
if( get_field('phone') ): 
    $phone = get_field('phone'); 
    else : endif;
if( get_field('email') ): 
    $email = get_field('email'); 
    else : endif; 
    
$ttele = the_title("","",false);
$pagid = get_the_ID();    
$addition = '
<div class="fun-card">
<a href="#cont-'.$pagid.'" class="post-link" rel="'.$pagid.'"  data-link="/ajaxloader/">

<div class="addname">
'.$ttele.'</div></a>
	<div class="phone">'.$phone.'</div>
    <div class="phone"><a href="mailto:'.$email.'">'.$email.'</a></div>
 
<div class="zoom-anim-dialog white-popup mfp-hide" id="cont-'.$pagid.'">
<div id="single-post-container"></div></div>   
</div>';

$retour.= $addition;
wp_reset_postdata();
endforeach;

return $retour;
}


