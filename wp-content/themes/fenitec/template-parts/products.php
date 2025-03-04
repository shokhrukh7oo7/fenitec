<?php
/* 
    Template name: Продукты
*/
get_header();
?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title">Продукты</h1>
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

<div class="rts-about-area rts-section-gap3" id="post-18">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 ">
                <div class="about-image-thumbnail-4 text-left"><img fetchpriority="high" decoding="async"
                        class="alignnone wp-image-576 size-medium"
                        src="<?= get_template_directory_uri() . '/assets/images/t-2.jpg' ?>" alt="" width="300"
                        height="225">
                </div>
            </div>
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="title-three-left">
                        <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                            data-sal-duration="800">Продукция</h3>
                    </div>
                    <div class="rts-tab-three-start sal-animate" data-sal="slide-up" data-sal-delay="400"
                        data-sal-duration="800">
                        <div class="single-tab-content-three">
                            <p>FENITEC предлагает широкий ассортимент обмоточных проводов из меди и алюминия для
                                всех видов применения как в повседневности, так и в современной инфраструктуре.
                                Также компания предлагает индивидуальные решения для клиентов, разработанные с
                                учетом всех возможных потребностей. Вся продукция производится с использованием
                                высокоточного процесса и самых современных технологий.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-70">
            <div class="col-lg-12">
                <div class="title-three-center">
                    <h3 class="title sal-animate" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                        Обмоточные провода<br>из МЕДИ</h3>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-lg-4 col-md-6"><!-- single team one start -->
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-559"
                            src="<?= get_template_directory_uri() . '/assets/images/t-4.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=24" class="name">Круглый эмалированный провод из меди</a>
                    </div>
                </div>
                <!-- single team one start -->
            </div>
            <div class="col-lg-4 col-md-6"><!-- single team one start -->
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-554"
                            src="<?= get_template_directory_uri() . '/assets/images/t-5.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=27" class="name">Прямоугольный эмалированный провод из меди</a>
                    </div>
                </div>
                <!-- single team one start -->
            </div>
            <div class="col-lg-4 col-md-6"><!-- single team one start -->
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-555"
                            src="<?= get_template_directory_uri() . '/assets/images/t-3.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=29" class="name">Прямоугольный провод с бумажной изоляцией из
                            меди</a>
                    </div>
                </div>
                <!-- single team one start -->
            </div>
        </div>
        <div class="row pt--80">
            <div class="col-lg-12">
                <div class="title-three-center">
                    <h3 class="title sal-animate" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                        Обмоточные провода<br>из АЛЮМИНИЯ</h3>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-lg-4 col-md-6"><!-- single team one start -->
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-558"
                            src="<?= get_template_directory_uri() . '/assets/images/t-4.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=31" class="name">Круглый эмалированный провод из алюминия</a>
                    </div>
                </div>
                <!-- single team one start -->
            </div>
            <div class="col-lg-4 col-md-6"><!-- single team one start -->
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-557"
                            src="<?= get_template_directory_uri() . '/assets/images/t-5.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=33" class="name">Прямоугольный эмалированный провод из
                            алюминия</a>
                    </div>
                </div>
                <!-- single team one start -->
            </div>
            <div class="col-lg-4 col-md-6"><!-- single team one start -->
                <div class="single-team-three">
                    <div class="thumbnail"><img class="alignnone size-medium wp-image-555"
                            src="<?= get_template_directory_uri() . '/assets/images/t-3.jpg' ?>" alt="" width="225"
                            height="300" /></div>
                    <div class="content-area">
                        <a href="https://fenitec.uz/?p=35" class="name">Прямоугольный провод с бумажной изоляцией из
                            алюминия</a>
                    </div>
                </div>
                <!-- single team one start -->
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>