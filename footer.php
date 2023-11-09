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
        <span class="contact__subtitle subtitle">
            <?php if (get_field('footer__subtitle', 'option')): echo get_field('footer__subtitle', 'option'); endif; ?>
        </span>
        <h2 class="contact__title title">
            <?php if (get_field('footer__title', 'option')): echo get_field('footer__title', 'option'); endif; ?>
        </h2>
        <div class="contact__wrapper">
            <div class="contact__image">
                <div class="contact__vertical">
                    <span>
                        <?php if (get_field('footer__vertical-text', 'option')): echo get_field('footer__vertical-text', 'option'); endif; ?>
                    </span>
                </div>
                <?php $contact_image = get_field('footer__image', 'option'); ?>
                <?php if ($contact_image && !empty($contact_image)): ?>
                    <figure>
                        <img src="<?= esc_url($contact_image['url']) ?>"
                             role="presentation"
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
                <span class="contact__adresse-subtitle">
                    <?php if (get_field('footer__address-subtitle', 'option')): echo get_field('footer__address-subtitle', 'option'); endif; ?>
                </span>
                <h3 class="contact__adresse-title">
                    <?php if (get_field('footer__address-name', 'option')): echo get_field('footer__address-name', 'option'); endif; ?>
                </h3>
                <a href="<?php if (get_field('footer__address-url', 'option')): echo get_field('footer__address-url', 'option'); endif; ?>"
                   target="_blank" class="contact__adresse">
                    <i class="iconoir-position"></i>
                    <p><?php if (get_field('footer__address', 'option')): echo get_field('footer__address', 'option'); endif; ?></p>
                </a>
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
