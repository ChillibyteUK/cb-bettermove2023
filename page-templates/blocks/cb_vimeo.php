<?php
echo get_field('display');

if (get_field('display') == 'center') {
?>
<section class="cb_vimeo">
    <div class="container-xl py-5">
        <div class="row">
            <div class="align-items-center g-5 text-center">
                <h2><?=get_field('title')?></h2>
                <div class="mb-4 mt-0">
                    <?=get_field('text')?>
                </div>
                <div class="ratio ratio-16x9 mt-0">
                    <iframe src="https://player.vimeo.com/video/<?=get_field("vimeo_id")?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="<?=get_field('title')?>"></iframe>
                </div>
            </div>
        </div>
</section>
<?php
} elseif (get_field('display') == 'right') {
?>
<section class="cb_vimeo">
    <div class="container-xl py-5">
        <div class="row">
            <div class="align-items-center g-5 col-md-6">
                <h2><?=get_field('title')?></h2>
                <div class="mb-4 mt-0">
                    <?=get_field('text')?>
                </div>
            </div>
            <div class="align-items-center g-5 col-md-6">
                <div class="ratio ratio-16x9 mt-0">
                    <iframe src="https://player.vimeo.com/video/<?=get_field("vimeo_id")?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="<?=get_field('title')?>"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
} else {
?>
<section class="cb_vimeo">
    <div class="container-xl py-5">
        <div class="row">
            <div class="align-items-center g-5 col-md-6">
                <div class="ratio ratio-16x9 mt-0">
                    <iframe src="https://player.vimeo.com/video/<?=get_field("vimeo_id")?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="<?=get_field('title')?>"></iframe>
                </div>
            </div>
            <div class="align-items-center g-5 col-md-6">
                <h2><?=get_field('title')?></h2>
                <div class="mb-4 mt-0">
                    <?=get_field('text')?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>