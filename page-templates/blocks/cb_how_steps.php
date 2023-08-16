<section class="how_steps py-5">
    <div class="container-xl text-center">
        <div class="preTitle">The better way</div>
        <h2 class="mb-5">How it works</h2>
        <div class="how_steps__grid">
        <?php
        $rowCount = count( get_field('steps') );

        while(have_rows('steps')) {
            the_row();
            ?>
        <div class="how_steps__card">
            <div class="how_steps__card_inner">
                <h3><?=get_sub_field('title')?></h3>
                <div><?=get_sub_field('content')?></div>
            </div>
            <div class="how_steps__divider"></div>
        </div>
            <?php
        }
        ?>
        </div>
    </div>
</section>