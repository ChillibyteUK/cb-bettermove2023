<?php
/* Template Name: Guides Index */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$img = get_the_post_thumbnail_url(get_option( 'page_for_posts' ),'full');
?>
<main id="main">
<header class="hero" style="background-image:url(<?=$img?>);">
    <div class="container-xl">
        <div>
            <div class="preTitle text-white">Category</div>
            <h1>
                <?=single_cat_title()?>
            </h1>
            <a href="/blog/" class="light-link">&laquo; Back</a>
        </div>
    </div>
</header>
<div class="container-xl py-5">
    <div class="row g-4 mb-4">
        <?php
    while (have_posts()) {
        the_post();
        ?>
        <div class="col-lg-3 col-md-6 index_blog">
            <a class="index_blog__card" href="<?=get_the_permalink(get_the_ID())?>">
                <img class="index_blog__image" src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>">
                <div class="index_blog__content">
                    <h2 class="fs-5 index_blog__title pb-2 mb-0"><?=get_the_title(get_the_ID())?></h2>
                    <div class="d-flex flex-column">
                        <div class="index_blog__read"><?=estimate_reading_time_in_minutes(get_the_content(null, false, get_the_ID()), 200, true, false)?>m read</div>
                        <div class="index_blog__meta">
                            <div class="index_blog__date"><?=get_the_date('jS F, Y', get_the_ID())?></div>
                            <div class="readmore">Read more</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php
    }
    ?>
    </div>
    <?php
    /*
    numeric_posts_nav()
    */
    ?>
</div>
</main>
<?php

get_footer();
