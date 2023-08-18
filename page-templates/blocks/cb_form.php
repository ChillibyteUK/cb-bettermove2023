<?php
$class = $block['backgroundColor'] ?? null;
if ($class) {
    $class = 'has-' . $class . '-background-color';
}
?>
<a id="form" class="anchor"></a>
<section class="form_block py-5 <?=$class?>">
    <div class="container-xl text-center">
        <div class="preTitle">
            <?=get_field('pre_title')?>
        </div>
        <h2 class="mb-5"><?=get_field('title')?>
        </h2>
    </div>
    <div class="container-xl">
        <?=do_shortcode('[gravityform id="' . get_field('form_id') . '" title="false"]')?>
    </div>
</section>