<?php
/*
    Template name: Миссия
*/
get_header();
?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- bread crumb inner wrapper -->
                <div class="breadcrumb-inner text-center">
                    <h1 class="title">Миссия</h1>
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                    <!-- <div class="meta">
                        <a href="https://fenitec.uz/" class="prev">Главная /</a>
                        <a href="#" class="next">Миссия</a>
                    </div> -->
                </div>
                <!-- bread crumb inner wrapper end -->
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
                        data-sal-duration="800" src="<?= get_template_directory_uri() . '/assets/images/02_1.jpg' ?>"
                        alt="about-image">
                    <img decoding="async" class="image-2 sal-animate" data-sal="slide-up" data-sal-delay="300"
                        data-sal-duration="800" src="<?= get_template_directory_uri() . '/assets/images/03_2.jpg' ?>"
                        alt="about-image">
                </div>
            </div>
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="rts-tab-three-start sal-animate" data-sal="slide-up" data-sal-delay="400"
                        data-sal-duration="800">
                        <div class="single-tab-content-three">
                            <p>FENITEC с многолетним опытом имеет большой потенциал стать одним из ведущих мировых
                                поставщиков обмоточных проводов. Благодаря постоянному организационному и
                                технологическому развитию, надежности и гибкости компания может обрабатывать сложные,
                                специфичные для клиентов заказы и предлагать передовые услуги.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-experience-area rts-section-gap3 bg-experience sal-animate" data-sal="slide-up" data-sal-delay="200"
    data-sal-duration="800">
    <div class="row mt--50">
        <div class="col-lg-12">
            <div class="title-three-left">
                <h3 class="title">
                    Для достижения и поддержания высочайшего качества продукции и услуг компания стремится к:
                </h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="main-process-wrapper">

                <!-- single process area start -->
                <div class="single-working-process-three">
                    <div class="icon">
                        01
                    </div>
                    <h5 class="title">Постоянному развитию новых продуктов;
                    </h5>
                </div>
                <!-- single process area end -->
                <!-- single process area start -->
                <div class="single-working-process-three">
                    <div class="icon">
                        02
                    </div>
                    <h5 class="title"> Использованию оригинальных и инновационных технологий для решения задач;
                    </h5>
                </div>
                <!-- single process area end -->
                <!-- single process area start -->
                <div class="single-working-process-three">
                    <div class="icon">
                        03
                    </div>
                    <h5 class="title">Применению передовых автоматических систем управления;
                    </h5>
                </div>
                <!-- single process area end -->
                <!-- single process area start -->
                <div class="single-working-process-three">
                    <div class="icon">
                        04
                    </div>
                    <h5 class="title">Оказанию первоклассной технической поддержки;
                    </h5>
                </div>
                <div class="single-working-process-three">
                    <div class="icon">
                        05
                    </div>
                    <h5 class="title">Постоянному поиску новшеств в производственных системах
                    </h5>
                </div>
                <!-- single process area end -->
            </div>

        </div>
    </div>
</div>

<?php
geT_footer();
?>