<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-bettermove2023
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="preload"
        href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/lexend-v18-latin-100.woff2' ); ?>"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/lexend-v18-latin-300.woff2' ); ?>"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/lexend-v18-latin-500.woff2' ); ?>"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/lexend-v18-latin-700.woff2' ); ?>"
        as="font" type="font/woff2" crossorigin="anonymous">
    <?php
	if ( get_field( 'ga_property', 'options' ) ) {
		?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?= esc_attr( get_field( 'ga_property', 'options' ) ); ?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?= esc_attr( get_field( 'ga_property', 'options' ) ); ?>'
        );
    </script>
		<?php
	}
	if ( get_field( 'gtm_property', 'options' ) ) {
		?>
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
            '<?= esc_attr( get_field( 'gtm_property', 'options' ) ); ?>'
        );
    </script>
    <!-- End Google Tag Manager -->
		<?php
	}
	if ( get_field( 'google_site_verification', 'options' ) ) {
		echo '<meta name="google-site-verification" content="' . esc_attr( get_field( 'google_site_verification', 'options' ) ) . '" />';
	}
	if ( get_field( 'bing_site_verification', 'options' ) ) {
		echo '<meta name="msvalidate.01" content="' . esc_attr( get_field( 'bing_site_verification', 'options' ) ) . '" />';
	}

	wp_head();

	if ( is_front_page() ) {
		?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Organization",
	"name": "Bettermove",
	"url": "https://www.bettermove.co.uk/",
	"logo": "https://www.bettermove.co.uk/wp-content/themes/cb-bettermove2023/img/bm-logo.svg",
	"description": "Bettermove is a UK-based company that provides homeowners with a straightforward, transparent, and fee-free service for selling their properties. They offer two main options for selling: direct purchase, where Bettermove buys the property directly using their own funds, enabling a quick sale that can be completed in as little as seven days depending on the homeowner's timeline; and buyer matching, where they match the property with pre-approved cash buyers from their network, aiming to secure a sale within 30 days. Bettermove charges no fees or commissions and even covers legal fees related to the sale. The company is regulated by The Property Ombudsman and is a member of the National Association of Property Buyers, ensuring transparency and adherence to industry standards.",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "20-22 Bridge End",
		"addressRegion": "Leeds",
		"postalCode": "LS1 4DJ",
		"addressCountry": "UK"
	},
	"contactPoint": {
		"@type": "ContactPoint",
        "telephone": "+44 (0) 330 0040050",
        "email": "hello@bettermove.co.uk",
        "areaServed": "GB",
        "availableLanguage": "en"
	},
	"sameAs": [
        "https://www.instagram.com/bettermoveagent/",
        "https://www.facebook.com/bettermoveagent/",
        "https://x.com/bettermoveagent"
	]
}
</script>
		<?php
	}
	?>
    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
	do_action( 'wp_body_open' );
	?>
    <div id="preNav">
        <div class="container-xl">
            <span><i class="fa-brands fa-whatsapp"></i> <a
                    href="<?= esc_url( get_field( 'whatsapp_link', 'options' ) ); ?>"
                    target="_blank">Chat With Us 24/7 on WhatsApp</a></span>
            <span><i class="fa-solid fa-phone"></i>
                <?= do_shortcode( '[contact_phone]' ); ?></span>
            <span><i class="fa-solid fa-envelope"></i>
                <?= do_shortcode( '[contact_email]' ); ?></span>
            <span class="socials">
                <?= do_shortcode( '[social_fb_icon]' ); ?>
                <?= do_shortcode( '[social_tw_icon]' ); ?>
                <?= do_shortcode( '[social_ig_icon]' ); ?>
                <?= do_shortcode( '[social_threads_icon]' ); ?>
                <?= do_shortcode( '[social_yt_icon]' ); ?>
            </span>
        </div>
    </div>
    <div id="wrapperNavbar" class="sticky-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xl py-2 nav-top">
                <a href="/" class="logo" aria-label="Home"></a>
                <div class="button-container d-lg-none">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false"
                        aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i>
                    </button>
                </div>                
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
            </div>
        </nav>
    </div>