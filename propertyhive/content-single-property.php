<?php
/**
 * The template for displaying property content in the single-property.php template
 *
 * Override this template by copying it to yourtheme/propertyhive/content-single-property.php
 *
 * @author      PropertyHive
 * @package     PropertyHive/Templates
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $property;
?>

<?php
     if ( post_password_required() ) 
     {
        echo get_the_password_form();
        return;
     }
?>

<div id="property-<?php the_ID(); ?>" <?php post_class("row"); ?>>
    <div class="col-md-9">
        <div class="slider-holder position-relative">
            <?php
                /**
                 * propertyhive_before_single_property_summary hook
                 *
                 * @hooked propertyhive_template_not_on_market - 5
                 * @hooked propertyhive_show_property_images - 10
                 */
                do_action( 'propertyhive_before_single_property_summary' );
            ?>
        </div>
        <div class="summary entry-summary">
            <div class="summary-box p-5">
                <div class="main-feature-row row">
                    <div class="summary-col col-md-4">
                        <h5>Price</h5>
                        <h3>£<?php echo $property->price; ?></h3>
                    </div>
                    <div class="summary-col col-md-4">
                        <h5>Availability</h5>
                        <h3><?php echo $property->availability; ?></h3>
                    </div>
                    <div class="summary-col col-md-4">
                        <h5>property type</h5>
                        <h3><?php echo $property->property_type; ?></h3> 
                    </div>
                </div>
                <div class="feature-row row pt-4 mt-4">
                    <div class="summary-col-4 col-md-3">
                        <h5>Bedrooms</h5>
                        <h3><?php echo $property->bedrooms; ?></h3>  
                    </div>
                    <div class="summary-col-4 col-md-3">
                        <h5>Bathrooms</h5>
                        <h3><?php echo $property->bathrooms; ?></h3>
                    </div>
                    <div class="summary-col-4 col-md-3">
                        <h5>reception rooms</h5>
                        <h3><?php echo $property->reception_rooms; ?></h3>            
                    </div>
                    <div class="summary-col-4 col-md-3">
                        <h5>Tenure</h5>
                        <h3><?php echo $property->tenure; ?></h3>        
                    </div>
                </div>
            </div>
        </div><!-- .summary -->
        <?php
            /**
             * propertyhive_after_single_property_summary hook
             *
             * @hooked propertyhive_template_single_actions - 10
             * @hooked propertyhive_template_single_features - 20
             * @hooked propertyhive_template_single_summary - 30
             * @hooked propertyhive_template_single_description - 40
             */
           do_action( 'propertyhive_after_single_property_summary' );
        ?>
        <?php echo do_shortcode('[property_map]'); ?>
    
        <a style="margin-top:20px; display:inline-block;" href="/properties">< Back to all properties</a>
        
         <p style="font-style: italic;  font-size: 11px; line-height: 1em; margin-bottom: 20px;margin-top:20px; width:70%;">Please Note: These particulars, whilst believed to be accurate are set out as a general outline only for guidance and do not constitute any part of an offer or contract. Intending purchasers should not rely on them as statements of representations of fact, but must satisfy themselves by inspection or otherwise as to their accuracy. No person in this firm’s employment has the authority to make or give any representation or warranty in respect of the property.</p>
    </div>

    <div class="contact-holder col-md-3 mb-4">
        <div class="contact-holder-inner contact_details__form contact_details text-white sticky-top">
            <h3>Enquire about this property</h3>
            <span class="sidebar-phone mb-3 d-block"><a href="tel:+443300040050" class="text-white">0330 0040050</a></span>
            <?php echo do_shortcode(' [gravityform id="5" title="false" description="false" ajax="true" tabindex="49" field_values="reference=' . $property->reference_number . '"]'); ?>
            <p class="sidebar-ref">Ref: <?php echo $property->reference_number; ?></p>
        </div>
    </div>
</div><!-- #property-<?php the_ID(); ?> -->