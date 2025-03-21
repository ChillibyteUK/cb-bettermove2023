<?php
if (get_field('display') == 'centre') {
?>
<section class="cb_vimeo <?=get_field("background_colour")?>">
    <div class="container-xl py-5">
        <div class="row align-items-center">
            <div class="align-items-center g-5 text-center">
                <<?=get_field('title_type')?> class="h2"><?=get_field('title')?></<?=get_field('title_type')?>>
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
<section class="cb_vimeo <?=get_field("background_colour")?>">
    <div class="container-xl py-5">
        <div class="row align-items-center">
            <div class="align-items-center g-5 col-md-6">
                <<?=get_field('title_type')?> class="h2"><?=get_field('title')?></<?=get_field('title_type')?>>
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
<section class="cb_vimeo <?=get_field("background_colour")?>">
    <div class="container-xl py-5">
        <div class="row align-items-center">
            <div class="align-items-center g-5 col-md-6">
                <div class="ratio ratio-16x9 mt-0">
                    <iframe src="https://player.vimeo.com/video/<?=get_field("vimeo_id")?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="<?=get_field('title')?>"></iframe>
                </div>
            </div>
            <div class="align-items-center g-5 col-md-6">
                <<?=get_field('title_type')?> class="h2"><?=get_field('title')?></<?=get_field('title_type')?>>
                <div class="mb-4 mt-0">
                    <?=get_field('text')?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}