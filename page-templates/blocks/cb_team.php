<section class="team py-5">
    <div class="container-xl text-center">
        <div class="preTitle">Property Experts</div>
        <h2 class="mb-4">Meet the team</h2>
        <div class="row g-5 justify-content-center">
        <?php
        while(have_rows('team')) {
            the_row();
            $img = wp_get_attachment_image_url(get_sub_field('image'),'full') ?: get_stylesheet_directory_uri() . '/img/missing-person.jpg';
            ?>
        <div class="col-md-6 col-lg-4">
            <img src="<?=$img?>" alt="" class="team__image">
            <div class="team__name"><?=get_sub_field('name')?></div>
            <div class="team__role"><?=get_sub_field('role')?></div>
            <div class="team__email"><a href="mailto:<?=get_sub_field('email')?>"><?=get_sub_field('email')?></a></div>
        </div>
            <?php
        }

        if (get_field('vacancy')) {
            ?>
        <div class="col-md-6 col-lg-4">
            <img src="<?=get_stylesheet_directory_uri()?>/img/missing-person.jpg" alt="" class="team__image">
            <div class="team__role">Could this be you?</div>
            <div>If you are interested in joining a growing and exciting team, them please contact us on <?=do_shortcode('[contact_phone]')?> or email
            <div class="team__email"><?=do_shortcode('[contact_email]')?></div>
        </div>
            <?php
        }
        ?>
        </div>
    </div>
</section>