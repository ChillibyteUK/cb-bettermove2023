<?php
$classes = $block['className'] ?? null;
?>
<section class="calculator bg-grey--half py-5 <?=$classes?>">
    <div class="container-xl">
        <div class="preTitle text-center"><?=get_field('pre_title')?></div>
        <h2 class="mb-5 text-center"><?=get_field('title')?></h2>
        <div class="calcContainer p-4">
            <div class="row g-4">
                <div class="col-12">
                    <div>Your House Valuation</div>
                    <div id="valuation"></div>
                    <label for="price" class="visually-hidden">Price</label>
                    <input type="range" class="form-range" min="1" max="5" id="price" value="1">
                </div>
                <div class="col-md-6">
                    <div id="esLabel" class="fw-bold">Typical<br>Estate Agent</div>
                    <div id="esPrice"></div>
                </div>
                <div class="col-md-6">
                    <div id="bmLogo">
                        <img src="<?=get_stylesheet_directory_uri()?>/img/bm-logo.svg" width=300 height=60 alt="Bettermove">
                        <span class="fa-stack" style="vertical-align:top;" type="button" data-bs-toggle="modal" data-bs-target="#calcDetail">
                            <i class="fa-regular fa-circle fa-stack-2x"></i>
                            <i class="fa-solid fa-info fa-stack-1x"></i>
                        </span>
                    </div>
                    <div id="gaPrice"></div>
                </div>
                <div class="col-12">
                    <div id="diff" class="text-center"></div>
                </div>
                <div class="col-12 text-center">
                    <a href="/get-offer/" class="btn btn-primary btn-arrow">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="calcDetail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="h5 modal-title">Calculation Detail</div>
                <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Calculation based on the market average time to sell being 7 months as per the UK current average (time to completion). This includes:
                <ul>
                    <li>True market valuation</li>
                    <li>Estate agent fees</li>
                    <li>Survey</li>
                    <li>Conveyancing Fees</li>
                    <li>Utility Bills</li>
                    <li>Council Tax</li>
                    <li>Mortgage Costs</li>
                    <li>Clearance & Clearing</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
add_action('wp_footer',function(){
    ?>
<script>
(function($){

    const outputs = [
        {
            esPrice: 79625,
            gaPrice: 82500,
            diff: '&pound;2,875 more and zero stress'
        },
        {
            esPrice: 163450,
            gaPrice: 165000,
            diff: '&pound;1,550 more and zero stress'
        },
        {
            esPrice: 247275,
            gaPrice: 247500,
            diff: '&pound;225 more and zero stress'
        },
        {
            esPrice: 331100,
            gaPrice: 330000,
            diff: '&pound;1,100 less but zero stress'
        },
        {
            esPrice: 414925,
            gaPrice: 412500,
            diff: '&pound;2,425 less but zero stress'
        }
    ];

    calculate();


    $('#price').on('input', calculate);

    function calculate(){
        var valuation = $('#price').val();
        var ix = valuation - 1;
        valuation = valuation * 100000;
        var diff = outputs[ix].esPrice - outputs[ix].gaPrice;

        $('#esPrice').html('&pound;'+outputs[ix].esPrice.toLocaleString('en-GB'));
        $('#gaPrice').html('&pound;'+outputs[ix].gaPrice.toLocaleString('en-GB'));
        $('#valuation').html('&pound;'+valuation.toLocaleString('en-GB'));
        $('#diff').html(outputs[ix].diff);
    }

})(jQuery);
</script>
    <?php
},9999);