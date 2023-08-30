<section class="latest_properties py-5">
    <div class="container-xl">
        <div class="text-center mb-5">
            <div class="preTitle">For sale</div>
            <h2>Our latest properties</h2>
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
            // var_dump($property);
        ?>
            <div class="col-md-4">
                <div class="property__card">
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
                    </div>
                    <div class="property__meta">
                        <div class="property__beds"><?=$property->bedrooms?> <?=pluralise($property->bedrooms,'Bedroom')?></div>
                        <div class="property__baths"><?=$property->bathrooms?> <?=pluralise($property->bathrooms,'Bathroom')?></div>
                    </div>
                    <div class="p-2 text-center"><a href="<?=get_the_permalink()?>" class="btn btn-primary">More details</a></div>
                </div>
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