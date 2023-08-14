<?php

$class = $block['backgroundColor'] ?? null;
if ($class) {
    $class = 'has-' . $class . '-background-color';
}

$splitText = 'col-lg-6';
$splitImage = 'col-lg-6';

$orderText = 'order-2 order-lg-1';
$orderImage = 'order-1 order-lg-2';

if (get_field('order') == 'image-text') {
    $orderText = 'order-2 order-lg-2';
    $orderImage = 'order-1 order-lg-1';
}
?>
<section class="text_image <?=$class?>">
    <div class="container-xl py-5">
        <div class="d-lg-none">
            <?php
            if (get_field('pre_title')) {
                ?>
            <div class="preTitle">
                <?=get_field('pre_title')?>
            </div>
            <?php
            }
?>
            <h2><?=get_field('title')?></h2>
        </div>
        <div class="row align-items-center g-5">
            <div
                class="<?=$splitText?> <?=$orderText?>">
                <div class="d-none d-lg-block">
                    <?php
    if (get_field('pre_title')) {
        ?>
                    <div class="preTitle">
                        <?=get_field('pre_title')?>
                    </div>
                    <?php
    }
?>
                    <h2><?=get_field('title')?>
                    </h2>
                </div>
                <div class="mb-4">
                    <?=get_field('content')?>
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
            <div
                class="<?=$splitImage?> <?=$orderImage?> text-center">
                <?=wp_get_attachment_image(get_field('image'), 'large', null, array('class' => 'text_image__image'))?>
            </div>
        </div>
    </div>
</section>