<?php
$bg = wp_get_attachment_image_url(get_field('background'), 'full');

if ( is_page(108899) ) {
?>
<section class="quote_hero" style="height: auto;">
    <div class="container-xl py-5" style="isolation: isolate; background-image:url(<?=$bg?>)">
        <h1 class="mb-5">
            <?=get_field('title')?><br class="d-none d-md-block">
            <span class="smaller">the better way to sell your property</span>
        </h1>
        <!-- <div class="pre_form">Get a <span>cash offer</span> on your home today!</div> -->
        <div class="hero_form">
            <?=do_shortcode('[gravityform id="1"]')?>
        </div>
        <div class="pt-4">
            <!-- TrustBox widget - Flex -->
            <div class="trustpilot-widget" data-locale="en-US" data-template-id="54197383fd9dceac42a68694" data-businessunit-id="53256fbc000064000578657f"  data-style-width="100%" data-style-size="S" data-border-type="shadow" data-headline="star" data-support-text="review-number" data-brand-color="#f3948c" data-contrast-color="#2f2f2f" style="position: relative;max-width: 450px;">
              <a href="https://www.trustpilot.com/review/www.bettermove.co.uk" target="_blank" rel="noopener">Trustpilot</a>
            </div>
            <!-- End TrustBox widget -->
        </div>
    </div>
</section>

<div class="container-xl py-5">
    <div class="row">
        <div class="col">
            <img src="https://www.bettermove.co.uk/wp-content/themes/cb-bettermove2023/img/napb-logo.jpg" class="img-fluid">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2024/11/rightmove.png" class="img-fluid">
            <img src="https://www.bettermove.co.uk/wp-content/themes/cb-bettermove2023/img/gov-uk.png" class="img-fluid">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2024/11/zoopla.png" class="img-fluid">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2024/11/onthemarket.png" class="img-fluid">
            <img src="https://www.bettermove.co.uk/wp-content/themes/cb-bettermove2023/img/logo-ombudsman--dk.png" class="img-fluid">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2024/11/primelocation.png" class="img-fluid">
        </div>
    </div>
</div>

<div class="quote_hero__usp">
    <div class="container-xl py-5">
        <div class="icon_grid">
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--heart.svg">
                <div>Bespoke quick sale solutions</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--clock.svg">
                <div>Sell today or in a month - you decide</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--message.svg">
                <div>We can buy the property or find a buyer</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--link.svg">
                <div>Unique chain-mending service</div>
            </div>
            <div>
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/icons/icon--key.svg">
                <div>Total peace of mind with every sale</div>
            </div>
        </div>
    </div>
</section>
<?php
} else {
?>
<section class="quote_hero" style="height: auto;">
    <div class="container-xl py-5" style="background-image:url(<?=$bg?>)">
        <h1 class="mb-5">
            <?=get_field('title')?><br class="d-none d-md-block">
            <span class="smaller">to sell your property</span>
        </h1>
        <!-- <div class="pre_form">Get a <span>cash offer</span> on your home today!</div> -->
        <div class="hero_form">
            <?=do_shortcode('[gravityform id="1"]')?>
        </div>
        <div class="pt-4">
            <!-- TrustBox widget - Flex -->
            <div class="trustpilot-widget" data-locale="en-US" data-template-id="54197383fd9dceac42a68694" data-businessunit-id="53256fbc000064000578657f"  data-style-width="100%" data-style-size="S" data-border-type="shadow" data-headline="star" data-support-text="review-number" data-brand-color="#f3948c" data-contrast-color="#2f2f2f" style="position: relative;max-width: 450px;">
              <a href="https://www.trustpilot.com/review/www.bettermove.co.uk" target="_blank" rel="noopener">Trustpilot</a>
            </div>
            <!-- End TrustBox widget -->
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
<?php
}