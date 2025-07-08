<section class="mb-0 has-secondary-200-background-color py-5">
    <div class="container">
        <div class="row">
            <?php
            if(get_field('title')) {
            ?>
            <div class="h2 text--black mb-2"><?=get_field('title')?></div>
            <?php
            }

            if(get_field('sub_title')) {
            ?>
            <div class="h3 text--black mb-4"><?=get_field('sub_title')?></div>
            <?php
            }
            ?>
        </div>
        <div class="row g-4">
            <?php
            $args = array(
                'post_type'      => 'customer-stories',
                'posts_per_page' => -1, // get all, we'll handle visibility in frontend
            );

            $customer_stories = new WP_Query($args);
            $post_count = 0;

            if ($customer_stories->have_posts()) :
                while ($customer_stories->have_posts()) : $customer_stories->the_post();
                    $post_count++;
                    $is_hidden = $post_count > 4 ? 'd-none extra-story' : '';
                    ?>
                    <div class="col-lg-3 col-md-6 index_blog <?= $is_hidden ?>">
                        <a class="index_blog__card" href="<?= get_the_permalink() ?>">
                            <?php
                            $thumbnail_url = has_post_thumbnail() 
                                ? get_the_post_thumbnail_url(get_the_ID(), 'large') 
                                : '/wp-content/uploads/2025/07/holder.png'; // adjust the path to your actual placeholder
                            ?>
                            <img class="index_blog__image" src="<?= esc_url($thumbnail_url) ?>" alt="<?= esc_attr(get_the_title()) ?>">
                            <div class="index_blog__content">
                                <h2 class="fs-5 index_blog__title pb-2 mb-0"><?= get_the_title() ?></h2>
                            </div>
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No customer stories found.</p>';
            endif;
            ?>
        </div>

        <?php if ($post_count > 4): ?>
            <div class="text-center mt-4">
                <button class="btn btn-primary" id="toggleViewAll">View All</button>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.getElementById('toggleViewAll');
    const extraItems = document.querySelectorAll('.extra-story');
    let expanded = false;

    toggleBtn.addEventListener('click', function() {
        extraItems.forEach(item => item.classList.toggle('d-none'));
        expanded = !expanded;
        toggleBtn.textContent = expanded ? 'Show Less' : 'View All';
    });
});
</script>