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
    background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg id='Layer_2' data-name='Layer 2' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8.47 504'%3E%3Cdefs%3E%3Cstyle%3E .cls-1 %7B fill: %23fff; %7D .cls-2 %7B fill: %23fff0f0; %7D %3C/style%3E%3C/defs%3E%3Cg id='Layer_1-2' data-name='Layer 1'%3E%3Crect class='cls-2' width='8.47' height='252'/%3E%3Crect class='cls-1' y='252' width='8.47' height='252'/%3E%3C/g%3E%3C/svg%3E");
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