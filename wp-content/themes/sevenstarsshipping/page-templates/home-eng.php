<?php

/**
 * Template Name: Home English Page
 *
 * The template for the full-width page.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();

?>

<!-- <section class="home-slide">
	<?= do_shortcode('[metaslider id="12"]'); ?>
</section> -->
<!-- <?= do_shortcode('[post-carousel id="55"]'); ?> -->

<div class="Slider">
	<?php
	$args = array(
		'post_type' => 'slider',
		'post_status' => 'publish',
	);
	$query = new WP_Query($args);

	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();

	?>
			<?php $subtitle = get_post_meta($post->ID, 'subtitle', true); ?>
			<?php $learn_more = get_post_meta($post->ID, 'learn_more', true); ?>
			<div class="banner_home">
				<?php the_post_thumbnail('full') ?>
			</div>
			<div class="container">
				<div class="slider_item">
					<div class="slider_item_content">
						<h1>THE BEST <br> TRANSPORT SERVICE EVER</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<a href="<?= $learn_more; ?>" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
	<?php
		endwhile; // End of the loop.

	endif;
	?>
</div>
<div class="container">
	<div class="welcome_7stars">
		<?php
		$arg = array('post_type' => 'welcome-shipping');
		$query = new WP_Query($arg);
		while ($query->have_posts()) : $query->the_post();
		?>

			<?php $welcome_title = get_post_meta($post->ID, 'welcome_title', true); ?>
			<?php $more_about_us = get_post_meta($post->ID, 'more_about_us', true); ?>

			<section class="welcome_section">
				<div class="col-md-6">
					<h2>WELCOME TO<br> 7 STARS SHIPPING CO.,LTD</h2>
					<p>Ut adipiscing ullamcorper egestas fermentum magnis arcu donec lobortis habitasse. Iaculis id nunc sit non.
						Leo, urna non feugiat proin morbi pharetra in. Nunc morbi massa sagittis vel in etiam tempor tristique. Sed dignissim aliquam arcu eros lorem gravida donec tristique urna.
						Ultricies pharetra odio vulputate quis aliquam eget eget. Congue sed adipiscing sollicitudin vitae.
					</p>
					<a href="<?= $more_about_us; ?>" class="btn btn-primary">More About Us</a>
				</div>
				<div class="col-md-6">
					<?php the_post_thumbnail('full') ?>
				</div>
			</section>
		<?php endwhile; ?>
	</div>
</div>

<div class="our_services">
	<div class="container">
		<section class="welcome_section">
			<h1 class="text-center">OUR SERVICES</h1>
			<?php
			if (have_posts()) : $my_query = new WP_Query('post_type=post&cat=17&showposts=-1&orderby=publish_date&order=ASC');
				while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<?php $icons = get_field('icons'); ?>

					<!-- the loop -->
					<div class="col-md-4">
						<div class="services_blk">
							<?php the_post_thumbnail('full') ?>
							<div class="icons"><img src="<?php echo $icons; ?>" alt=""></div>
							<div class="content_blk">
								<h4><?php the_title(); ?></h4>
								<p><?php the_content(); ?></p>
								<a href="<?= get_permalink(); ?>" class="details_btn">MORE DETAILS</a>
							</div>
						</div>
					</div>
			<?php
				endwhile;
			endif;
			?>
		</section>
	</div>
</div>

<div class="why_choose_us">
	<div class="container">
		<section class="choose_section">
			<h1 class="text-center-service">WHY CHOOSE US</h1>
			<div class="col-md-4">
				<div class="choose_blk">
					<div class="choose_img">
						<img src="<?= get_site_url(); ?>/media/2022/08/secure.png" alt="">
					</div>
					<div class="choose_content">
						<h4>SECURED SERVICES</h4>
						<p>Aliquam etiam porttitor vehicula leo, tortor maecenas. Morbi vulputate in dui sit. Eget purus sit fringilla viverra in.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="choose_blk">
					<div class="choose_img">
						<img src="<?= get_site_url(); ?>/media/2022/08/fast-deliver.png" alt="">
					</div>
					<div class="choose_content">
						<h4>FAST DELIVERY</h4>
						<p>Aliquam etiam porttitor vehicula leo, tortor maecenas. Morbi vulputate in dui sit. Eget purus sit fringilla viverra in.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="choose_blk">
					<div class="choose_img">
						<img src="<?= get_site_url(); ?>/media/2022/08/support.png" alt="">
					</div>
					<div class="choose_content">
						<h4>24/ SUPPORT</h4>
						<p>Aliquam etiam porttitor vehicula leo, tortor maecenas. Morbi vulputate in dui sit. Eget purus sit fringilla viverra in.</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>


<?php get_footer(); ?>
<style>
	body {
		background-color: #ffffff;
	}

	.why_choose_us {
		margin-bottom: 6rem;
	}

	.choose_blk {
		text-align: center;
	}

	.choose_img img {
		width: 90px;
	}

	.choose_content p {
		text-align: center;
		color: #1D1D21;
	}

	.banner_home img {
		width: 100%;

	}

	.slider_item {
		position: absolute;
		bottom: 30rem;
	}

	.navbar .navbar-header .navbar-brand p {
		padding: 0 !important;
	}

	.slider_item_content h1,
	p {
		color: #ffffff;
	}

	.slider_item_content a.btn.btn-primary {
		background: #E11616;
		border-radius: 0 !important;
	}

	section.welcome_section {
		margin-top: 6rem;
		margin-bottom: 6rem;
		display: inline-block;
	}

	section.welcome_section p {
		color: #1D1D21;
	}

	section.welcome_section a.btn.btn-primary {
		background: #E11616;
		border-radius: 0 !important;
	}

	.welcome_section h2 {
		margin-top: 0px;
	}

	.content_blk {
		text-align: center;
		padding: 22px;
	}

	.services_blk {
		background: #fff;
		min-height: 500px;
	}

	.our_services {
		background: url(../wp-content/uploads/2022/08/service.jpg) no-repeat center center;
	}

	.content_blk a {
		background: none;
		box-shadow: none;
		border-bottom: 1px solid #E11616;
		;
		color: #E11616;
	}

	.content_blk a:hover {
		background: none;
		box-shadow: none;
		color: #E11616;
	}

	.text-center {
		color: #fff;
		margin-bottom: 6rem;
	}

	.text-center h4,
	.text-center p {
		color: #1D1D21;

	}

	.text-center-service {
		color: #1D1D21;
		margin-bottom: 6rem;
		margin-top: 6rem;
		text-align: center;
	}

	@media only screen and (max-width: 1024px) {
		.slider_item {
			display: none;
		}

		.our_services {
			background: #ddd;
		}

		.services_blk {
			margin-top: 2rem;
		}
	}

	.content_blk h4 {
		font-size: 25px;
	}
</style>