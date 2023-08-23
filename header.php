<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-bettermove2023
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/lexend-v18-latin-100.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/lexend-v18-latin-300.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/lexend-v18-latin-500.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/lexend-v18-latin-700.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <?php
if (get_field('ga_property', 'options')) {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
        );
    </script>
    <?php
}
if (get_field('gtm_property', 'options')) {
    ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
'event': 'lead',
});
</script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}

wp_head();
?>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "---",
            "url": "https://www.bettermove.co.uk/",
            "logo": "https://www.bettermove.com/wp-content/theme/cb-bettermove2023/img/bm-logo.png",
            "description": "...",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "---",
                "addressLocality": "---",
                "addressRegion": "---",
                "postalCode": "--- ---",
                "addressCountry": "UK"
            },
            "telephone": "+44 (0) ---- ------",
            "email": "hello@bettermove.co.uk"
        }
        }
    </script>

</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
do_action('wp_body_open');
?>
    <div id="preNav">
        <div class="container-xl">
            <span><i class="fa-brands fa-whatsapp"></i> <a
                    href="<?=get_field('whatsapp_link', 'options')?>"
                    target="_blank">Chat With Us 24/7 on WhatsApp</a></span>
            <span><i class="fa-solid fa-phone"></i>
                <?=do_shortcode('[contact_phone]')?></span>
            <span><i class="fa-solid fa-envelope"></i>
                <?=do_shortcode('[contact_email]')?></span>
            <span class="socials">
                <?=do_shortcode('[social_fb_icon]')?>
                <?=do_shortcode('[social_tw_icon]')?>
                <?=do_shortcode('[social_ig_icon]')?>
            </span>
        </div>
    </div>
    <div id="navigation" class="sticky-top">
        <div class="container-xl">
            <div id="wrapperNavbar">
                <a href="/" class="logo" aria-label="Home"></a>
                <nav class="navbar navbar-expand-lg p-0 w-100">
                    <div class="collapse navbar-collapse" id="navbar">
                        <?php
    wp_nav_menu(
        array(
'theme_location'  => 'primary_nav',
'container_class' => 'container-xl w-100',
'menu_class'      => 'navbar-nav justify-content-end gap-4',
'fallback_cb'     => '',
'menu_id'         => 'navbarr',
'depth'           => 3,
'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
)
    );
?>
                    </div>
                </nav>
                <button class="d-lg-none navbar-toggle collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>
            </div>
        </div>
    </div>