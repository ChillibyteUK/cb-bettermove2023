<section class="quote_block has-primary-400-background-color text-white py-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <div class="preTitle mb-2">
                    <?=get_field('pre_title')?>
                </div>
                <h2 class="h3">
                    <?=get_field('title')?>
                </h2>
            </div>
            <div class="col-md-6">
                <?=do_shortcode('[gravityform id="6" title="false"]')?>
            </div>
        </div>
    </div>
</section>