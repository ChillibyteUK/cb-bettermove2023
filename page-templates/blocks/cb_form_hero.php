<?php
$bg = wp_get_attachment_image_url(get_field('background'), 'full');
?>

<section class="quote_hero quote_hero--form">
    <div class="container-xl py-5" style="background-image:url(<?=$bg?>)">
        <h1 class="mb-5 text-center">
            <div class="preTitle mb-3">We buy your house for cash</div>
            <?=get_field('title')?>
        </h1>
        <!-- <div class="pre_form">Get a <span>cash offer</span> on your home today!</div> -->
        <div class="hero_form">
            <?=do_shortcode('[gravityform id="7"]')?>
        </div>
    </div>
</section>
<div class="quote_hero__usp">
    <div class="container-xl py-5">
        <div class="icon_grid">
            <div>
                <img
                src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--clock.svg">
                <div>Best Price Promise</div>
            </div>
            <div>
                <img
                src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--message.svg">
                <div>No fees or charges</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--heart.svg">
                <div>Award winning</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--link.svg">
                <div>Ombudsman regulated</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--key.svg">
                <div>Total peace of mind</div>
            </div>
        </div>
        <div class="text-center">Does our <strong>award winning approach</strong> sound too good to be true? Find out <a
                href="#how-we-do-it">how we do it</a>.</div>
    </div>
</section>