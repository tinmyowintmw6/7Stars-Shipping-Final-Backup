<?php

/**
 * Template Name: Our Service Eng Page
 *
 * The template for the full-width page.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();

/**
 * Don't display page header if header layout is set as classic blog.
 */
do_action('hestia_before_single_page_wrapper'); ?>
<div class="<?php echo hestia_layout(); ?>">

  <div class="container">
    <div class="row">
      <div class="our_services">
        <div class="container">
          <section class="welcome_section">
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
    </div>
  </div>
</div>

<?php get_footer(); ?>
<style>
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
  @media only screen and (max-width: 1024px) {

		.services_blk {
			margin-top: 2rem;
		}
	}
</style>