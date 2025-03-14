<?php
/*
Template name: Widgets;
*/
?>

<!-- social media link start -->
<div class="social-media-wrapper">
    <div class="social-media-links-wrapper">
        <div class="social-links">
            <a href="<?= the_field('instagram_link', 'option'); ?>">
                <img src="<?= the_field('instagram_image', 'option'); ?>" alt="image">
            </a>
            <a href="<?= the_field('telegram_link', 'option'); ?>">
                <img src="<?= the_field('telegram_image', 'option'); ?>" alt="image">
            </a>
        </div>
    </div>
</div>
<!-- social media link end -->

<!-- navigation table start -->
<div class="pulse-wrapper">
    <div class="call-center-links" name="links">
        <div class="links-wrapper">
            <a href="tel:<?= the_field('phone_number', 'option'); ?>">
                <img src="<?= the_field('phone_image', 'option'); ?>" alt="image">
            </a>
            <a href="mailto:<?= the_field('email', 'option'); ?>">
                <img src="<?= the_field('email_image', 'option'); ?>" alt="image">
            </a>
        </div>
        <div class="icon close-icon">
            &times;
        </div>
    </div>
    <div class="call-center-wrapper" name="center">
        <div class="icon call-icon">
            <img src="<?= the_field('phone_image', 'option'); ?>" alt="image">
        </div>
        <div class="icon message-icon">
            <img src="<?= the_field('email_image', 'option'); ?>" alt="image">
        </div>
    </div>
</div>
<!-- navigation table end-->
