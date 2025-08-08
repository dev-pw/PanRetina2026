<?php
/**
 * Template Name: Contato
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

           <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 gap-x-8">

                <div class="col-span-2 md:col-span-1">
                    <div class="shadow-lg rounded-2xl py-12 text-center h-full">

                        <h4 class="text-primary h5"> <?= is_language_en('Executive Secretariat', 'Secretaria Executiva'); ?>: </h4>

                        <div class="my-4 bg-gray-100 p-4">
                            <img src="<?= wp_get_attachment_image_src(63, 'full')[0]; ?>" alt="" class="mx-auto max-w-66">
                        </div>

                        <div class="pt-3">
                            <p class="mb-1">
                                <i class="icon-phone pe-2"></i>
                                <a href="https://wa.me5511932855078" target="_blank" class="text-primary underline">+55 11 93285 5078</a>
                            </p>
                            <p class="mb-1">
                                <i class="icon-envelope pe-2"></i> 
                                <a href="mailto:contato@atepeventos.com.br" target="_blank" class="text-primary underline">contato@atepeventos.com.br</a>
                            </p>
                            <p class="mb-1">
                                <i class="icon-earth pe-2"></i> 
                                <a href="https://www.atepeventos.com.br/" target="_blank" class="text-primary underline">https://www.atepeventos.com.br/</a>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-span-2 md:col-span-1">
                    <div class="shadow-lg rounded-2xl py-12 text-center h-full">

                        <h4 class="text-primary h5"><?= is_language_en('Presented by', 'Realização'); ?>:</h4>

                        <div class="flex flex-col flex-wrap justify-center gap-5 sm:flex-row my-4 gap-4 bg-gray-100 p-4">
                            <img src="<?= wp_get_attachment_image_src(65, 'full')[0]; ?>" alt="" class="max-w-66">
                            <img src="<?= wp_get_attachment_image_src(64, 'full')[0]; ?>" alt="" class="max-w-66">
                        </div>

                        <div class="pt-6">
                            <p class="mb-1"><i class="icon-phone pe-2"></i><a href="tel:+551132623587" target="_blank" class="text-primary underline">+55 11 3262 3587</a></p>
                            <p class="mb-1"><i class="icon-envelope pe-2"></i> <a href="mailto:atendimento@sbrv.org.br" target="_blank" class="text-primary underline">atendimento@sbrv.org.br</a></p>
                            <p class="mb-1"><i class="icon-earth pe-2"></i> <a href="https://www.sbrv.org/" target="_blank" class="text-primary underline">https://www.sbrv.org/</a></p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>

