<?php
/*
    Template name: Устойчивость
*/
get_header();
?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- bread crumb inner wrapper -->
                <div class="breadcrumb-inner text-center">
                    <h1 class="title">Sustainability</h1>
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

<div class="rts-about-area rts-section-gap3" id="post-111">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="rts-tab-three-start sal-animate" data-sal="slide-up" data-sal-delay="400"
                        data-sal-duration="800">
                        <div class="single-tab-content-three">
                            <p class="disc">Being one of the leading winding wire companies, we are also committed to
                                minimizing our environmental impact. The waste generated from the production is 100%
                                recyclable. All packing is reused.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ">
                <div class="about-image-thumbnail-4 text-right">
                    <img decoding="async" class="image-2 sal-animate" data-sal="slide-up" data-sal-delay="300"
                        data-sal-duration="800" src="<?= get_template_directory_uri() . '/assets/images/gl.png' ?>"
                        alt="about-image">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>