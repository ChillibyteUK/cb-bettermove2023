<?php
/**
 * Block Name: CB Session Data
 * Description: Displays session data for the current user.
 *
 * @package cb-bettermove2023
 */

defined( 'ABSPATH' ) || exit;

$session_data = getSessionData();

?>
<div class="container-xl py-5">
	<h2>Session Data:</h2>
	<?php
	foreach ( $session_data as $key => $value ) {
    	echo esc_html( $key ) . ': ' . esc_html( $value ) . '<br>';
	}
	?>

	<h2>All Tracking Cookies (cb_*):</h2>
	<pre><?php
	$tracking_cookies = array_filter(
		$_COOKIE,
		function( $key ) {
			return strpos( $key, 'cb_' ) === 0;
		},
		ARRAY_FILTER_USE_KEY
	);
	print_r( $tracking_cookies ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r
	?></pre>

	<h2>All Cookies:</h2>
	<pre><?php print_r( $_COOKIE ); // phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_print_r ?></pre>
</div>