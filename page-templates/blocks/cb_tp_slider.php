<section class="tp_slider portals py-5 has-primary-400-color">
    <div class="container-xl text-center">
        <div class="d-none d-lg-flex flex-wrap justify-content-between align-items-center">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/napb.jpg" class="img-fluid" style="max-height: 50px;">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/rightmove.jpg" class="img-fluid" style="max-height: 50px;">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/gov.jpg" class="img-fluid" style="max-height: 50px;">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/zoopla.jpg" class="img-fluid" style="max-height: 50px;">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/onthemarket.jpg" class="img-fluid" style="max-height: 50px;">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/ombudsman.jpg" class="img-fluid" style="max-height: 50px;">
            <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/primelocation.jpg" class="img-fluid" style="max-height: 50px;">
        </div>
        <div class="portalslicknew d-lg-none">
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/napb.jpg" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/rightmove.jpg" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/gov.jpg" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/zoopla.jpg" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/onthemarket.jpg" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/ombudsman.jpg" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
            <div class="">
                <img src="https://www.bettermove.co.uk/wp-content/uploads/2025/01/primelocation.jpg" class="img-fluid" style="max-height: 50px; margin: auto;">
            </div>
        </div>
    </div>
</section>
<section class="tp_slider py-5">
    <div class="container-xl">
        <div class="tp_slider__slider">
            <div class="tp_slider__card"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/napb-logo.jpg"
                    alt=""></div>
            <div class="tp_slider__card"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/logo-ombudsman--dk.png"
                    alt=""></div>
            <div class="tp_slider__card"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/gov-uk.png"
                    alt=""></div>
            <div class="tp_slider__card"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/all-agents.png"
                    alt=""></div>
            <div class="tp_slider__card"><img
                    src="<?=get_stylesheet_directory_uri()?>/img/reviews-io-4.9.png"
                    alt=""></div>
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