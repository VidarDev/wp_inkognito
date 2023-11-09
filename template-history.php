<?php
/*
Template Name: History
*/
?>
<?php get_header(); ?>

<h1 class="screen-reader-only"><?= get_the_title(); ?></h1>

<div id="about" class="about">
    <?php if (get_field('about__image')): ?>

        <?php $about_image = get_field('about__image'); ?>
        <?php if (!empty($about_image)): ?>
            <figure class="about__image">
                <img src="<?= esc_url($about_image['url']) ?>"
                     role="img"
                     aria-label="<?= esc_url($about_image['alt']) ?>"
                     alt="<?= esc_url($about_image['alt']) ?>"
                     title="<?= esc_url($about_image['alt']) ?>"
                     loading="lazy"
                     width="320"
                     height="180"/>
            </figure>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (get_field('about__vertical-text')): ?>
        <div class="about__vertical-text">
            <span><?= get_field('about__vertical-text'); ?></span>
        </div>
    <?php endif; ?>

    <?php if (
        get_field('about__subtitle')
        && get_field('about__title')
        && get_field('about__content')):
        ?>
        <div class="about__content">
            <span class="about__subtitle"><?= get_field('about__subtitle'); ?></span>
            <h2 class="about__title"><?= get_field('about__title'); ?></h2>
            <?= get_field('about__content'); ?>

            <?php if (is_home() || is_front_page()) : ?>
                <div class="about__more">

                    <?php if (
                        get_field('about__home-btn-label')
                        && get_field('about__home-btn-url')
                        && get_field('about__home-btn-label')):
                        ?>
                        <a class="btn btn--uno"
                           aria-label="<?= get_field('read-more', 'option'); ?> <?= get_field('about__home-btn-label'); ?>"
                           href="<?= get_field('about__home-btn-url'); ?>">
                            <?= get_field('about__home-btn-label'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<div id="about-content" class="about-content">
    <div class="container">

        <?php if (get_field('about-content-subtitle')): ?>
            <span class="about-content__subtitle subtitle">
                <?= get_field('about-content-subtitle'); ?>
            </span>
        <?php endif; ?>

        <?php if (get_field('about-content__title')): ?>
            <h2 class="about-content__title title">
                <?= get_field('about-content__title'); ?>
            </h2>
        <?php endif; ?>

        <?php if (get_field('about-content__content')): ?>
            <div class="about-content__content">
                <?= get_field('about-content__content'); ?>
            </div>
        <?php endif; ?>

        <!-- Timeline part -->
        <div id="timeline" class="timeline">

            <?php if (get_field('timeline__subtitle')): ?>
                <span class="timeline__subtitle subtitle">
                    <?= get_field('timeline__subtitle'); ?>
                </span>
            <?php endif; ?>

            <?php if (get_field('timeline__title')): ?>
                <h2 class="timeline__title title">
                    <?= get_field('timeline__title'); ?>
                </h2>
            <?php endif; ?>

            <ul class="timeline__wrapper">
                <?php if (have_rows('timeline')): ?>
                    <?php while (have_rows('timeline')): the_row(); ?>

                        <?php if (
                            get_sub_field('timeline__label')
                            && get_sub_field('timeline__date')
                            && get_sub_field('timeline__content')
                            && get_sub_field('timeline__image')):
                            ?>
                            <li class="timeline__items">
                                <details>
                                    <summary class="timeline__label">
                                        <h3>
                                            <?= get_sub_field('timeline__label'); ?>
                                        </h3>
                                    </summary>
                                    <div class="timeline__content">
                                        <span class="timeline__date">
                                            <?= get_sub_field('timeline__date'); ?>
                                        </span>

                                        <?= get_sub_field('timeline__content'); ?>
                                    </div>
                                </details>

                                <?php $artiste_image = get_sub_field('timeline__image'); ?>
                                <?php if (!empty($artiste_image)): ?>
                                    <figure class="timeline__image">
                                        <img src="<?= esc_url($artiste_image['url']) ?>"
                                             role="img"
                                             aria-label="<?= esc_url($artiste_image['alt']) ?>"
                                             alt="<?= esc_url($artiste_image['alt']) ?>"
                                             title="<?= esc_url($artiste_image['alt']) ?>"
                                             loading="lazy"
                                             width="320"
                                             height="180"/>
                                    </figure>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>

        <?php if (get_field('about-content__content2')): ?>
            <div class="about-content__content">
                <?= get_field('about-content__content2'); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
