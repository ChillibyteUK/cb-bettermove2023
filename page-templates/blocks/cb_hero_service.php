<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full');// ?? null;
?>
<section class="hero" style="background-image:url(<?=$img?>);">
    <div class="container-xl">
        <div>
            <h1>
                <?=get_field('title')?>
            </h1>
            <h2 class="text-white"><?=get_field('pre_title')?></h2>
            <div class="hero_form">
                <?=do_shortcode('[gravityform id="1" title="false"]')?>
            </div>
        </div>
    </div>
</section>