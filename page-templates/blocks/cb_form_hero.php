<?php
$bg = wp_get_attachment_image_url(get_field('background'), 'full');
?>

<section class="quote_form_hero">
    <div class="container-xl py-5" style="background-image:url(<?=$bg?>)">
        <h1 class="mb-3 text-center">
            <div class="preTitle mb-3">We buy your house for cash</div>
            <?=get_field('title')?>
        </h1>
        <div class="pre_form text-center mb-4">Get a <span>up to 100%</span> and sell in <span>under 7 days</span></div>
        <div class="hero_form">
            <?=do_shortcode('[gravityform id="7"]')?>
        </div>
    </div>
</section>
<div class="quote_hero__usp">
    <div class="container-xl pt-5">
        <div class="icon_grid">
            <div>
                <img
                src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--wallet.svg">
                <div>Best Price Promise</div>
            </div>
            <div>
                <img
                src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--card.svg">
                <div>No fees or charges</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--heart.svg">
                <div>Award winning</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--check.svg">
                <div>Ombudsman regulated</div>
            </div>
        </div>
    </div>
</section>