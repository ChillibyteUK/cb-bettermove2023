<?php
/**
 * The Template for displaying property archives, also referred to as 'Search Results'
 *
 * Override this template by copying it to yourtheme/propertyhive/archive-property.php
 *
 * @author      PropertyHive
 * @package     PropertyHive/Templates
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'propertyhive' ); global $wpdb; ?>

<?php
$my_postid = 17;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>

<div class="pink-bg pb-5">
    <?php
        /**
         * propertyhive_before_main_content hook
         *
         * @hooked propertyhive_output_content_wrapper - 10 (outputs opening divs for the content)
         */
        do_action( 'propertyhive_before_main_content' );
    ?>

        <?php
        //CB - hiding this H1
        if ( (1 == 2) && apply_filters( 'propertyhive_show_page_title', true ) ) :
        ?>

            <h1 class="page-title"><?php propertyhive_page_title(); ?></h1>

        <?php endif; ?>
        
        <?php
            /**
             * propertyhive_before_search_results_loop hook
             * @hooked propertyhive_search_form - 10
             * @hooked propertyhive_result_count - 20
             * @hooked propertyhive_catalog_ordering - 30
             */
            do_action( 'propertyhive_before_search_results_loop' );
        ?>

        <?php 
            // Output results. Filter allows us to not display the results whilst maintaining the main query. True by default
            // Used primarily by the Map Search add on - https://wp-property-hive.com/addons/map-search/
            if ( apply_filters( 'propertyhive_show_results', true ) ) : 
        ?>
        
            <?php if ( have_posts() ) : ?>

                <?php propertyhive_property_loop_start(); ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php ph_get_template_part( 'content', 'property' ); ?>

                    <?php endwhile; // end of the loop. ?>

                <?php propertyhive_property_loop_end(); ?>

            <?php else: ?>

                <?php ph_get_template( 'search/no-properties-found.php' ); ?>

            <?php endif; ?>

        <?php endif; ?>

        <?php
            /**
             * propertyhive_after_search_results_loop hook
             *
             * @hooked propertyhive_pagination - 10
             */
            do_action( 'propertyhive_after_search_results_loop' );
        ?>

    <?php
        /**
         * propertyhive_after_main_content hook
         *
         * @hooked propertyhive_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action( 'propertyhive_after_main_content' );
    ?>
</div>
<?php get_footer( 'propertyhive' ); ?>