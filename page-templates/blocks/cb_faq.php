<?php
$class = $block['backgroundColor'] ?? null;
if ($class) {
    $class = 'has-' . $class . '-background-color';
}
?>
<section class="faqs py-5 <?=$class?>">
    <div class="container-xl text-center">
        <div class="preTitle">Got questions?</div>
        <h2 class="mb-4"><?=get_field('title')?></h2>
        <?php
        if (get_field('intro')) {
            ?>
        <div class="w-constrained mb-5">
            <?=get_field('intro')?>
        </div>
            <?php
        }
        ?>
    </div>
    <div class="container-xl">
    <?php
    $accordion = random_str(5);

    echo '<div itemscope="" itemtype="https://schema.org/FAQPage" id="accordion' .  $accordion . '" class="accordion accordion-flush">';
    $counter = 0;
    $show = 'show';
    $collapsed = '';
    while (have_rows('faqs')) {
        the_row();
        $ac = $accordion . '_' . $counter;
        ?>
        <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question" class="accordion-item">
            <div class="accordion-head accordion-collapse <?=$collapsed?>" itemprop="name" data-bs-toggle="collapse" id="heading_<?=$ac?>" data-bs-target="#c<?=$ac?>" aria-expanded="true" aria-controls="collapse_<?=$ac?>">
                <div class="pb-1"><?=get_sub_field('question')?></div>
            </div>
            <div class="collapse <?=$show?>" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="c<?=$ac?>" aria-labelledby="heading_<?=$ac?>" data-bs-parent="#accordion<?=$accordion?>">
                <div itemprop="text" class="faq__answer"><?=get_sub_field('answer')?></div>
            </div>
        </div>
        <?php
        $counter++;
        $show = '';
        $collapsed = 'collapsed';
    }
    echo '</div>';
     ?>
    </div>
</section>