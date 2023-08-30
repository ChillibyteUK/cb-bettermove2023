<?php
/**
 * The Template for displaying a single property.
 *
 * Override this template by copying it to yourtheme/propertyhive/single-property.php
 *
 * @author      PropertyHive
 * @package     PropertyHive/Templates
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'propertyhive' );
?>

<section class="hero" style="background-image:url(/wp-content/uploads/2023/08/property-house-1723353_1280.jpg);">
    <div class="container-xl">
        <div>
            <div class="preTitle text-white">VIEW PROPERTY</div>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

    <?php
        /**
         * propertyhive_before_main_content hook
         *
         * @hooked propertyhive_output_content_wrapper - 10 (outputs opening divs for the content)
         */
        do_action( 'propertyhive_before_main_content' );
    ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php ph_get_template_part( 'content', 'single-property' ); ?>

    <?php endwhile; // end of the loop. ?>
    
    <?php
        /**
         * propertyhive_after_main_content hook
         *
         * @hooked propertyhive_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action( 'propertyhive_after_main_content' );
    ?>

    <div id="stop"></div>

<?php get_footer( 'propertyhive' ); ?>