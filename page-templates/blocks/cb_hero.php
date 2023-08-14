<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full');// ?? null;
$icon = get_field('icon') ?? null;
if ($icon) {
    $icon = get_stylesheet_directory_uri() . '/img/icon--' . $icon . '--wo.svg';
}
?>
<section class="hero" style="background-image:url(<?=$img?>);">
    <div class="container-xl" data-aos="fade">
        <img class="hero__icon" src="<?=$icon?>" alt="">
        <div>
            <h1>
                <?=get_field('title')?>
            </h1>
            <?php
            if (get_field('intro')) {
                ?>
            <div class="fs-5 text-white">
                <?=get_field('intro')?>
            </div>
            <?php
            }
?>
        </div>
    </div>
</section>