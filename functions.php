<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

define( 'CB_THEME_DIR', WP_CONTENT_DIR . '/themes/cb-bettermove2023' );

require_once CB_THEME_DIR . '/inc/cb-theme.php';

/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );


/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

    // Get the theme data.
    $the_theme = wp_get_theme();

    $suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
    // Grab asset urls.
    $theme_styles  = "/css/child-theme{$suffix}.css";
    $theme_scripts = "/js/child-theme{$suffix}.js";

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array( 'jquery' ), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
 * Add defer attribute to specific scripts.
 *
 * @param string $tag    The script tag.
 * @param string $handle The script handle.
 * @param string $src    The script source URL.
 * @return string
 */
function cb_defer_scripts( $tag, $handle, $src ) {
    $defer = array(
    	'child-understrap-scripts',
    	'jquery',
    );
    if ( in_array( $handle, $defer, true ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n"; // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'cb_defer_scripts', 10, 3 );

/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'cb-bettermove2023', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter
    return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );


/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
    wp_enqueue_script(
        'understrap_child_customizer',
        get_stylesheet_directory_uri() . '/js/customizer-controls.js',
        array( 'customize-preview' ),
        '20130508',
        true
    );
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );

/**
 * Set 'with_front' to false for the 'experts' post type.
 */
add_filter(
	'register_post_type_args',
	function ( $args, $post_type ) {
    	if ( 'property' === $post_type && is_array( $args ) ) {
        	$args['rewrite']['with_front'] = false;
	    }
    	return $args;
	},
	99,
	2
);

/**
 * Redirect to properties archive page when an unlisted property is accessed.
 */
function unlisted_property_redirect() {
    // check for 404.
    if ( is_404() ) {
        global $wp_query;
        // check that wp has figured out post_type from the request.
        // and it's the type you're looking for.
        if ( isset( $wp_query->query['post_type'] ) && 'property' === $wp_query->query['post_type'] ) {
            wp_safe_redirect( home_url( '/properties/' ) );
            exit();
        }
    }
}
add_action( 'template_redirect', 'unlisted_property_redirect' );

/**
 * Disable Yoast SEO next rel link on the front page.
 *
 * @param string $link The rel link.
 * @return bool|string
 */
function bg_disable_front_page_wpseo_next_rel_link( $link ) {
    if ( is_home() ) {
        return false;
    }

    return $link;
}
add_filter( 'wpseo_next_rel_link', 'bg_disable_front_page_wpseo_next_rel_link' );

/**
 * Get session data.
 */
function getSessionData() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
    return get_session_data_from_cookies();
}

/**
 * Extract UK postcode from address.
 *
 * @param string $address The full address.
 * @return string|null The extracted postcode or null if not found.
 */
function extractPostcode( $address ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
    // UK postcode regex pattern.
    $postcode_pattern = "/\b([A-Z]{1,2}[0-9][0-9A-Z]?\s?[0-9][A-Z]{2})\b/i";

    // Match the postcode in the address.
    if ( preg_match( $postcode_pattern, $address, $matches ) ) {
        return $matches[1]; // Return the matched postcode.
    }

    return null; // Return null if no postcode is found.
}

/**
 * Remove UK postcode from address.
 *
 * @param string $address The full address.
 * @return string The address without the postcode.
 */
function removePostcode( $address ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
    // UK postcode regex pattern.
    $postcode_pattern = "/\b([A-Z]{1,2}[0-9][0-9A-Z]?\s?[0-9][A-Z]{2})\b/i";
    // Remove postcode from address.
    $cleaned_address = preg_replace( $postcode_pattern, '', $address );

    // Trim extra spaces.
    return trim( $cleaned_address );
}

/**
 * Post to third party for form ID 7.
 *
 * @param array $entry The form entry.
 * @param array $form  The form object.
 */
