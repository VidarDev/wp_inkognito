<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Inkognito
 */

?>

</main>

<!-- Contact -->
<div class="contact">
    <div class="container">

        <?php if (get_field('footer__subtitle', 'option')): ?>
            <span class="contact__subtitle subtitle">
                <?= get_field('footer__subtitle', 'option'); ?>
            </span>
        <?php endif; ?>

        <?php if (get_field('footer__title', 'option')): ?>
            <h2 class="contact__title title">
                <?= get_field('footer__title', 'option'); ?>
            </h2>
        <?php endif; ?>

        <div class="contact__wrapper">
            <div class="contact__image">

                <?php if (get_field('footer__vertical-text', 'option')): ?>
                    <div class="contact__vertical">
                        <span>
                            <?= get_field('footer__vertical-text', 'option'); ?>
                        </span>
                    </div>
                <?php endif; ?>

                <?php $contact_image = get_field('footer__image', 'option'); ?>
                <?php if ($contact_image && !empty($contact_image)): ?>
                    <figure>
                        <img src="<?= esc_url($contact_image['url']) ?>"
                             role="img"
                             aria-label="<?= esc_url($contact_image['alt']) ?>"
                             alt="<?= esc_url($contact_image['alt']) ?>"
                             title="<?= esc_url($contact_image['alt']) ?>"
                             loading="lazy"
                             width="320"
                             height="180"
                        />
                    </figure>
                <?php endif; ?>

            </div>
            <div class="contact__content">

                <?php if (get_field('footer__address-subtitle', 'option')): ?>
                    <span class="contact__adresse-subtitle">
                        <?= get_field('footer__address-subtitle', 'option'); ?>
                    </span>
                <?php endif; ?>

                <?php if (get_field('footer__address-name', 'option')): ?>
                    <h3 class="contact__adresse-title">
                        <?= get_field('footer__address-name', 'option'); ?>
                    </h3>
                <?php endif; ?>

                 <?php if (
                     get_field('footer__address-url', 'option')
                     && get_field('footer__address', 'option')):
                 ?>
                    <a href="<?= get_field('footer__address-url', 'option'); ?>"
                       target="_blank" class="contact__adresse">
                        <i class="iconoir-position"></i>
                        <p><?= get_field('footer__address', 'option'); ?></p>
                    </a>
                <?php endif; ?>

                <?php $contact_geoloc = get_field('footer__address-map', 'option'); ?>
                <?php if ($contact_geoloc && !empty($contact_geoloc)): ?>
                    <figure class="contact__adresse-geolocation">
                        <img src="<?= esc_url($contact_geoloc['url']) ?>"
                             role="presentation"
                             aria-label="<?= esc_url($contact_geoloc['alt']) ?>"
                             alt="<?= esc_url($contact_geoloc['alt']) ?>"
                             title="<?= esc_url($contact_geoloc['alt']) ?>"
                             loading="lazy"
                             width="320"
                             height="180"
                        />
                    </figure>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer id="footer" class="footer">
    <div class="site-info">
        <span>Copyright ©<?= date('Y'); ?> - Tous droits réservés</span>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
