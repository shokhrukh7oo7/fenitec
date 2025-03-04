<?php
/* 
    Template name: Качество
*/
get_header();
?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- bread crumb inner wrapper -->
                <div class="breadcrumb-inner text-center">
                    <h1 class="title">Качество</h1>
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

<div class="rts-about-area rts-section-gap3" id="post-20">
    <div class="container">
        <div class="row align-items-center mt--100 mb--100">
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="title-three-left">
                        <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                            data-sal-duration="800">Улучшенное качество</h3>
                    </div>
                    <div class="rts-tab-three-start" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                        <div class="single-tab-content-three">
                            <p>Процесс производства круглых и прямоугольных обмоточных проводов из меди и алюминия,
                                разработанный нашей компанией включает в себя расширенный контроль качества и мониторинг
                                производства в режиме реального времени.</p>
                            <p>Качество продукции предприятия соответствуют международным и национальным нормативным
                                документам такими как:<br /><br />- Международная электротехническая комиссия IEC
                                60317;<br />- Межгосударственный стандарт стран СНГ – ГОСТ Р МЭК 60317 <br />-
                                Национальный
                                стандарт O`zDst IEC 60317</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-image-thumbnail-4 text-right pl--40">
                    <img class="image-2" src="<?= get_template_directory_uri() . '/assets/images/7.png' ?>"
                        alt="about-image" data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" />
                </div>
            </div>
        </div>
        <div class="about-three-wrapper">
            <div class="sertificate-wrapper">
                <div class="image-wrapper">
                    <div><img src="<?= get_template_directory_uri() . '/assets/images/s-1.jpg' ?>" alt="img"
                            data-sal="slide-up" data-sal-delay="100" data-sal-duration="800" /></div>
                    <div><img src="<?= get_template_directory_uri() . '/assets/images/s-1.jpg' ?>" alt="img"
                            data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" /></div>
                    <div><img src="<?= get_template_directory_uri() . '/assets/images/s-1.jpg' ?>" alt="img"
                            data-sal="slide-up" data-sal-delay="500" data-sal-duration="800" /></div>
                </div>
                <div class="content-wrapper" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                    <h3 class="content-header-title mt--40">Сертификация качества: ваше доверие — наша гордость</h3>
                    <p class="content-middle-title">OOO "Mega Elektro Kabel" понимает, что высокие стандарты качества,
                        безопасности и экологической ответственности - это ключи к вашему успеху. Fenitec гордится
                        наличием
                        международных сертификатов ISO 9001, ISO 14001 и ISO 45001, которые подтверждают:</p>
                    <p class="content-middle-title-item">-ISO 9001: Гарантия непревзойденного качества продукции и
                        услуг,
                        соответствующих самым строгим требованиям.</p>
                    <p class="content-middle-title-item">-ISO 14001: Приверженность к охране окружающей среды и
                        устойчивому
                        развитию, с минимальным воздействием на природу.</p>
                    <p class="content-middle-title-item">-ISO 45001: Обеспечение безопасных и здоровых условий труда для
                        наших сотрудников и партнеров.</p>
                    <p class="content-bottom-title">С сертификацией от Fenitec вы можете быть уверены в надежности,
                        безопасности и ответственности каждого нашего продукта. Давайте строить будущее вместе!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>