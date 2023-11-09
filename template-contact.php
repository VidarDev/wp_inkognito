<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div class="contact-form">
    <div class="container">

        <?php if (get_field('contact-form__subtitle')): ?>
            <span class="contact-form__subtitle subtitle">
                <?= get_field('contact-form__subtitle'); ?>
            </span>
        <?php endif; ?>

        <?php if (get_field('contact-form__title')): ?>
            <h2 class="contact-form__title title">
                <?= get_field('contact-form__title'); ?>
            </h2>
        <?php endif; ?>

        <?php if (get_field('contact-form__content')): ?>
            <div class="contact-form__content">
                <?= get_field('contact-form__content'); ?>
            </div>
        <?php endif; ?>

        <!-- Contact Form 7 : Form -->
        <?php if (do_shortcode('[contact-form-7 id="9e069af" title="Contact"]')): ?>
            <div class="contact-form__container contact-form-7">
                <?= do_shortcode('[contact-form-7 id="9e069af" title="Contact"]'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
