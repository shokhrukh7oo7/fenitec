<?php
/* 
    Template name: Качество
*/
get_header();
?>

<?php get_template_part('template-parts/widgets'); ?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image"
    style="background-image: url(<?= the_field('quality_banner_image') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title"><?= the_field('quality_header_title'); ?></h1>
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

<div class="container">
    <div class="row align-items-center  quality-row">
        <div class="col-lg-7 pl--60 p-md-0">
            <div class="about-three-wrapper">
                <div class="title-three-left">
                    <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                        data-sal-duration="800">
                        <?= the_field('quality_content_header'); ?>
                    </h3>
                </div>
                <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                    <div class="single-tab-content-three">
                        <p><?= the_field('quality_content_title'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="about-image-thumbnail-4 text-right pl--40">
                <img class="image-2" src="<?= the_field('quality_content_image'); ?>" alt="about-image"
                    data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" />
            </div>
        </div>
    </div>
    <div class="about-three-wrapper">
        <div class="sertificate-wrapper">
            <?php if (have_rows('image_gallery')): ?>
                <div class="image-wrapper">
                    <?php
                    $delay = 100;
                    while (have_rows('image_gallery')):
                        the_row();
                        $image = get_sub_field('image');
                        ?>
                        <div>
                            <img src="<?= esc_url($image); ?>" alt="<?= esc_attr($image); ?>" data-sal="slide-up"
                                data-sal-delay="<?= $delay; ?>" data-sal-duration="800" />
                        </div>
                        <?php
                        $delay += 200;
                    endwhile;
                    ?>
                </div>
            <?php endif; ?>
            <div class="content-wrapper" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                <p class="content-middle-title">
                    <?= the_content(); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>