<section class="why_us py-5 bg--secondary">
    <div class="container-xl">
        <div class="why_us__preTitle text-center"><?=get_field('pre_title')?></div>
        <h2 class="why_us__title text-center"><?=get_field('title')?></h2>
        <div class="text-center mb-5"><?=get_field('intro')?></div>
        <div class="row g-5 mb-5">
            <div class="col-md-3 text-center">
                <img class="why_us__image"
                    src="<?=wp_get_attachment_image_url(get_field('image_1'),'full')?>"
                    alt="">
                <div class="fs-5"><?=get_field('title_1')?></div>
                <div><?=get_field('content_1')?></div>
            </div>
            <div class="col-md-3 text-center">
                <img class="why_us__image"
                    src="<?=wp_get_attachment_image_url(get_field('image_2'),'full')?>"
                    alt="">
                <div class="fs-5"><?=get_field('title_2')?></div>
                <div><?=get_field('content_2')?></div>
            </div>
            <div class="col-md-3 text-center">
                <img class="why_us__image"
                    src="<?=wp_get_attachment_image_url(get_field('image_3'),'full')?>"
                    alt="">
                <div class="fs-5"><?=get_field('title_3')?></div>
                <div><?=get_field('content_3')?></div>
            </div>
            <div class="col-md-3 text-center">
                <img class="why_us__image"
                    src="<?=wp_get_attachment_image_url(get_field('image_4'),'full')?>"
                    alt="">
                <div class="fs-5"><?=get_field('title_4')?></div>
                <div><?=get_field('content_4')?></div>
            </div>
        </div>
        <div class="text-center"><a href="/about-bettermove/" class="btn btn-primary btn-arrow">Learn more</a></div>
    </div>
</section>