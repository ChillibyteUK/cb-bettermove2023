<?php
$preTitle = get_field('pre_title') ?: 'Simple and cost effective';
$title = get_field('left_title') ?: 'What we offer';
?>
<section class="investor_form pt-5 pb-4">
    <div class="container-xl">
        <div class="row gx-5">
            <div class="col-md-6">
                <div class="text-center mb-5">
                    <div class="preTitle"><?=$preTitle?></div>
                    <h1 class="h2"><?=$title?></h2>
                    <div class="mb-4"><?=get_field('left_content')?></div>
                    <div class="feature_cards__container">
                        <div class="feature_cards__card">
                            <img class="feature_cards__icon"
                                src="<?=wp_get_attachment_image_url(get_field('card_icon_1'), 'full')?>">
                            <h2 class="h4 feature_cards__title">
                                <?=get_field('card_title_1')?>
                            </h2>
                            <div class="feature_cards__content">
                                <?=get_field('card_content_1')?>
                            </div>
                        </div>
                    </div>
                    <div class="feature_cards__container">
                        <div class="feature_cards__card">
                            <img class="feature_cards__icon"
                                src="<?=wp_get_attachment_image_url(get_field('card_icon_2'), 'full')?>">
                            <h3 class="h4 feature_cards__title">
                                <?=get_field('card_title_2')?>
                            </h3>
                            <div class="feature_cards__content">
                                <?=get_field('card_content_2')?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center mb-5">
                    <h2 class="h3 mb-4"><?=get_field('right_title')?></h2>
                    <div class="triangle"></div>
                </div>
                <div class="investor_form__form">
                    <?=do_shortcode('[gravityform id="' . get_field('form_id') . '" title="false"]')?>
                </div>
            </div>
        </div>
    </div>
</section>