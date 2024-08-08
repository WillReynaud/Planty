<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<section class="header">

	<div class="site-logo">
			<?php 
			// Affiche le logo personnalisé
			if (function_exists('the_custom_logo')) {
				the_custom_logo(); 
			}
			?>
	</div>
	
	<?php
	wp_nav_menu([
		'theme_location' => 'main_menu',
		'container' => 'nav',
		'menu_class' => 'navmenu'
	])
	?>

</section>