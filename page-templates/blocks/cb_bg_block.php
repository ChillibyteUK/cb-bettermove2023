<section class="bg_block py-5"
    style="background-image:url(<?=wp_get_attachment_image_url(get_field('background'), 'full')?>)">
    <div class="container-xl text-center">
        <div class="preTitle">
            <?=get_field('pre_title')?>
        </div>
        <h2 class="mb-4"><?=get_field('title')?>
        </h2>
        <div class="mw-md-65 mx-auto mb-5">
            <?=get_field('intro')?>
        </div>
    </div>
    <div class="container-xl">
        <div class="bg_block__content">
            <?=get_field('content')?>
        </div>
    </div>
</section>