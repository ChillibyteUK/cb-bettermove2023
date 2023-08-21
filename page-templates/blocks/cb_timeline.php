<section class="timeline">
    <div class="container-xl">
        <h2 class="text-center mb-5"><?=get_field('title')?></h2>

        <div class="timescales">
            <div class="bubbles bubble-1"><span class="subtext">Less than</span><span class="maintext">1 month</span></div>
            <div class="bubbles bubble-2"><span class="subtext">Up to</span><span class="maintext">2 months</span></div>
            <div class="bubbles bubble-3"><span class="subtext">Around</span><span class="maintext">3 months</span></div>
        </div>
        <div class="slider-wrap">
            <div class="step1"></div>
            <div class="step2"></div>
            <div class="step3"></div>
            <div class="step4"></div>
            <div class="step5"></div>
            <input type="range" id="timeline" class="form-range" min="1" max="5" value="1" step="1">
        </div>


        <div class="main-wrap">
            <div class="timeline__tab active" id="tab-1">
                <h3><?=get_field('title_tab_1')?></h3>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <?=get_field('content_tab_1')?>
                        <div class="d-flex gap-4">
                            <div class="pros">
                                <h4>Pros</h4>
                                <ul class="fa-ul">
                                    <?=cb_icon_list(get_field('pros_tab_1'),'fa-solid fa-check has-green-400-color')?>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4>Cons</h4>
                                <ul class="fa-ul">
                                    <?=cb_icon_list(get_field('cons_tab_1'),'fa-solid fa-times has-red-400-color')?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img decoding="async" src="<?=wp_get_attachment_image_url(get_field('image_tab_1'),'full')?>">
                    </div>
                </div>
                <a class="btn btn-secondary btn-arrow" onclick="scrollSmoothTo('content')">Learn More</a>
            </div>
  
            <div class="timeline__tab" id="tab-2">
                <h3><?=get_field('title_tab_2')?></h3>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <?=get_field('content_tab_2')?>
                        <div class="d-flex gap-4">
                            <div class="pros">
                                <h4>Pros</h4>
                                <ul class="fa-ul">
                                    <?=cb_icon_list(get_field('pros_tab_2'),'fa-solid fa-check has-green-400-color')?>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4>Cons</h4>
                                <ul class="fa-ul">
                                    <?=cb_icon_list(get_field('cons_tab_2'),'fa-solid fa-times has-red-400-color')?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img decoding="async" src="<?=wp_get_attachment_image_url(get_field('image_tab_2'),'full')?>">
                    </div>
                </div>
                <a class="btn btn-secondary btn-arrow" href="/online-auctions/">Learn More</a>
            </div>
  
            <div class="timeline__tab" id="tab-3">
                <h3><?=get_field('title_tab_3')?></h3>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <?=get_field('content_tab_3')?>
                        <div class="d-flex gap-4">
                            <div class="pros">
                                <h4>Pros</h4>
                                <ul class="fa-ul">
                                    <?=cb_icon_list(get_field('pros_tab_3'),'fa-solid fa-check has-green-400-color')?>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4>Cons</h4>
                                <ul class="fa-ul">
                                    <?=cb_icon_list(get_field('cons_tab_3'),'fa-solid fa-times has-red-400-color')?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img decoding="async" src="<?=wp_get_attachment_image_url(get_field('image_tab_3'),'full')?>">
                    </div>
                </div>
                <a class="btn btn-secondary btn-arrow" href="/how-it-works/">Learn More</a>
            </div>

        </div>
    </div>
</section>
<a class="anchor" id="content"></a>
<?php
add_action('wp_footer',function(){
    ?>
<script>
var range = document.getElementById('timeline');
range.addEventListener('change',function(){
    switchTab(this.value);
});

function switchTab(tab) {
    var tab1 = document.getElementById('tab-1');
    var tab2 = document.getElementById('tab-2');
    var tab3 = document.getElementById('tab-3');

    tab1.classList.remove('active');
    tab2.classList.remove('active');
    tab3.classList.remove('active');

    if (tab <= 2) {
        tab1.classList.add('active');
    } else if (tab == 3) {
        tab2.classList.add('active');
    } else if (tab >= 4) {
        tab3.classList.add('active');
    }
}

function scrollSmoothTo(elementId) {
  var element = document.getElementById(elementId);
  element.scrollIntoView({
    block: 'start',
    behavior: 'smooth'
  });
}
</script>
    <?php
});