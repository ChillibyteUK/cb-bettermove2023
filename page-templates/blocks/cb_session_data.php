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
	<?php
	foreach ( $session_data as $key => $value ) {
    	echo $key . ': ' . htmlspecialchars( $value ) . '<br>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
	?>
</div>