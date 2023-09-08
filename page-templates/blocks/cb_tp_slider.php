<section class="tp_slider py-5">
    <div class="container-xl">
        <div class="tp_slider__slider">
            <div class="tp_slider__card"><img src="<?=get_stylesheet_directory_uri()?>/img/napb-logo.jpg" alt=""></div>
            <div class="tp_slider__card"><img src="<?=get_stylesheet_directory_uri()?>/img/logo-ombudsman--dk.png" alt=""></div>
            <div class="tp_slider__card"><img src="<?=get_stylesheet_directory_uri()?>/img/hmrc.jpg" alt=""></div>
            <div class="tp_slider__card"><img src="<?=get_stylesheet_directory_uri()?>/img/logo-trans-allagents.png" alt=""></div>
            <div class="tp_slider__card"><img src="<?=get_stylesheet_directory_uri()?>/img/trustpilot-4.6-stars.png" alt=""></div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer',function(){
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
(function($) {
    $('.tp_slider__slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
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
},9999);