<?php

/**
 * Template Name: About English Page
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
      <div class="col-md-12">
        <div class="about-content">
          <h2>WELCOME TO 7 STAR SHIPPING CO.,LTD.</h2>
          <p>Aenean tristique enim quam vel amet habitant magna. Eu tellus odio tristique adipiscing ut eget at habitant mi.
            Vitae, volutpat sit volutpat at vitae pulvinar elementum. Sollicitudin enim sem consequat viverra congue elit viverra.
            Venenatis augue justo in in ipsum vitae curabitur commodo. Iaculis egestas pharetra neque arcu platea risus amet. Ipsum tortor tempus etiam a libero neque.
            Blandit senectus posuere condimentum fermentum tempus nibh dui. Arcu odio pretium integer eget faucibus.<br><br>
            Lectus adipiscing faucibus suspendisse fusce mauris vitae. Nibh aliquam aliquet eu montes, duis lacus.
            Hendrerit integer a neque dapibus ut odio. Tincidunt montes, nibh vulputate ipsum. Mattis sit sed cursus blandit nisi, tortor.
            Cum imperdiet sem rhoncus mattis nulla vestibulum suscipit lorem vulputate. Mauris elementum eget tortor, suspendisse tortor risus interdum.
            Id amet molestie ac maecenas sed amet maecenas in.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="vision_mission">
    <div class="container">
      <div class="section_blk">
        <div class="col-md-6">
          <div class="vision">
            <img src="<?= get_site_url(); ?>/wp-content/uploads/2022/08/vision.png" alt="">
            <h3>VISION</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur sagittis, nisl nisi consectetur nisi, euismod nisl nisi eget consectetur sagittis.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="vision">
            <img src="<?= get_site_url(); ?>/wp-content/uploads/2022/08/mission.png" alt="">
            <h3>MISSION</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur sagittis, nisl nisi consectetur nisi, euismod nisl nisi eget consectetur sagittis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
  <style>
    .about-content {
      margin-top: 6rem;
      margin-bottom: 6rem;
    }

    .vision_mission {
      background: #F5F5F6;
      text-align: center;
    }

    .section_blk {
      display: inline-block;
      padding-bottom: 5rem;
      padding-top: 5rem;
    }

    .section_blk img {
      width: 65px;
      height: 65px;
    }
  </style>