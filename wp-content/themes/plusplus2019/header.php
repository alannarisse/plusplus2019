<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600|Roboto:300,300i,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<?php global $template_var;
echo $template_var; ?>
<body <?php body_class(); ?> class="ideas">
	<nav>
		<a href="<?php echo home_url('/'); ?>" class="logo">
			<?php if ( is_front_page() ){
				get_template_part('images/inline', 'logo_lav.svg');
			} elseif ( is_home() ){
				get_template_part('images/inline', 'logo_blk.svg');
			} else {
				get_template_part('images/inline', 'logo_teal.svg');
			} ?>
		</a>
		<div class="desktop">
		<?php
			$args = array(
				'theme_location' => 'primary'
			);
		?>

		<?php wp_nav_menu($args); ?>
		</div>
		<div class="icon">
			<div class="hamburger"></div>
		</div>
	</nav>