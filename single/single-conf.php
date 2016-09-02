<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/template/navstyle.php'); ?>
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/template/css/conference.css">

<?php if ( get_field('confend') == true ) { ?>
	<?php include(TEMPLATEPATH . '/tp/confer/closed.php'); ?>
		<?php } else { ?>
			<?php include(TEMPLATEPATH . '/tp/confer/current.php'); ?>
				<?php } ?>