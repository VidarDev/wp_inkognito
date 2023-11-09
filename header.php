<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Inkognito
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link as="style"
          href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet preload" async/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="header" class="header">

        <!-- Navigation bar -->
        <nav id="navigation" class="nav">
            <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i
                        class="iconoir-menu"></i><span class="screen-reader-only">Menu</span></button>
            <div id="nav-modal" class="nav-modal">

                <?php $setting_background = get_field('setting__background', 'option'); ?>
                <?php if ($setting_background && !empty($setting_background)): ?>
                    <img class="nav-modal__background"
                         src="<?= esc_url($setting_background['url']) ?>"
                         role="presentation"
                         aria-label="<?= esc_url($setting_background['alt']) ?>"
                         alt="<?= esc_url($setting_background['alt']) ?>"
                         title="<?= esc_url($setting_background['alt']) ?>"
                         loading="lazy"
                         width="320"
                         height="180"
                         style="object-position:
                         <?php if (get_field('setting__background-x', 'option') && get_field('setting__background-y', 'option')):
                             echo get_field('setting__background-x', 'option');
                             echo " ";
                             echo get_field('setting__background-y', 'option');
                         endif; ?>"
                    />
                <?php endif; ?>

                <div class="nav-modal__content">

                    <?php $setting_logo = get_field('setting__logo', 'option'); ?>
                    <?php if ($setting_logo && !empty($setting_logo)): ?>
                        <img src="<?= esc_url($setting_logo['url']) ?>"
                             role="presentation"
                             aria-label="<?= esc_url($setting_logo['alt']) ?>"
                             alt="<?= esc_url($setting_logo['alt']) ?>"
                             title="<?= esc_url($setting_logo['alt']) ?>"
                             loading="lazy"
                             width="320"
                             height="180"/>
                    <?php endif; ?>

                </div>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    )
                );
                ?>

            </div>
        </nav>

        <!-- Header Hero -->
        <?php $header_backgrond = get_field('header__background', 'option') ?>
        <?php if ($header_backgrond && !empty($header_backgrond)): ?>
            <img class="header__background"
                 src="<?= esc_url($header_backgrond['url']) ?>"
                 role="presentation"
                 aria-label="<?= esc_url($header_backgrond['alt']) ?>"
                 alt="<?= esc_url($header_backgrond['alt']) ?>"
                 title="<?= esc_url($header_backgrond['alt']) ?>"
                 loading="lazy"
                 width="320"
                 height="180"
                 style="object-position:
                 <?php if (get_field('header__background-x', 'option') && get_field('header__background-y', 'option')):
                     echo get_field('header__background-x', 'option');
                     echo " ";
                     echo get_field('header__background-y', 'option');
                 endif; ?>"
            />
        <?php endif; ?>
        <div class="header__wrapper">
            <div class="header__content">

                <!-- Si c'est la page d'accueil -->
                <?php if (is_home() || is_front_page()) : ?>

                    <?php $setting_logo = get_field('setting__logo', 'option'); ?>
                    <?php if ($setting_logo && !empty($setting_logo)): ?>
                        <img src="<?= esc_url($setting_logo['url']) ?>"
                             role="presentation"
                             aria-label="<?= esc_url($setting_logo['alt']) ?>"
                             alt="<?= esc_url($setting_logo['alt']) ?>"
                             title="<?= esc_url($setting_logo['alt']) ?>"
                             loading="lazy"
                             width="320"
                             height="180"/>
                    <?php endif; ?>

                    <h1 class="header__title screen-reader-only">
                        <?php echo get_bloginfo('name') ?>
                    </h1>

                <?php else: ?>

                    <h1 class="header__title">
                        <?php echo get_the_title(); ?>
                    </h1>

                <?php endif; ?>

                <span class="header__slogan">
                    <?php echo get_bloginfo('description', 'display') ?>
                </span>

                <?php if (
                    get_field('header__url-label', 'option')
                    && get_field('header__url', 'option')
                    && get_field('header__url-label', 'option')):
                    ?>
                    <a class="btn btn--light"
                       aria-label="<?= get_field('read-more', 'option'); ?> <? get_field('header__url-label', 'option'); ?>"
                       href="<?= get_field('header__url', 'option'); ?>">
                        <?= get_field('header__url-label', 'option'); ?>
                    </a>
                <?php endif; ?>

            </div>
            <a href="#main"
               aria-label="<?= get_field('read-more', 'option'); ?>"
               class="header__icon">
                <i class="iconoir-nav-arrow-down"></i>
            </a>
        </div>

        <?php if (have_rows('header__informations', 'option')): ?>
            <div class="header__infos">
                <?php while (have_rows('header__informations', 'option')): the_row(); ?>

                    <?php if (
                        get_sub_field('information__title', 'option')
                        && get_sub_field('information__content', 'option')):
                        ?>
                        <div class="infos__item">
                            <div>
                                <h2 class="infos__title">
                                    <?= get_sub_field('information__title', 'option'); ?>
                                </h2>
                                <?= get_sub_field('information__content', 'option'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        
    </header><!-- #masthead -->

    <main id="main">
