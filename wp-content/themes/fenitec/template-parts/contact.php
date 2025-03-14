<?php
/* 
    Template name: Контакты
*/
get_header();
?>

<?php get_template_part('template-parts/widgets'); ?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image"
    style="background-image: url(<?= the_field('contact_banner_image') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title">
                        <?= the_field('contact_header'); ?>
                    </h1>
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

<div class="rts-contact-area-m rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mt-5">
                <div class="row g-24">
                    <div class="col-12">
                        <div class="single-contact-one-inner">
                            <div class="content">
                                <div class="icone">
                                    <img src="<?= the_field('phone_image'); ?>" alt="">
                                </div>
                                <div class="info">
                                    <span><?= the_field('phone_title'); ?></span>
                                    <a href="tel:<?= the_field('phone_link_1'); ?>">
                                        <h5><?= the_field('phone_number_1'); ?></h5>
                                    </a>
                                    <a href="tel:<?= the_field('phone_link_2'); ?>">
                                        <h5><?= the_field('phone_number_2'); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-contact-one-inner">
                            <div class="content">
                                <div class="icone">
                                    <img src="<?= the_field('email_image'); ?>" alt="">
                                </div>
                                <div class="info">
                                    <span><?= the_field('email_title'); ?></span>
                                    <a href="mailto:<?= the_field('email_link'); ?>">
                                        <h5><?= the_field('email_text'); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-contact-one-inner">
                            <div class="content">
                                <div class="icone">
                                    <img src="<?= the_field('location_image'); ?>" alt="">
                                </div>
                                <div class="info">
                                    <span><?= the_field('location_title'); ?></span>
                                    <a href="#">
                                        <h5><?= the_field('location_text'); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 mt-5" id="contact-map">
                <iframe src="<?= the_field('google_maps'); ?>" width="600" height="525" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="rts-contact-page-form-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="mian-wrapper-form">
                <div class="title-mid-wrapper-home-two sal-animate" data-sal="slide-up" data-sal-delay="150"
                    data-sal-duration="800">
                    <h2 class="title"><?php esc_html_e('Оставить заявку', 'fenitex'); ?></h2>
                </div>
                <form class="contact-form-wrapper">
                    <div class="row form-wrapper">
                        <div class="col-12 col-md-6 col-xl-4 my-4">
                            <div class="input-group">
                                <input class="form-control" autocomplete="name" placeholder="Ф.И.О" value="" type="text"
                                    name="your-name">
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4 my-4">
                            <div class="input-group">
                                <input class="form-control" autocomplete="email" placeholder="Ваш email" value=""
                                    type="email" name="your-email">
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 my-4">
                            <div class="input-group">
                                <input class="form-control" autocomplete="name" placeholder="Ваш телефон" value=""
                                    type="text" name="your-name">
                            </div>
                        </div>
                        <div class="col-12 my-4">
                            <div class="input-group">
                                <textarea cols="40" rows="10" maxlength="2000" class="form-control"
                                    placeholder="Введите текст" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 my-4" style="margin: 0 auto;">
                            <div class="input-group">
                                <button class="btn contact-form-btn">
                                    Отправить
                                </button>
                            </div>
                        </div>
                    </div>
                    </>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>