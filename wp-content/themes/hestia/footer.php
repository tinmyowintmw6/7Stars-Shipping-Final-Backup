<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
?>
<div class="contact-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-title">
					<h1 class="consultation-title">Want to Get a Free <br> Consultation?</h1>
					<div class="contact-footer-txt">
						<p>Let Us Know !</p>
					</div>
				</div>
			</div>
			<a href="<?= get_site_url(); ?>/contact-us" class="btn btn-primary">CONTACT US</a>
		</div>
	</div>
</div>
<div>
	<?php do_action('hestia_do_footer'); ?>
</div>


<?php wp_footer(); ?>
</body>
<style>
	h1.consultation-title {
		color: #fff;
	}

	.contact-footer {
		background: url(http://localhost:88/sevenstarsshipping.com/wp-content/uploads/2022/08/consultation.png) no-repeat center center;
		text-align: center;
		height: 480px;
	}

	.footer-title {
		display: block;
		margin-top: 12rem;
	}

	.contact-footer a.btn.btn-primary {
		background-color: #E11616;
		border-radius: 0 !important;
	}
</style>

</html>