<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>

    <!-- About part -->
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

    <!-- Tattoo artists-->
    <div id="artistes" class="artistes">
        <div class="container">

            <?php if (get_field('artistes__subtitle', 'option')): ?>
                <span class="artistes__subtitle subtitle">
                    <?= get_field('artistes__subtitle', 'option'); ?>
                </span>
            <?php endif; ?>

            <?php if (get_field('artistes__title', 'option')): ?>
                <h2 class="artistes__title title">
                    <?= get_field('artistes__title', 'option'); ?>
                </h2>
            <?php endif; ?>

            <?php if (have_rows('artiste__repeteur', 'option')): ?>
                <div class="artistes__container">

                    <?php while (have_rows('artiste__repeteur', 'option')): the_row(); ?>

                        <?php if (
                            get_sub_field('artiste__url', 'option')
                            && get_sub_field('artiste__title', 'option')
                            && get_sub_field('artiste__image', 'option')):
                            ?>
                            <a href="<?= get_sub_field('artiste__url', 'option'); ?>"
                               target="_blank" class="artistes__item">
                                <h3 class="artistes__item-title"><?= get_sub_field('artiste__title', 'option'); ?></h3>

                                <?php $artiste_image = get_sub_field('artiste__image', 'option'); ?>
                                <?php if (!empty($artiste_image)): ?>
                                    <figure class="artistes__image">
                                        <img src="<?= esc_url($artiste_image['url']) ?>"
                                             role="presentation"
                                             aria-label="<?= esc_url($artiste_image['alt']) ?>"
                                             alt="<?= esc_url($artiste_image['alt']) ?>"
                                             title="<?= esc_url($artiste_image['alt']) ?>"
                                             loading="lazy"
                                             width="320"
                                             height="180"/>
                                    </figure>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>

                    <?php endwhile; ?>

                </div>
            <?php endif; ?>

        </div>
    </div>

    <!-- Gallery part -->
    <div id="gallery" class="gallery">
        <div class="container">

            <?php if (get_field('galleries__subtitle', 'option')): ?>
                <span class="gallery__subtitle subtitle">
            <?= get_field('galleries__subtitle', 'option'); ?>
        </span>
            <?php endif; ?>

            <?php if (get_field('galleries__title', 'option')): ?>
                <h2 class="gallery__title title">
                    <?= get_field('galleries__title', 'option'); ?>
                </h2>
            <?php endif; ?>

            <?php if (have_rows('galleries__repeteur', 'option')): ?>
                <div class="gallery__container">

                    <?php while (have_rows('galleries__repeteur', 'option')): the_row(); ?>

                        <?php if (
                            get_sub_field('gallery__url', 'option')
                            && get_sub_field('gallery__image', 'option')
                            && get_sub_field('gallery__name', 'option')):
                            ?>
                            <a href="<?= get_sub_field('gallery__url', 'option') ?>" class="gallery__item">
                                <h3 class="gallery__item-title screen-reader-only">
                                    <?= get_sub_field('gallery__name', 'option') ?>
                                </h3>

                                <?php $artiste_image = get_sub_field('gallery__image', 'option'); ?>
                                <?php if (!empty($artiste_image)): ?>
                                    <figure class="gallery__image">
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
                            </a>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>

                <!--  Si c'est la page d'accueil -->
                <?php if (is_home() || is_front_page()) : ?>
                    <div class="gallery__more">

                        <?php if (
                            get_field('galleries__label', 'option')
                            && get_field('galleries__url', 'option')
                            && get_field('galleries__label', 'option')):
                            ?>
                            <a class="btn btn--uno"
                               aria-label="<?= get_field('read-more', 'option'); ?> <?= get_field('galleries__label', 'option'); ?>"
                               href="<?= get_field('galleries__url', 'option'); ?>">
                                <?= get_field('galleries__label', 'option'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>