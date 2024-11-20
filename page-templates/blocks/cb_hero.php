<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full');// ?? null;
?>
<section class="hero" style="background-image:url(<?=$img?>);">
    <div class="container-xl">
        <div>
            <div class="preTitle text-white"><?=get_field('pre_title')?></div>
            <h1>
                <?=get_field('title')?>
            </h1>
            <div class="hero_form">
                <?=do_shortcode('[gravityform id="1" title="false"]')?>
            </div>
        </div>
        <?php
        //Show bullets
        if ( get_field("bullet_1") ) {
        ?>
        <section class="bullets pt-4">
            <div class="container-xl d-flex justify-content-around flex-wrap text-center">
                <ul>
                    <li><?=get_field("bullet_1")?></li>
                    <li><?=get_field("bullet_2")?></li>
                    <li><?=get_field("bullet_3")?></li>
                </ul>
            </div>
        </section>
        <?php
        }
        ?>
    </div>
</section>