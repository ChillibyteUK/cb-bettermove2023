<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$img = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<main id="main" class="blog">
    <?php
    $content = get_the_content();
    $blocks = parse_blocks($content);
    $sidebar = array();
    $after;
    ?>
    <section class="breadcrumbs container-xl">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </section>
    <div class="container-xl">
        <div class="row g-4 pb-4">
            <div class="col-lg-9 order-2">
                <h1 class="blog__title"><?= get_the_title() ?></h1>
                <img src="<?= $img ?>" alt="" class="blog__image">
                <?php
                $count = estimate_reading_time_in_minutes(get_the_content(), 200, true, true);
                echo $count;

                foreach ($blocks as $block) {
                    if ($block['blockName'] == 'core/heading') {
                        if (!array_key_exists('level', $block['attrs'])) {
                            $heading = strip_tags($block['innerHTML']);
                            $id = acf_slugify($heading);
                            echo '<a id="' . $id . '" class="anchor"></a>';
                            $sidebar[$heading] = $id;
                        }
                    }
                    echo render_block($block);
                }
                ?>

                <div class="social-share mt-5">
                    <div>Share this article:</div>
                    <div class="d-flex justify-content-start align-items-center gap-3">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" class="has-secondary-400-color" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-2x fa-facebook-f" title="Share on Facebook"></i>
                        </a>
                        <a href="https://x.com/intent/post?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" class="has-secondary-400-color" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-2x fa-x-twitter" title="Share on X"></i>
                        </a>
                        <a href="https://threads.net/intent/post?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" class="has-secondary-400-color" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-2x fa-threads" title="Share on Threads"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" class="has-secondary-400-color" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-2x fa-linkedin-in" title="Share on LinkedIn"></i>
                        </a>
                        <a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&body=<?php echo rawurlencode('Check out this post: ' . get_permalink()); ?>" class="has-secondary-400-color" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-2x fa-envelope" title="Share via Email"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 order-1">
                <?php
                if ($sidebar) {
                ?>
                    <div class="sidebar">
                        <div class="h5 d-none d-lg-block">Quick Links</div>
                        <div class="h5 d-lg-none" data-bs-toggle="collapse" href="#links" role="button">Quick Links</div>
                        <div class="collapse d-lg-block pb-4" id="links">
                            <?php
                            foreach ($sidebar as $heading => $id) {
                            ?>
                                <li><a
                                        href="#<?= $id ?>"><?= $heading ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- <a href="/contacts/" class="btn btn btn-secondary btn-arrow">Let's Talk</a> -->
                        <div class="sidebar__form">
                            <div class="h5">Get an offer today</div>
                            <?= do_shortcode('[gravityform id="1" title="false"]') ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <section class="related pb-5">
            <h3><span>Related</span> Guides</h3>
            <div class="row g-4">
                <?php
                $cats = get_the_category();
                $ids = wp_list_pluck($cats, 'term_id');
                $r = new WP_Query(array(
                    'category__in' => $ids,
                    'posts_per_page' => 4,
                    'post__not_in' => array(get_the_ID())
                ));
                while ($r->have_posts()) {
                    $r->the_post();
                ?>
                    <div class="col-lg-3 col-md-6 index_blog">
                        <a class="index_blog__card"
                            href="<?= get_the_permalink(get_the_ID()) ?>">
                            <img class="index_blog__image"
                                src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large') ?>">
                            <div class="index_blog__content">
                                <h2 class="fs-5 index_blog__title pb-2 mb-0">
                                    <?= get_the_title(get_the_ID()) ?>
                                </h2>
                                <div class="d-flex flex-column">
                                    <div class="index_blog__read">
                                        <?= estimate_reading_time_in_minutes(get_the_content(null, false, get_the_ID()), 200, true, false) ?>m
                                        read
                                    </div>
                                    <div class="index_blog__meta">
                                        <div class="index_blog__date">
                                            <?= get_the_date('jS F, Y', get_the_ID()) ?>
                                        </div>
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
        </section>
    </div>
</main>
<?php
get_footer();
?>