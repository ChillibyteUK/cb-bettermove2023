<section class="feature_cards py-5">
    <div class="container-xl text-center">
        <div class="preTitle">
            <?=get_field('pre_title')?>
        </div>
        <h2 class="mb-5"><?=get_field('title')?>
        </h2>
        <div class="mb-5 mw-md-65 mx-auto">
            <?=get_field('intro')?>
        </div>
        <div class="row">
            <div class="col-md-6 feature_cards__container">
                <div class="feature_cards__card">
                    <img class="feature_cards__icon"
                        src="<?=wp_get_attachment_image_url(get_field('card_icon_1'), 'full')?>">
                    <h3 class="h4 feature_cards__title">
                        <?=get_field('card_title_1')?>
                    </h3>
                    <div class="feature_cards__content">
                        <?=get_field('card_content_1')?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 feature_cards__container">
                <div class="feature_cards__card">
                    <img class="feature_cards__icon"
                        src="<?=wp_get_attachment_image_url(get_field('card_icon_2'), 'full')?>">
                    <h3 class="h4 feature_cards__title">
                        <?=get_field('card_title_2')?>
                    </h3>
                    <div class="feature_cards__content">
                        <?=get_field('card_content_2')?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    if (get_field('cta')) {
        $cta = get_field('cta');
        ?>
        <a href="<?=$cta['url']?>"
            target="<?=$cta['target']?>"
            class="btn btn-primary btn-arrow"><?=$cta['title']?></a>
        <?php
    }
            ?>
    </div>
</section>