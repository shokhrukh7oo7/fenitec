<?php
/*
    Template name: Главная страница
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
        <div class="row">
            <div class="col-lg-12">
                <div class="title-three-center">
                    <h3 class="title sal-animate" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                        <?= the_field('product_header_title'); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-lg-4 col-md-6">
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-559"
                            src="<?= get_template_directory_uri() . '/assets/images/t-4.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=24" class="name">Круглый эмалированный провод из меди</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-554"
                            src="<?= get_template_directory_uri() . '/assets/images/t-5.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=27" class="name">Прямоугольный эмалированный провод из меди</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-555"
                            src="<?= get_template_directory_uri() . '/assets/images/t-3.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=29" class="name">Прямоугольный провод с бумажной изоляцией из
                            меди</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt--80">
            <div class="col-lg-12">
                <div class="title-three-center">
                    <h3 class="title sal-animate" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                        <?= the_field('product_header_title_extra'); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-lg-4 col-md-6">
                <div class="single-team-three">
                    <div class="thumbnail">
                        <img class="alignnone size-medium wp-image-558"
                            src="<?= get_template_directory_uri() . '/assets/images/t-4.jpg' ?>" alt="" width="225"
                            height="300" />
                    </div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=31" class="name">Круглый эмалированный провод из алюминия</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-team-three">
                    <div class="thumbnail">
                        <img class="alignnone size-medium wp-image-557"
                            src="<?= get_template_directory_uri() . '/assets/images/t-5.jpg' ?>" alt="" width="225"
                            height="300" />
                    </div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=33" class="name">Прямоугольный эмалированный провод из
                            алюминия</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-team-three">
                    <div class="thumbnail">
                        <img class="alignnone size-medium wp-image-555"
                            src="<?= get_template_directory_uri() . '/assets/images/t-3.jpg' ?>" alt="" width="225"
                            height="300" />
                    </div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=35" class="name">Прямоугольный провод с бумажной изоляцией из
                            алюминия</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="about" class="rts-about-area rts-section-gap3">
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
                    <h3 class="title">Для достижения и поддержания высочайшего качества продукции и услуг компания
                        стремится к:</h3>
                </div>
            </div>
        </div>
        <!-- process wrapper start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="main-process-wrapper"><!-- single process area start -->
                    <div class="single-working-process-three">
                        <div class="icon">01</div>
                        <h5 class="title">Постоянному развитию новых продуктов;</h5>
                    </div>
                    <!-- single process area end --><!-- single process area start -->
                    <div class="single-working-process-three">
                        <div class="icon">02</div>
                        <h5 class="title">Использованию оригинальных и инновационных технологий для решения задач;</h5>
                    </div>
                    <!-- single process area end --><!-- single process area start -->
                    <div class="single-working-process-three">
                        <div class="icon">03</div>
                        <h5 class="title">Применению передовых автоматических систем управления;</h5>
                    </div>
                    <!-- single process area end --><!-- single process area start -->
                    <div class="single-working-process-three">
                        <div class="icon">04</div>
                        <h5 class="title">Оказанию первоклассной технической поддержки;</h5>
                    </div>
                    <div class="single-working-process-three">
                        <div class="icon">05</div>
                        <h5 class="title">Постоянному поиску новшеств в производственных системах</h5>
                    </div>
                    <!-- single process area end -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- swiper start -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<!-- swiper end -->

<div class="rts-about-area rts-section-gap3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="title-three-left">
                        <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                            data-sal-duration="800">Устойчивость</h3>
                    </div>
                    <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                        <div class="single-tab-content-three">
                            <p class="disc"><strong>Будучи одной из ведущих компаний по производству обмоточных
                                    проводов, мы также стремимся к минимизации нашего воздействия на окружающую среду.
                                </strong></p>
                            <p>100 % отходов, полученных при производстве проводов из алюминия и меди, полностью
                                перерабатываются.</p>
                            <p>Кроме того, компания использует многоразовую тару для готовой продукции.</p>
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
<p>&nbsp;</p>
<?php
get_footer();
?>