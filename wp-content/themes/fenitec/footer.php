<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenitec
 */

?>

<!-- Modal start -->
<div class="modal-cotalog hidden" id="modal-cotalog">
	<div class="modal-cotalog-header">
		<h3>Каталог</h3>
		<button class="close-btn" id="close-btn">
			<i class="fas fa-close"></i>
		</button>
	</div>

	<div class="modal-body">
		<?php
		echo do_shortcode('[contact-form-7 id="9787f3d" title="Контактная форма ru"]');
		?>
	</div>
</div>
<!-- Modal end-->

<!-- footer style three start -->
<div class="rts-footer-area-start fooetr-bg-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="left-footer-wrapper-3 pt--120 pb--80">
					<img width="400" src="<?= the_field('footer_logo', 'options');?>"
						alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div
					class="right-footer-wrapper-3 pt--120 pb--80 pl--120 pr--120 pl_md--0 pt_md--30 pl_sm--0 pt_sm--30">
					<div>
						<h5 style="color: #ffffff!important" class="title sal-animate" data-sal="slide-up"
							data-sal-delay="150" data-sal-duration="800">
							<!--<?php esc_html_e('Contact Page Template', 'fenitex'); ?> -->
							<?php
							// Многоязычный заголовок с Polylang
							if (function_exists('pll_e')) {
								pll_e('Контакты'); // Убедитесь, что "Контакты" переведены в Polylang
							} else {
								esc_html_e('Контакты', 'fenitex');
							}
							?>
						</h5>
						<div class="single-information">
							<a href="mailto:<?= the_field('footer_email', 'options');?>" class="number" data-sal="slide-up" data-sal-delay="350"
								data-sal-duration="800" style="display: block;">
								<?= the_field('text_email', 'options');?>
							</a>
							<a href="tel:<?= the_field('phone_number_link', 'options');?>" class="number" data-sal="slide-up" data-sal-delay="350"
								data-sal-duration="800" style="display: block;">
								<?= the_field('phone_number', 'options');?>
							</a>
							<a href="tel:<?= the_field('phone_number_link_extra', 'options');?>" class="number" data-sal="slide-up" data-sal-delay="550"
								data-sal-duration="800" style="display: block;">
								<?= the_field('phone_number_extra', 'options');?>
							</a>
						</div>
						<div class="rts-social-wrapper-three">
							<?php if (have_rows('social_links', 'options')): ?>
								<ul>
									<?php while (have_rows('social_links', 'options')):
										the_row(); ?>
										<li data-sal="slide-up" data-sal-delay="100" data-sal-duration="800"
											class="sal-animate">
											<a href="<?php the_sub_field('url', 'options'); ?>">
												<img src="<?php the_sub_field('icon', 'options');?>" alt="image">
											</a>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer style three end -->


<!-- header style two -->

<!-- progress area start -->
<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
			style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;" />
	</svg>
</div>
<!-- progress area end -->

<?php wp_footer(); ?>

</body>

</html>