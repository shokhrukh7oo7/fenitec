<?php
/*
    Template name: О нас
*/
get_header();
?>

<!-- wp:html -->
<!-- social media link start -->
<div class="social-media-wrapper">
    <div class="social-media-links-wrapper">
        <div class="social-links">
            <a href="https://www.instagram.com/fenitec.uz?igsh=MXU4OGtvZ3JwMm9jdQ=="><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="https://t.me/fenitec"><i class="fa-brands fa-telegram"></i></a>
        </div>
    </div>
</div>
<!-- social media link end -->

<!-- navigation table start -->
<div class="pulse-wrapper">
    <div class="call-center-links" name="links">
        <div class="links-wrapper">
            <a href="tel:+998903229988"><i class="fa-solid fa-phone"></i></a>
            <a href="mailto:sales@fenitec.uz"><i class="fa-solid fa-message"></i></a>
        </div>
        <div class="icon close-icon">
            &times;
        </div>
    </div>
    <div class="call-center-wrapper" name="center">
        <div class="icon call-icon">
            <i class="fa-solid fa-phone"></i>
        </div>
        <div class="icon message-icon">
            <i class="fa-solid fa-message"></i>
        </div>
    </div>
</div>
<!-- navigation table end-->

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image"
    style="background-image: url(<?= the_field('about_company_banner_image') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title"><?= the_field('banner_header_title'); ?></h1>
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-about-area rts-section-gap3" id="post-12">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-5">
                <div class="about-image-thumbnail-3">
                    <img decoding="async" class="image-1 sal-animate" data-sal="slide-up" data-sal-delay="100"
                        data-sal-duration="800" src="<?= the_field('about_content_image'); ?>" alt="about-image">
                    <img decoding="async" class="image-2 sal-animate" data-sal="slide-up" data-sal-delay="300"
                        data-sal-duration="800" src="<?= the_field('about_content_image_extra'); ?>" alt="about-image">
                </div>
            </div>
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="rts-tab-three-start sal-animate" data-sal="slide-up" data-sal-delay="400"
                        data-sal-duration="800">
                        <div class="single-tab-content-three">
                            <p class="disc">
                                <?php the_content()?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>