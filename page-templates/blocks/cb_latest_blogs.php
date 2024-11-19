<style>
.blog_card__image {
    aspect-ratio: 16 / 9;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: center;
    object-position: center;
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
}

.blog_card__content {
    padding: .5rem;
}

.blog_card__title {
    font-size: 1.1rem;
}

.blog_card {
    background-color: var(--col-grey);
    border-radius: 1rem;
    height: 100%;
    text-decoration: none;
    display: block;
    color: #000;
    transition: all .3s ease-out;
    box-shadow: rgba(0, 0, 0, .16) 0 3px 6px, rgba(0, 0, 0, .23) 0 3px 6px;
}

.has-grey-background-color {
    background-color: var(--col-secondary-200);
}

.bg-grey--half {
    background-image: url("data:image/svg+xml,<?xmlversion='1.0'encoding='UTF-8'?><svgid='Layer_2'data-name='Layer2'xmlns='http://www.w3.org/2000/svg'viewBox='008.47504'><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#fff0f0;}</style></defs><gid='Layer_1-2'data-name='Layer1'><rectclass='cls-2'width='8.47'height='252'/><rectclass='cls-1'y='252'width='8.47'height='252'/></g></svg>");
    background-size: cover;
    background-position: center;
}
</style>
<!-- latest_guides -->
<section class="latest_guides">
    <div class="has-grey-background-color">
        <div class="container-xl pt-5 pb-4">
            <?php
            if(get_field('title')) {
                ?>
            <h2 class="mb-4 text-center"><?=get_field('title')?></h2>
                <?php
            }
            if(get_field('intro')) {
                ?>
            <div class="text-center mw-md-75 mb-4"><?=get_field('intro')?></div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="bg-grey--half pb-5">
        <div class="container-xl">
            <div class="row g-4 mb-4">
                <?php
                $q = new WP_Query(array(
                    'posts_per_page' => 4
                ));
                while ($q->have_posts()) {
                    $q->the_post();
                    $img = get_the_post_thumbnail(get_the_ID(),'full',array('class' => 'blog_card__image','loading' => 'lazy'));
                    ?>
            <div class="col-md-6 col-xl-3">
                <a class="blog_card" href="<?=get_the_permalink($q->ID)?>">
                    <?=$img?>
                    <div class="blog_card__content">
                        <h3 class="blog_card__title"><?=get_the_title($q->ID)?></h3>
                    </div>
                </a>
            </div>
                    <?php
                }
                ?>
            </div>
            <div class="text-center"><a href="/blog/" class="btn btn-primary btn-arrow">View All Blogs</a></div>
        </div>
    </div>
</section>