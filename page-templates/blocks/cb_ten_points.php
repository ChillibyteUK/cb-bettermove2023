<section class="ten_points py-5">
    <div class="container-xl text-center">
        <div class="preTitle">Our guarantee</div>
        <h2 class="mb-4">Our 10 Point Promise</h2>
        <div class="mw-md-65 mx-auto mb-5">
            By dealing with Bettermove you will only ever deal with expertly trained, professional, proactive, polite, reliable and honest staff who will go above and beyond to manage the property sale to the end. This is our promise to sellers:
        </div>
        <div class="row g-5 justify-content-center">
        <?php
        while(have_rows('points')) {
            the_row();
            ?>
            <div class="col-md-4">
                <img class="ten_points__image" src="<?=wp_get_attachment_image_url(get_sub_field('image'),'full')?>" alt="">
                <div><?=get_sub_field('content')?></div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
</section>