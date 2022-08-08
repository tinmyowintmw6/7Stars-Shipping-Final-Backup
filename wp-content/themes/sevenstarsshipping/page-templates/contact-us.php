<?php

/**
 * Template Name: Contact Us Page
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
      <div class="contact_us">
        <div class="col-md-8">
          <h4>ติดต่อเรา</h4>
          <?= do_shortcode('[contact-form-7 id="11" title="Contact form 1"]'); ?>
        </div>
        <div class="col-md-4">
          <h4>ข้อมูลติดต่อ</h4>
          <div class="contact_info">
            <ul>
              <li>
                <h6>อีเมล</h6>
                <span>
                  info@7starsshipping.com
                </span>
              </li>
              <li>
                <h6>โทรศัพท์</h6>
                <span>
                  <span>+66 808 055 094, +66 808 055 094</span>
                </span>
              </li>
              <li>
                <h6>ที่อยู่</h6>
                <span>
                  <span>201/148, Sriphanit Road, Mae Sot, TAK 63110, Thailand.</span>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30569.752255488133!2d98.55668574941438!3d16.715919561513978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ddbda33d818e6d%3A0x30346c5fa8a7750!2sMae%20Sot%2C%20Mae%20Sot%20District%2C%20Tak%2063110%2C%20Thailand!5e0!3m2!1sen!2smm!4v1659585883870!5m2!1sen!2smm" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <?php get_footer(); ?>
  <style>
    .page-id-41 .contact-footer {
      display: none;
    }

    .contact_info ul li img {
      background: #245ACE;
      padding: 10px;
      width: 35px;
    }

    .contact_info ul li:nth-child(1):before {
      position: absolute;
      content: "";
      width: 41px;
      height: 41px;
      left: -38px;
      background-image: url(../../wp-content/uploads/2022/08/env.png);
    }

    .contact_info ul li:nth-child(2):before {
      position: absolute;
      content: "";
      width: 41px;
      height: 41px;
      left: -38px;
      background-image: url(../../wp-content/uploads/2022/08/phone-1.png);
    }

    .contact_info ul li:nth-child(3):before {
      position: absolute;
      content: "";
      width: 41px;
      height: 41px;
      left: -38px;
      background-image: url(../../wp-content/uploads/2022/08/location-1.png);
    }

    .contact_info ul li {
      position: relative;
      list-style: none;
      padding-left: 20px;
      margin-bottom: 40px;
    }

    .contact_info h6 {
      margin-bottom: -7px;
      font-size: 16px;
    }

    .contact_us {
      display: inline-block;
      margin-top: 6rem;
      margin-bottom: 6rem;
    }

    .form-group .form-control {
      margin-bottom: 2rem;
    }
  </style>