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
        ?>
            <div class="col-md-4">
                <div class="property__card">
                    <div class="property__image">
                        <div class="property__flag">For Sale</div>
                        <div class="property__price">PRICE<br>sub</div>
                        <?=propertyhive_get_property_thumbnail()?>
                    </div>
                    <?=get_the_title()?>
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