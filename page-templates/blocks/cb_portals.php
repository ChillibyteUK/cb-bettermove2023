<section class="portals py-5 has-primary-400-color">
    <div class="container-xl text-center">
        <div class="preTitle">Property Portals</div>
        <h2 class="mb-5">Appearing on</h2>
        <div class="portalslick">
            <div class="">
                <img src="<?=get_stylesheet_directory_uri()?>/img/logo-rightmove.png"
                    alt="rightmove">
            </div>
            <div class="">
                <img src="<?=get_stylesheet_directory_uri()?>/img/logo-zoopla.png"
                    alt="Zoopla">
            </div>
            <div class="">
                <img src="<?=get_stylesheet_directory_uri()?>/img/logo-onthemarket.png"
                    alt="OnTheMarket">
            </div>
            <div class="">
                <img src="<?=get_stylesheet_directory_uri()?>/img/logo-primelocation.png"
                    alt="PrimeLocation">
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
        $('.portalslick').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        })
    })(jQuery);
</script>
<?php
}, 9999);