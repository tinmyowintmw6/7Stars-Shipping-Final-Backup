<?php

/**
 * Template Name: About Page
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
          <h2>ยินดีต้อนรับจาก 7 Stars Shipping Co.,Ltd.</h2>
          <p>7Stars shipping company Limited ก่อตั้งขึ้นในปี 2565 ในประเทศไทย.
            7Stars shipping เป็นบริการด้านลอจิสติกส์ทั่วโลกที่กว้างขวางพร้อมการรับและส่งมอบโอกาสมากมายในการยกระดับการเตรียมการนับไม่ถ้วน.
            ไม่ว่าสินค้าจะใหญ่หรือเล็กแค่ไหน 7stars มีความเชี่ยวชาญระดับสากลที่นำความรู้ด้านการขนส่งที่ทุ่มเทที่สุดมาไว้ที่ประตูของคุณ.</p>
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
            <h3>วิสัยทัศน์</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur sagittis, nisl nisi consectetur nisi, euismod nisl nisi eget consectetur sagittis.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="vision">
            <img src="<?= get_site_url(); ?>/wp-content/uploads/2022/08/mission.png" alt="">
            <h3>ภารกิจ</h3>
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