function post_to_third_party( $entry, $form ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter
    $address  = rgar( $entry, '2' );
    $postcode = extractPostcode( $address );
    $address  = removePostcode( $address );
    $address  = str_replace( ' , ', ', ', $address );

    $sessionData = getSessionData(); // phpcs:ignore WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase

    $is_letter = rgar( $entry, 6 );

    if ( 'Letter' === $is_letter ) {
        $source = 'Letter';
    } else {
        $source = $sessionData['referring_url'] ? $sessionData['referring_url'] : $sessionData['utm_source']; // phpcs:ignore WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase
    }

	// phpcs:disable
    $url = 'https://bettermove.flg360.co.uk/api/APILeadCreateUpdate.php';
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
    <data>
      <lead>
        <key>vrShN7qYL7q1Zf6GfzpVwKyEBddWSZBf</key>
        <leadgroup>56597</leadgroup>
        <site>0</site>
        <status>New</status>
        <source>' . $source . '</source>
        <medium>' . $sessionData['utm_medium'] . '</medium> 
        <term>' . $sessionData['utm_term'] . '</term>
        <data18>' . rgar( $entry, 6 ) . '</data18>
        <firstname>' . rgar( $entry, '5.3' ) . '</firstname>
        <lastname>' . rgar( $entry, '5.6' ) . '</lastname>
        <phone1>' . rgar( $entry, 3 ) . '</phone1>
        <email>' . rgar( $entry, 4 ) . '</email>
        <contactphone>Yes</contactphone>
        <contactsms>Yes</contactsms>
        <contactemail>Yes</contactemail>
        <contactmail>Yes</contactmail>
        <contactfax>Yes</contactfax>
        <contacttime>Anytime</contacttime>
        <address>' . $address . '</address>
        <postcode>' . $postcode . '</postcode>
      </lead>
    </data>';
	// phpcs:enable

    $response_json = wp_remote_post(
        $url,
        array(
            'method'      => 'POST',
            'timeout'     => 45,
            'redirection' => 5,
            'httpversion' => '1.0',
            'headers'     => array( 'Content-type' => 'application/xml' ),
            'body'        => $xml,
            'sslverify'   => false,
        )
    );
    GFCommon::log_debug( 'gform_after_submission: response => ' . print_r( $response_json, true ) );
    GFCommon::log_debug( 'stuff sent: response => ' . print_r( $xml, true ) );
}
add_action( 'gform_after_submission_7', 'post_to_third_party', 10, 2 );

/**
 * Post to third party for form ID 9.
 *
 * @param array $entry The form entry.
 * @param array $form  The form object.
 */
function post_to_third_party_9( $entry, $form ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter

    $sessionData = getSessionData(); // phpcs:ignore WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase

    $url = 'https://bettermove.flg360.co.uk/api/APILeadCreateUpdate.php';
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
        <data>
            <lead>
                <key>vrShN7qYL7q1Zf6GfzpVwKyEBddWSZBf</key>
                <leadgroup>56597</leadgroup>
                <site>0</site>
                <status>New</status>
                <source>OTM</source>
                <firstname>' . rgar( $entry, 6 ) . '</firstname>
                <lastname>' . rgar( $entry, 8 ) . '</lastname>
                <phone1>' . rgar( $entry, 2 ) . '</phone1>
                <email>' . rgar( $entry, 3 ) . '</email>
                <contactphone>Yes</contactphone>
                <contactsms>Yes</contactsms>
                <contactemail>Yes</contactemail>
                <contactmail>Yes</contactmail>
                <contactfax>Yes</contactfax>
                <contacttime>Anytime</contacttime>
            </lead>
        </data>';

    $response_json = wp_remote_post(
        $url,
        array(
            'method'      => 'POST',
            'timeout'     => 45,
            'redirection' => 5,
            'httpversion' => '1.0',
            'headers'     => array( 'Content-type' => 'application/xml' ),
            'body'        => $xml,
            'sslverify'   => false,
        )
    );
    GFCommon::log_debug( 'gform_after_submission: response => ' . print_r( $response_json, true ) );
	GFCommon::log_debug( 'stuff sent: response => ' . print_r( $xml, true ) );
}
add_action( 'gform_after_submission_9', 'post_to_third_party_9', 10, 2 );


/**
 * Add BlogPosting schema to single post pages.
 */
function bm_add_blogposting_schema() {
    if ( ! is_singular( 'post' ) ) {
        return;
    }

    global $post;

    // Build your schema data.
    $schema = array(
        '@context'         => 'https://schema.org',
        '@type'            => 'BlogPosting',
        'mainEntityOfPage' => array(
            '@type' => 'WebPage',
            '@id'   => get_permalink( $post ),
		),
        'headline'         => get_the_title( $post ),
        'description'      => get_the_excerpt( $post ),
        'publisher'        => array(
            '@type' => 'Organization',
            'name'  => get_bloginfo( 'name' ),
            'logo'  => array(
                '@type' => 'ImageObject',
                'url'   => get_stylesheet_directory_uri() . '/img/bm-logo.svg',
            ),
        ),
        'datePublished'    => get_the_date( 'c', $post ),
        'dateModified'     => get_the_modified_date( 'c', $post ),
	);

    // Output the JSON-LD.
    echo "\n<script type=\"application/ld+json\">\n"
	. wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT )
	. "\n</script>\n";
}
add_action( 'wp_head', 'bm_add_blogposting_schema', 1 );

// Remove duplicate homepage entry from Yoast sitemap.
add_filter(
	'wpseo_sitemap_post_type_archive_link',
	function ( $url, $post_type ) {
		// Don't change other post types.
		if ( 'page' === $post_type ) {
			return false; // Removes the duplicate homepage Page entry.
		}
		return $url;
	},
	10,
	2
);

add_filter(
	'wpseo_exclude_from_sitemap_by_post_ids',
	function ( $excluded ) {
		$front_id = (int) get_option( 'page_on_front' );
		if ( $front_id ) {
			$excluded[] = $front_id;
		}
		return $excluded;
	}
);
