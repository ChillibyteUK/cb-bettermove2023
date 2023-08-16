<section class="timeline">
    <div class="container-xl">
        <h2 class="text-center mb-5">How quickly would you like to sell?</h2>

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
                <h3>Bespoke quick sale solution</h3>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <p>We will be the buyer which means we will physically buy the property from you for cash. We can complete as quickly as you like, typically 7 - 10 days, but are totally flexible to suit your needs and requirements.</p>
                        <p><strong>Best suited for:</strong> those who value certainty, peace of mind and convenience over getting the best possible price.</p>
                        <div class="d-flex gap-4">
                            <div class="pros">
                                <h4>Pros</h4>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> Quick - 7 days</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> No fall throughs</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> Any property is suitable even un-mortgageable</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4>Cons</h4>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa-solid fa-times has-red-400-color"></i></span> You will not get the best possible price</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img decoding="async" src="https://www.bettermove.co.uk/wp-content/uploads/2021/12/cashbuy.svg">
                    </div>
                </div>
                <a class="btn btn-secondary btn-arrow" onclick="scrollSmoothTo('content')">Learn More</a>
            </div>
  
            <div class="timeline__tab" id="tab-2">
                <h3>Auction Route</h3>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <p>We will encourage competitive bidding amongst our best investors in an auction format. Once the sale ends the buyer exchanges for total peace of mind.</p>
                        <p><strong>Best suited for:</strong> those that have a property that may be unsuitable for standard mortgage buyers and are prepared to take a risk to get a better price but with less certainty.</p>
                        <div class="d-flex gap-4">
                            <div class="pros">
                                <h4>Pros</h4>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> When the sale ends the buyer exchanges</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> Legally binding</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> Complete peace of mind</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4>Cons</h4>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa-solid fa-times has-red-400-color"></i></span> Not all properties are suitable</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-times has-red-400-color"></i></span> Is the slowest method</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img decoding="async" src="https://www.bettermove.co.uk/wp-content/uploads/2021/12/auction.svg">
                    </div>
                </div>
                <a class="btn btn-secondary btn-arrow" href="/online-auctions/">Learn More</a>
            </div>
  
            <div class="timeline__tab" id="tab-3">
                <h3>Investor Route</h3>
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <p>We will match your property to our extensive network of investors and cash buyers and find you a buyer in 30 days or less.</p>
                        <p><strong>Best suited for:</strong> those who want to maximize the amount they receive for their property and are prepared to wait a little longer for completion.</p>
                        <div class="d-flex gap-4">
                            <div class="pros">
                                <h4>Pros</h4>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> Get almost full value</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> Much faster than the traditional routes</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-check has-green-400-color"></i></span> Buyer commitment fee</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4>Cons</h4>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa-solid fa-times has-red-400-color"></i></span> Can take longer than if we were to be the buyer</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-times has-red-400-color"></i></span> Buyer can still pull out</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img decoding="async" src="https://www.bettermove.co.uk/wp-content/uploads/2021/12/investor.svg">
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