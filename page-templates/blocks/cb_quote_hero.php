<?php
$bg = wp_get_attachment_image_url(get_field('background'), 'full');
?>

<section class="quote_hero">
    <div class="container-xl py-5" style="background-image:url(<?=$bg?>)">
        <h1 class="mb-5">
            <?=get_field('title')?><br class="d-none d-md-block">
            <span class="smaller">to sell your property</span>
        </h1>
        <!-- <div class="pre_form">Get a <span>cash offer</span> on your home today!</div> -->
        <div class="hero_form">
            <?=do_shortcode('[gravityform id="1"]')?>
        </div>
    </div>
</section>
<div class="quote_hero__usp">
    <div class="container-xl py-5">
        <div class="icon_grid">
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--heart.svg">
                <div>Bespoke quick sale solutions - Whatever the circumstances we have the solution</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--clock.svg">
                <div>Sell today or in a month - you decide</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--message.svg">
                <div>We can buy the house or find you a buyer</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--link.svg">
                <div>Unique chain-mending service</div>
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