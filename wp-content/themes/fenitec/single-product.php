<?php
get_header();
?>

<div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg_image"
    style="background-image: url(<?= the_field('product_banner_image') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center pt--100">
                    <h1 class="title"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="personal-info-area-start rts-section-gapTop pb--100">
    <div class="container">
        <div class="row g-0 align-items-center mb--60">
            <div class="col-lg-5">
                <div class="thumbnail m-img">
                    <div class="post-thumbnail">
                        <?php if (has_post_thumbnail()): ?>
                            <img width="960" height="1280" src="<?php the_post_thumbnail_url('large'); ?>"
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                alt="<?php the_title(); ?>" decoding="async">
                        <?php endif; ?>
                    </div><!-- .post-thumbnail -->
                </div>
            </div>
            <div class="col-lg-7">
                <div class="personal-info-team">
                    <div class="inner-content sal-animate" data-sal="slide-up" data-sal-delay="150"
                        data-sal-duration="900">
                        <h3 class="title animated fadeIn"><?php the_title(); ?></h3>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="wp-block-separator has-alpha-channel-opacity">

        <h4 class="wp-block-heading">Продукты</h4>

        <ul class="wp-block-latest-posts__list wp-block-latest-posts">
            <?php
            $related_products = new WP_Query(array(
                'post_type' => 'product',
                'posts_per_page' => 6,
                'post__not_in' => array(get_the_ID()),
            ));

            if ($related_products->have_posts()):
                while ($related_products->have_posts()):
                    $related_products->the_post(); ?>
                    <li>
                        <a class="wp-block-latest-posts__post-title" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
    </div>
</div>

<?php
get_footer();
