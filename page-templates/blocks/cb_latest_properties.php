<?php
$preTitle = get_field('pre_title') ?: 'For sale';
$title = get_field('title') ?: 'Our latet properties';
?>
<section class="latest_properties py-5">
    <div class="container-xl">
        <div class="text-center mb-5">
            <div class="preTitle"><?=$preTitle?></div>
            <h2><?=$title?></h2>
        </div>
        <div class="row g-5 mb-5">
        <?php
        $q = new WP_Query(array(
            'post_type' => 'property',
            'posts_per_page' => 3
        ));
        while ($q->have_posts()) {
            $q->the_post();
            global $property;
        ?>
            <div class="col-md-4">
                <a class="property__card" href="<?=get_the_permalink()?>">
                    <div class="property__image">
                        <div class="property__flag">For Sale</div>
                        <div class="property__price">
                            <?=$property->get_formatted_price()?>
                            <?=$property->get_price_qualifier()?>
                        </div>
                        <?=propertyhive_get_property_thumbnail('large','property__thumb')?>
                    </div>
                    <div class="property__detail">
                        <h3 class="property__title"><?=get_the_title()?></h3>
                        <?php
                        $dom = new DOMDocument();
                        $dom->loadHTML($property->post_excerpt);
                        
                        $paragraphs = $dom->getElementsByTagName('p');
                        
                        if ($paragraphs->length > 0) {
                            $firstParagraph = $paragraphs->item(0)->textContent;
                            echo $firstParagraph;
                        }
                        ?>
                    </div>
                    <div class="property__meta">
                        <div class="property__beds"><?=$property->bedrooms?> <?=pluralise($property->bedrooms,'Bedroom')?></div>
                        <div class="property__baths"><?=$property->bathrooms?> <?=pluralise($property->bathrooms,'Bathroom')?></div>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>
        </div>
        <div class="text-center">
            <a href="/properties/" class="btn btn-primary btn-arrow">Search properties</a>
        </div>
    </div>
</section>