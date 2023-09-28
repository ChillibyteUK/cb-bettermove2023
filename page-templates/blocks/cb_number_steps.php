<section class="number_steps py-5">
    <div class="container-xl text-center">
        <div class="preTitle"><?=get_field('pre_title')?></div>
        <h2 class="mb-5"><?=get_field('title')?></h2>
        <div class="number_steps__grid">
        <?php
        if (get_field('steps') ?? null) {
            $c = 1;
            while(have_rows('steps')) {
                the_row();
                ?>
        <div class="number_steps__card">
            <div class="number_steps__card_step">Step <?=$c?></div>
            <div class="number_steps__card_inner"><?=get_sub_field('content')?></div>
        </div>
                <?php
                $c++;
            }
        }
        ?>
        </div>
    </div>
</section>