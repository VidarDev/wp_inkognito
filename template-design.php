<?php
/*
Template Name: Design
*/
?>
<?php get_header(); ?>

<h1 class="screen-reader-only"><?= get_the_title(); ?></h1>

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
