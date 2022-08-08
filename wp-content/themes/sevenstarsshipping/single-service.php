<?php

/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();

do_action('hestia_before_single_post_wrapper');
?>

<div class="<?php echo hestia_layout(); ?>">
	<div class="blog-post blog-post-wrapper">
		<div class="container">
			<div class="service_section">
				<div class="services_details">
					<h4 class="title_service"><?php the_title() ?></h4>
					<p><?php the_content(); ?></p>
					</p>
				</div>
				<?php
				if (have_posts()) : $my_query = new WP_Query('post_type=post&cat=13&showposts=1&orderby=publish_date&order=DESC');
					while ($my_query->have_posts()) : $my_query->the_post(); 
					?>
						<?php $service_details_image_1 = get_field('service_details_image_1'); ?>
						<?php $service_details_image2 = get_field('service_details_image2'); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="service-details_image">
									<div class="service-image"><img src="<?php echo $service_details_image_1; ?>" alt=""></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="service-details_image">
									<div class="service-image"><img src="<?php echo $service_details_image2; ?>" alt=""></div>
								</div>

							</div>
						</div>
						
				<?php endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</div>

<!-- <?php
			//if ( ! is_singular( 'elementor_library' ) ) {
			//	do_action( 'hestia_blog_related_posts' );
			//}
			?> -->
<div class="footer-wrapper">
	<?php get_footer(); ?>
	<style>
		.title_service {
			text-transform: uppercase;
		}

		.content_blk {
			text-align: center;
			padding: 22px;
		}

		.services_blk {
			background: #fff;
			border: 1px solid #ddd;
		}

		.our_services {
			margin-top: 6rem;
			margin-bottom: 6rem;
		}

		.service_section {
			margin-top: 6rem;
			margin-bottom: 6rem;
			display: inline-block;
		}

		.service-details_image {
			margin: 2rem 0 2rem;
		}

		@media only screen and (max-width: 1024px) {

			.services_blk {
				margin-top: 2rem;
			}
		}
	</style>