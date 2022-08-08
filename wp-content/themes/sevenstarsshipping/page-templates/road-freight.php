<?php

/**
 * Template Name: Road Fright Page
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
      <div class="service_section">
        <div class="services_details">
          <h4 class="title_service">VITAE CONVALLIS NIBH</h4>
          <p>Aenean tristique enim quam vel amet habitant magna. Eu tellus odio tristique adipiscing ut eget at habitant mi.
            Vitae, volutpat sit volutpat at vitae pulvinar elementum. Sollicitudin enim sem consequat viverra congue elit viverra.
            Venenatis augue justo in in ipsum vitae curabitur commodo. Iaculis egestas pharetra neque arcu platea risus amet. Ipsum tortor tempus etiam a libero neque.
            Blandit senectus posuere condimentum fermentum tempus nibh dui. Arcu odio pretium integer eget faucibus. <br><br>
            Lectus adipiscing faucibus suspendisse fusce mauris vitae. Nibh aliquam aliquet eu montes, duis lacus. Hendrerit integer a neque dapibus ut odio.
            Tincidunt montes, nibh vulputate ipsum. Mattis sit sed cursus blandit nisi, tortor. Cum imperdiet sem rhoncus mattis nulla vestibulum suscipit lorem vulputate.
            Mauris elementum eget tortor, suspendisse tortor risus interdum. Id amet molestie ac maecenas sed amet maecenas in.
          </p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="service-details_image">
              <div class="service-image"><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/08/Image-9-2.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="service-details_image">
              <div class="service-image"><img src="<?= get_site_url(); ?>/wp-content/uploads/2022/08/Image-8-1.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class="services_details">
          <h4 class="title_service">TELLUS SED TINCIDUNT</h4>
          <p>Aenean tristique enim quam vel amet habitant magna. Eu tellus odio tristique adipiscing ut eget at habitant mi.
            Vitae, volutpat sit volutpat at vitae pulvinar elementum. Sollicitudin enim sem consequat viverra congue elit viverra.
            Venenatis augue justo in in ipsum vitae curabitur commodo. Iaculis egestas pharetra neque arcu platea risus amet. Ipsum tortor tempus etiam a libero neque.
            Blandit senectus posuere condimentum fermentum tempus nibh dui. Arcu odio pretium integer eget faucibus.
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

  .service_section {
    margin-top: 6rem;
    margin-bottom: 6rem;
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