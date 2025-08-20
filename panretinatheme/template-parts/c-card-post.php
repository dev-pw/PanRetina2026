<?php

$img = (has_post_thumbnail()) ? get_post_thumbnail_id($post->ID) : 52;
$bg = (is_front_page()) ? 'bg-white' : 'bg-gray-50 shadow-md' ;

$catName = get_the_category()[0]->cat_name;
$catId = get_the_category()[0]->term_id;


?>

<div class="transition-all duration-200 overflow-hidden">

    <a href="<?= the_permalink(); ?>" title="<?= the_title(); ?>">
        <img src="<?= wp_get_attachment_image_src( $img, 'full')[0]; ?>" class="w-full object-cover h-50" alt="<?= get_post($img)->post_title; ?>">
    </a>

    <div class="p-8 pt-12 <?= $bg; ?> relative flex flex-col items-center">

        <div class="absolute -top-4 flex gap-3 p-3 bg-primary">

            <div class="col-auto text-xs">
                <i class="icon-calendar-o me-1 text-secondary"></i>
                <span class="text-white">
                    <?= get_the_date('d/m/Y'); ?>
                </span>
            </div>

            <?php if (has_category()): ?>
            <div class="col-auto text-xs text-white">
                <span class="icon-tag2 me-1 text-secondary"></span>
                <a href="<?= get_category_link($catId); ?>" class="hover:text-gray-400 transition-all" title="<?= $catName;?>"> <?= $catName; ?> </a>
            </div>
            <?php endif; ?>

        </div>

        <div class="content">
            <a href="<?= the_permalink(); ?>" class="text-primary block mb-4" title="<?= the_title(); ?>">
                <h2 class="h5"> <?= the_title(); ?> </h2>
            </a>
            <a href="<?= the_permalink(); ?>" class="text-primary" title="<?= the_title(); ?>">
                <div class="text-sm text-dark text-limit"> <?= get_the_excerpt(); ?> </div>
            </a>
        </div>

    </div>

</div>