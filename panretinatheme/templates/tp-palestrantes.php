<?php

/** 
 * Template Name: Palestrantes Internacionais
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage retina25theme
 *
 */

get_header();

$args = array(
    "post_type" => 'internacional',
    "posts_per_page" => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
);

$palestrantes = new WP_Query($args);

?>

<main role="main">

    <?= get_template_part('template-parts/c-page-header'); ?>

    <section class="py-20">
        <div class="container">

            <div class="grid grid-cols-12 gap-4 gap-y-12 2xl:items-center justify-center">

                <?php
                $cont = 0;
                if ($palestrantes->have_posts()) : while ($palestrantes->have_posts()) : $palestrantes->the_post();
                (has_post_thumbnail()) ? $img = get_post_thumbnail_id($post->ID) : $img = 109; ?>

                <div class="col-span-12 md:col-span-6">
                    <div class="flex gap-2 items-start 2xl:items-center max-xl:flex-wrap max-xl:justify-center">
                        <figure class="relative">
                            <?= wp_get_attachment_image($img, 'full', '', ['class' => 'rounded-full size-65 lg:size-50 lg:max-w-50 2xl:size-65 2xl:max-w-65 object-cover p-1 border-2 border-secondary']); ?>
                            <img src="<?= get_field('bandeira'); ?>" class="absolute bottom-2 right-9" alt="" width="50" height="50">
                        </figure>
                        <div class="p-6 max-xl:text-center">
                            <h2 class="h5 text-primary mb-4"> <?= the_title(); ?> </h2>
                            <div class="text-sm/6 u-list-style text-limit"> <?= the_content(); ?> </div>
                            <button type="button" class="btn-outline-primary mt-3 cursor-pointer" aria-haspopup="dialog" aria-expanded="false" aria-controls="modal-palestrante-<?= the_id(); ?>" data-hs-overlay="#modal-palestrante-<?= the_id(); ?>"> 
                                <?= is_language_en('Read more', 'Leia mais'); ?> 
                            </button>
                        </div>
                    </div>
                </div>

                <div id="modal-palestrante-<?= the_id(); ?>" class="hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none bg-gray-950/60 backdrop-blur-sm" role="dialog" tabindex="-1" aria-labelledby="#modal-palestrante-<?= the_id(); ?>-label">
                    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-56px)] min-h-[calc(100%-56px)] flex justify-center items-center">
                        <div class="w-160 max-w-full max-h-full overflow-hidden flex flex-col bg-white border border-white shadow-2xs rounded-lg pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b border-gray-200">
                                <h3 id="#modal-palestrante-<?= the_id(); ?>-label" class="font-bold text-primary h4">
                                    <?= the_title(); ?>
                                </h3>
                                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200" aria-label="Close" data-hs-overlay="#modal-palestrante-<?= the_id(); ?>">
                                    <span class="sr-only">Close</span>
                                    <i class="icon-clear h5 font-bold"></i>
                                </button>
                            </div>
                
                            <div class="p-4 pb-0 overflow-y-auto">
                                <div class="entry-content-post">
                                    <?= the_content(); ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <?php $cont++; endwhile; endif; ?>

            </div>


    </section>

</main>

<?php get_footer(); ?>