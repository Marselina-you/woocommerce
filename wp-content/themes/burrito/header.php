<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body style="background-color:black" <?php body_class(); ?>>


<div id="page" class="site">

	<header id="masthead" class="site-header header">
	<?php $logo_id = carbon_get_theme_option('est_header_logo'); 
	$logo = $logo_id ? wp_get_attachment_image_src($logo_id , 'full') : '';
	//get_vd($logo);?>


	<?php if (is_front_page() && is_home()) :
		if ($logo_id) :	?>
		<h1>
			<a href="<?php echo home_url('/');?>"> <img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">
			</a>
		</h1>
			<?php else: ?>
			<h1>
				<a href="<?php echo home_url('/');?>">
					<?php echo $site_name; ?><span><?php echo $site_decs; ?></span>
				</a>
			</h1>
		<?php endif;?>
	<?php else:
		if ($logo_id) :	?>
		<h1>
			<img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">
			
		</h1>
	<?php else: ?>
		<h1>
	
				<?php echo $site_name; ?><span><?php echo $site_decs; ?></span>

		</h1>
	<?php endif;?>
	<?php endif;?>

	?>
		<?php
		/**
		 * header_parts hook.
		 *
		 * @hooked estore_header_modal - 10
		 * @hooked estore_container_start - 15
		 * @hooked estore_header_icon_login - 20
		 * @hooked estore_header_logo - 30
		 * @hooked estore_header_search - 40
		 * @hooked estore_header_card - 50
		 * @hooked estore_container_end - 55
		 * @hooked estore_header_navi - 60
		 *
		 */
		do_action('header_parts');
		?>
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
	