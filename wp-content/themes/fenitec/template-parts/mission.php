<?php
/*
    Template name: Миссия
*/
get_header();
?>

<?php get_template_part('template-parts/widgets'); ?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image"
    style="background-image: url(<?= the_field('mission_banner_image') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title"><?php the_field('mission_banner_header'); ?></h1>
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

<div class="rts-about-area rts-section-gap3" id="post-14">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-5">
                <div class="about-image-thumbnail-3">
                    <img decoding="async" class="image-1 sal-animate" data-sal="slide-up" data-sal-delay="100"
                        data-sal-duration="800" src="<?= the_field('mission_content_image'); ?>" alt="about-image">
                    <img decoding="async" class="image-2 sal-animate" data-sal="slide-up" data-sal-delay="300"
                        data-sal-duration="800" src="<?= the_field('mission_content_image_extra'); ?>"
                        alt="about-image">
                </div>
            </div>
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="rts-tab-three-start sal-animate" data-sal="slide-up" data-sal-delay="400"
                        data-sal-duration="800">
                        <div class="single-tab-content-three">
                            <p>
                                <?= the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-experience-area rts-section-gap3 bg-experience sal-animate" data-sal="slide-up" data-sal-delay="200"
    data-sal-duration="800" style="background-image: url(<?= the_field('lucky_mission_banner_image') ?>);">
    <div class="container">
    <div class="row mt--50">
        <div class="col-lg-12">
            <div class="title-three-left">
                <h3 class="title">
                    <?= the_field('lucky_header_title'); ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php if (have_rows('process_steps')): ?>
                <div class="main-process-wrapper">
                    <?php while (have_rows('process_steps')):
                        the_row(); ?>
                        <div class="single-working-process-three">
                            <div class="icon">
                                <?php the_sub_field('icon_number'); ?>
                            </div>
                            <h5 class="title"><?php the_sub_field('title'); ?></h5>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    </div>
</div>

<?php
geT_footer();
?>