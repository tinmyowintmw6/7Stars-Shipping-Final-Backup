<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
$wrapper_div_classes = 'wrapper ';
if (is_single()) {
	$wrapper_div_classes .= join(' ', get_post_class());
}

$header_class = '';
$hide_top_bar = get_theme_mod('hestia_top_bar_hide', true);
if ((bool) $hide_top_bar === false) {
	$header_class .= 'header-with-topbar';
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset='<?php bloginfo('charset'); ?>'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>




</head>

<body <?php body_class(); ?>>
	<div class="<?php echo esc_attr($wrapper_div_classes); ?>">
		<header class="header <?php echo esc_attr($header_class); ?>">
			<?php do_action('hestia_do_header'); ?>
		</header>
		<style>
			@font-face {
				font-family: 'kanite';
				src: url(http://localhost:88/sevenstarsshipping.com/wp-content/fonts/kanit-regular.Otf);
			}
			a, h1, h2, h3, h4, h5, h6 {
				font-family: 'kanite';
			}

			body{
				font-family: 'kanite';
			}
			.icons img {
				background: #245ACE;
				border-radius: 50%;
				padding: 10px;
				width: 50px;
				height: 50px;
				position: relative;
				top: -2rem;
			}

			.icons {
				text-align: center;
			}

			.page-header .text-center {
				padding: 15px !important;
				margin-left: 0 !important;
				text-align: left;
			}

			.main-raised {
				margin: 0px !important;
				border-radius: 0px !important;

			}

			.navbar .navbar-header .navbar-brand p {
				padding: 0 !important;
			}

			.navbar.navbar-not-transparent .hestia-transparent-logo {
				display: block !important;
			}

			.content_blk p {
				overflow: hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 2;
				line-clamp: 2;
				-webkit-box-orient: vertical;
			}

			.form-group .form-control {
				border: 1px solid #ddd;
				padding: 8px;
			}

			.form-control,
			.form-group .form-control {
				background-image: none !important;
			}

			input.wpcf7-form-control.has-spinner.wpcf7-submit {
				border-radius: 0px;
				background: #E11616;
			}
			.navbar .navbar-nav>li a{
				font-size: 18px;
			}
		</style>