<section class="contact_block py-5 text-white">
    <div class="container-xl">
        <div class="row g-5">
            <div class="col-md-3">
                <div class="preTitle">Let's talk</div>
                <h2 class="mb-4">Get in touch</h2>
                <a href="<?=get_field('whatsapp_link','options')?>" target="_blank" class="d-flex gap-4 align-items-center">
                    <i class="fa-brands fa-whatsapp has-green-400-color fa-2x"></i>
                    <div>WhatsApp 24/7</div>
                </a>
            </div>
            <div class="col-md-9">
                <?=do_shortcode('[gravityform id="2" title="false"]')?>
            </div>
        </div>
    </div>
</section>