<?php
/*
    Template name: Главная страница
*/
get_header();
?>

<?php get_template_part('template-parts/widgets'); ?>

<!-- BANNER -->
<div class="rts-banner-three-area rts-section-gap" style="background-image: url(<?= the_field('banner_image') ?>);">
    <div class="container pt--150">
        <div class="row">
            <div class="banner-three-wrapper">
                <div class="sign">
                    <h1 class="title"><?= the_field('banner_header_title') ?></h1>
                    <p class="description"><?= the_field('banner_description') ?></p>
                </div>
                <div class="banner-btn-wrapper"><button id="show-btn"
                        class="show-btn"><?= the_field('banner_btn') ?></button></div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER -->

<!-- OVERLAY START -->
<div id="overlay" class="overlay hidden"></div>
<!-- OVERLAY END -->

<!-- Production start -->
<div class="container">
    <div class="row align-items-center" style="margin: 70px 0;">
        <div class="col-lg-5">
            <div class="about-image-thumbnail-4 text-left">
                <img class="alignnone wp-image-576 size-medium" src="<?= the_field('image') ?>" alt="" width="300"
                    height="225" />
            </div>
        </div>
        <div class="col-lg-7 pl--60 p-md-0">
            <div class="about-three-wrapper">
                <div class="title-three-left">
                    <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                        data-sal-duration="800"><?= the_field('header_title') ?></h3>
                </div>
                <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400" data-sal-="">
                    <div class="single-tab-content-three">
                        <p><?= the_field('description_title') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-section-gap3 team-3bg">
    <div class="container">
        <?php
        // Получаем заголовки из ACF
        $header_medi = get_field('product_header_title'); // Заголовок для меди
        $header_aluminum = get_field('product_header_title_extra'); // Заголовок для алюминия
        
        // Указываем ID категорий
        $category_aluminum_id = 32; // <-- Замени на реальный ID "Обмоточные провода из АЛЮМИНИЯ"
        $category_medi_id = 31; // <-- Замени на реальный ID "Обмоточные провода из МЕДИ"
        
        // Получаем все категории
        $categories = get_terms(array(
            'taxonomy' => 'product_category',
            'hide_empty' => false,
        ));

        if (!empty($categories)):
            foreach ($categories as $category):
                if ($category->term_id == $category_medi_id) {
                    $header = $header_medi;
                } elseif ($category->term_id == $category_aluminum_id) {
                    $header = $header_aluminum;
                } else {
                    continue;
                }
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-three-center">
                            <h3 class="title sal-animate" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                                <?= esc_html($header); ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row mt--50">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 3,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_category',
                                'field' => 'term_id',
                                'terms' => $category->term_id,
                            ),
                        ),
                    );

                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post();
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-team-three">
                                    <div class="thumbnail">
                                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= esc_attr(get_the_title()); ?>"
                                            width="225" height="300" />
                                    </div>
                                    <div class="content-area">
                                        <a href="<?= get_permalink(); ?>" class="name"><?= get_the_title(); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <?php
            endforeach;
        endif;
        ?>

        <div id="about" class="rts-about-area rts-section-gap4">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-5">
                        <div class="about-image-thumbnail-3">
                            <img class="image-1" src="<?php the_field('about_image'); ?>" alt="about-image"
                                data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" />
                            <img class="image-2" src="<?php the_field('about_extra_image') ?>" alt="about-image"
                                data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" />
                        </div>
                    </div>
                    <div class="col-lg-7 pl--60 p-md-0">
                        <div class="about-three-wrapper">
                            <div class="title-three-left">
                                <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                                    data-sal-duration="800">
                                    <?php the_field('about_header_title') ?>
                                </h3>
                            </div>
                            <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400"
                                data-sal-duration="800">
                                <div class="single-tab-content-three">
                                    <p class="disc">
                                        <?php the_field('about_description'); ?>
                                    </p>
                                    <a class="rts-btn btn-seconday" href="/?page_id=12">
                                        <?php the_field('about_button_title'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- swiper start -->
                <div class="container">
                    <div class="swiper">
                        <h1 class="partner-header"><?= the_field('partners_header') ?></h1>
                        <?php if (have_rows('partners')): ?>
                            <div class="owl-carousel pb-4">
                                <?php while (have_rows('partners')):
                                    the_row(); ?>
                                    <div class="image-wrapper">
                                        <img src="<?= the_sub_field('icon'); ?>" alt="image">
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- swiper end -->
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row align-items-center mt--100 mb--100">
        <div class="col-lg-7 pl--60 p-md-0">
            <div class="about-three-wrapper">
                <div class="title-three-left">
                    <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                        data-sal-duration="800"><?= the_field('quality_header_title'); ?></h3>
                </div>
                <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                    <div class="single-tab-content-three">
                        <p>
                            <?= get_field('quality_description') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="about-image-thumbnail-4 text-right pl--40">
                <img class="image-2" src="<?= the_field('quality_image'); ?>" alt="about-image" data-sal="slide-up"
                    data-sal-delay="300" data-sal-duration="800" />
            </div>
        </div>
    </div>
    <div class="about-three-wrapper">
        <div class="sertificate-wrapper">
            <div class="image-wrapper">
                <div><img src="<?= the_field('quality_image_certificate_1'); ?>" alt="img" data-sal="slide-up"
                        data-sal-delay="100" data-sal-duration="800" /></div>
                <div><img src="<?= the_field('quality_image_certificate_2'); ?>" alt="img" data-sal="slide-up"
                        data-sal-delay="300" data-sal-duration="800" /></div>
                <div><img src="<?= the_field('quality_image_certificate_3'); ?>" alt="img" data-sal="slide-up"
                        data-sal-delay="500" data-sal-duration="800" /></div>
            </div>
            <div class="content-wrapper" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                <p class="content-middle-title">
                    <?php the_field('extra_description'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="rts-experience-area rts-section-gap3 bg-experience" data-sal="slide-up" data-sal-delay="200"
    data-sal-duration="800" style="background-image: url(<?= the_field('info_image') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-three-left">
                    <h3 class="title">
                        <?= the_field('service_header'); ?>
                    </h3>
                </div>
            </div>
        </div>
        <!-- process wrapper start -->
        <div class="row">
            <div class="col-lg-12">
                <?php if (have_rows('service')): ?>
                    <div class="main-process-wrapper">
                        <?php while (have_rows('service')):
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

<div class="rts-about-area rts-section-gap3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="title-three-left">
                        <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                            data-sal-duration="800"><?= the_field('sustainable_header'); ?></h3>
                    </div>
                    <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                        <div class="single-tab-content-three">
                            <p class="disc"><?= the_field('sustainable_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-image-thumbnail-4 text-right"><img class="image-2"
                        src="<?= get_template_directory_uri() . '/assets/images/gl.png' ?>" alt="about-image"
                        data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" /></div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>