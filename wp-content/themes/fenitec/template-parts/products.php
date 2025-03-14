<?php
/* 
    Template name: Продукты
*/
get_header();
?>

<?php get_template_part('template-parts/widgets'); ?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image"
    style="background-image: url(<?= the_field('products_banner_image') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="title"><? the_field('banner_header_title'); ?></h1>
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
                        class="alignnone wp-image-576 size-medium" src="<?= the_field('products_image'); ?>" alt="image"
                        width="300" height="225">
                </div>
            </div>
            <div class="col-lg-7 pl--60 p-md-0">
                <div class="about-three-wrapper">
                    <div class="title-three-left">
                        <h3 class="title animated fadeIn sal-animate" data-sal="slide-up" data-sal-delay="100"
                            data-sal-duration="800"><?= the_content(); ?></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt--50">
            <?php
            // Получаем все категории
            $categories = get_terms(array(
                'taxonomy' => 'product_category',
                'hide_empty' => false,
            ));

            if (!empty($categories)):
                foreach ($categories as $category): ?>
                    <div class="col-lg-12">
                        <div class="title-three-center">
                            <h3 class="title sal-animate" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                                <?= esc_html($category->name); ?>
                            </h3>
                        </div>
                    </div>

                    <div class="row mt--50">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => -1, // Получаем все продукты
                            'offset' => 3,  // Пропускаем первые 3 продукта
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
                                <div class="col-lg-4 col-md-6 my-4">
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
                        else: ?>
                            <div class="col-lg-12">
                                <p>Другие продукты в этой категории отсутствуют.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>