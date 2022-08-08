<?php

/**
 * Template Name: Latest News Page
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
    <div class="latest_news-section">
      <div class="row">
        <?php
        $args = array(
          'post_type' => 'post',
          'cat' => 25,
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
          while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="col-md-4">
              <div class="latest_news-blk">
                <?php the_post_thumbnail('full') ?>
                <div class="latest_news-content">
                  <h4><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <div class="date">
                    <span>
                      <?php the_date('j F, Y'); ?>
                    </span>
                  </div>
                  <p><?php the_content(); ?></p>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
  <style>
    .latest_news-section {
      margin-top: 6rem;
      margin-bottom: 6rem;
    }

    .latest_news-content h4 {
      font-size: 19px;
      text-transform: uppercase;
    }

    .latest_news-content h4 a {
      color: #1D1D21;
    }

    .latest_news-content p {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      line-clamp: 2;
      -webkit-box-orient: vertical;
    }

    .date:before {
      position: absolute;
      content: "";
      width: 18px;
      height: 20px;
      background-image: url(../../wp-content/uploads/2022/08/date.png);
    }

    .date span {
      padding-left: 24px;
    }
  </style>