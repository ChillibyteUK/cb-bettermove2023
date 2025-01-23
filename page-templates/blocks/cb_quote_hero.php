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
        <div class="row mt-4">
            <div class="col-md-2">Homeowners</div>
            <div class="col-md-2">Landlords</div>
            <div class="col-md-2">Investors</div>
        </div>
    </div>
</section>

<section class="portals py-5 has-primary-400-color">
    <div class="container-xl text-center">
        <div class="portalslicknew">
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/themes/cb-bettermove2023/img/napb-logo.jpg" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2024/11/rightmove.png" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/themes/cb-bettermove2023/img/gov-uk.png" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2024/11/zoopla.png" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2024/11/onthemarket.png" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/themes/cb-bettermove2023/img/logo-ombudsman--dk.png" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2024/11/primelocation.png" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    (function($) {
        $('.portalslicknew').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 7,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        dots: false
                    }
                }
            ]
        })
    })(jQuery);
</script>
<?php
}, 9999);
?>

<style>
.split-bg {
    background: #f1f4f5;
}

@media (min-width: 768px) {
    .split-bg {
        background: linear-gradient(to right, #f1f4f5 0%, #f1f4f5 50%, #fbeae8 50%, #fbeae8 100%);
    }  
}
</style>
<div class="container-fluid split-bg">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6 p-5">
                <h2>We find you a buyer</h2>
                <p>In 30 days or less we matchmake your property with one of our pre-approved cash buyers.</p>
                <a href="/get-your-cash-offer/" class="btn btn-primary btn-arrow">Find my buyer</a>
            </div>
            <div class="col-md-6 p-5">
                <h2>We buy your property</h2>
                <p>We use our funds to buy your property directly from you in a timeframe that suits you.</p>
                <a href="/get-your-cash-offer/" class="btn btn-primary btn-arrow">Buy my property</a>
            </div>
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
        <div class="icon_grid mb-0">
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