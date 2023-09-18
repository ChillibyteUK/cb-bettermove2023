<?php
$class = $block['backgroundColor'] ?? null;
if ($class) {
    $class = 'has-' . $class . '-background-color';
}
?>
<section class="full_width py-5 <?=$class?>">
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
        <div class="full_width__content">
            <?=get_field('content')?>
        </div>
        <?php
    if (get_field('cta')) {
        $link = get_field('cta');
        ?>
    <div class="text-center">
        <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-primary btn-arrow"><?=$link['title']?></a>
    </div>
        <?php
    }
        ?>
    </div>
</section>