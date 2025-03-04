<?php
/* 
    Template name: Контакты
*/
get_header();
?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- bread crumb inner wrapper -->
                <div class="breadcrumb-inner text-center">
                    <h1 class="title">Контакты</h1>
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
                <!-- bread crumb inner wrapper end -->
            </div>
        </div>
    </div>
</div>

<div class="rts-contact-area-m rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mt-5">
                <div class="row g-24">
                    <!-- single contact area -->
                    <div class="col-12">
                        <div class="single-contact-one-inner">
                            <div class="content">
                                <div class="icone">
                                    <img src="/wp-content/themes/fenitex/images/contact/shape/01.svg" alt="">
                                </div>
                                <div class="info">
                                    <span>Телефон</span>
                                    <a href="tel:+998903229988">
                                        <h5>+998 (90) 322-99-88</h5>
                                    </a>
                                    <a href="tel:+998977410140">
                                        <h5>+998 (97) 741-01-40</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single contact area end -->
                    <!-- single contact area -->
                    <div class="col-12">
                        <div class="single-contact-one-inner">
                            <div class="content">
                                <div class="icone">
                                    <img src="/wp-content/themes/fenitex/images/contact/shape/02.svg" alt="">
                                </div>
                                <div class="info">
                                    <span>Email</span>
                                    <a href="mailto:sales@fenitec.uz">
                                        <h5>sales@fenitec.uz</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single contact area end -->
                    <!-- single contact area -->
                    <div class="col-12">
                        <div class="single-contact-one-inner">
                            <div class="content">
                                <div class="icone">
                                    <img src="/wp-content/themes/fenitex/images/contact/shape/03.svg" alt="">
                                </div>
                                <div class="info">
                                    <span>Aдрес</span>
                                    <a href="#">
                                        <h5>Узбекистан, город Ташкент, улица Уста Ширин, 100057, дом 136</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single contact area end -->
                </div>
            </div>

            <div class="col-12 col-lg-6 mt-5" id="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d374.35937334903974!2d69.24498249385213!3d41.35507089898958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8c8b9833c071%3A0x431a370d75a7cd93!2zMTM2LTEzNSwgVXN0YSBTaGlyaW4gU3RyZWV0LCBUYXNoa2VudCwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1729848408787!5m2!1sru!2s"
                    width="600" height="525" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</div <?php
get_footer();
?>