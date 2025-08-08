<?php
/**
 * Template Name: Hospedagem
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage pwtheme
 *
*/

get_header();

?>

<main role="main">

    <?= get_template_part('template-parts/c-page-header'); ?>

    <div class="py-20">
        <div class="container">

           <div class="flex gap-4 justify-center">

                <div class="w-full md:w-[55%] 2xl:w-[40%]">
                    <div class="shadow-xl rounded-2xl py-10 text-center h-full">

                        <div class="my-6 bg-gray-100 p-6">
                            <img src="<?= wp_get_attachment_image_src( 66, 'full')[0]; ?>" alt="" class="mx-auto max-w-75">
                        </div>

                        <div class="pt-3">
                            <p class="mb-1">
                                <i class="icon-phone pe-2"></i>
                                <a href="tel:+5521982364414" target="_blank" class="text-primary underline">+55 21 3547 1680</a>
                            </p>
                            <p class="mb-1">
                                <i class="icon-envelope pe-2"></i> 
                                <a href="mailto:eventos@singularis.tur.br" target="_blank" class="text-primary underline">eventos@singularis.tur.br</a>
                            </p>
                            <p class="mb-1">
                                <i class="icon-earth pe-2"></i> 
                                <a href="https://singularis.tur.br/" target="_blank" class="text-primary underline">https://singularis.tur.br/</a>
                            </p>
                        </div>

                        <a class="btn-primary mt-4" href="https://retina2025.bukly.com/" target="_blank"> <?= is_language_en('BOOK NOW', 'RESERVAR'); ?> </a>

					</div>
				</div>

			</div>	

        </div>
    </div>

</main>

<?php get_footer(); ?>

