<?php
$preTitle = get_field('pre_title') ?: 'Simple and cost effective';
$title = get_field('left_title') ?: 'What we offer';
?>
<section class="investor_form">
    <div class="container-xl">
        <div class="row">
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
                    <h2 class="h3"><?=get_field('right_title')?></h2>
                    ARROW
                </div>
                FORM HERE
            </div>
        </div>
    </div>
</section>