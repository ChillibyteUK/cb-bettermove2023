<section class="contact_details has-grey-200-background-color">
    <div class="container-xl py-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <ul class="fa-ul mb-5">
                    <li><span class="fa-li fa-2x"><i class="fa-solid fa-phone"></i></span>
                        <?=do_shortcode('[contact_phone]')?>
                    </li>
                    <li><span class="fa-li fa-2x"><i class="fa-brands fa-whatsapp"></i></span> <a
                            href="<?=get_field('whatsapp_link', 'options')?>">WhatsApp
                            24/7</a></li>
                    <li><span class="fa-li fa-2x"><i class="fa-regular fa-envelope"></i></span>
                        <?=do_shortcode('[contact_email]')?>
                    </li>
                    <li><span class="fa-li fa-2x"><i class="fa-solid fa-location-dot"></i></span>
                        <?=get_field('contact_address', 'options')?>
                    </li>
                </ul>
                <div class="mb-4 w-100">
                    <!-- TrustBox widget - Flex -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="54197383fd9dceac42a68694" data-businessunit-id="53256fbc000064000578657f"  data-style-width="100%" data-style-size="M" data-border-type="shadow" data-headline="star" data-support-text="review-number" data-brand-color="#f3948c" data-contrast-color="#2f2f2f" style="max-width: fit-content; position: relative;">
                        <a href="https://www.trustpilot.com/review/www.bettermove.co.uk" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.7812067284144!2d-1.5444309232409046!3d53.79338157242242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795c188c91438f%3A0xa0f836a786ce3a0e!2s20-22%20Bridge%20End%2C%20Leeds%20LS1%204DJ!5e0!3m2!1sen!2suk!4v1692360950937!5m2!1sen!2suk"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 mb-4">
                <div class="contact_details__form">
                    <?=do_shortcode('[gravityform id="3" title="false"]')?>
                </div>
            </div>
        </div>
    </div>
</section>